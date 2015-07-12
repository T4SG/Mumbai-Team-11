using System;
using System.Collections.Generic;
using System.Linq;
using System.Net;
using System.Windows;
using System.Windows.Controls;
using System.Windows.Navigation;
using Microsoft.Phone.Controls;
using Microsoft.Phone.Shell;
using PhoneApp3.Resources;
using System.IO;
using Hammock.Web;

namespace PhoneApp3
{
    public partial class MainPage : PhoneApplicationPage
    {
        string OAuthTokenKey = string.Empty;
        string tokenSecret = string.Empty;
        string accessToken = string.Empty;
        string accessTokenSecret = string.Empty;
        string userID = string.Empty;
        string userScreenName = string.Empty;
        Uri lasturl;

        // Constructor
        public MainPage()
        {
            InitializeComponent();
            
            if (isAlreadyLoggedIn())
            {
                userLoggedIn();
                wel.Visibility = System.Windows.Visibility.Visible;
                user.Visibility = System.Windows.Visibility.Visible;
                tagline.Visibility = System.Windows.Visibility.Visible;
            }
            else
            {
                mybird.Visibility = System.Windows.Visibility.Visible;
                bird.Visibility = System.Windows.Visibility.Visible;
            }
         

            // Sample code to localize the ApplicationBar
            //BuildLocalizedApplicationBar();
        }

        private Boolean isAlreadyLoggedIn()
        {
            accessToken = MainUtil.GetKeyValue<string>("AccessToken");
            accessTokenSecret = MainUtil.GetKeyValue<string>("AccessTokenSecret");
            userScreenName = MainUtil.GetKeyValue<string>("ScreenName");

            if (string.IsNullOrEmpty(accessToken) || string.IsNullOrEmpty(accessTokenSecret))
                return false;
            else
                return true;
        }

        private void userLoggedIn()
        {
            Dispatcher.BeginInvoke(() =>
            {
                // var SignInMenuItem = (Microsoft.Phone.Shell.ApplicationBarMenuItem)this.ApplicationBar.MenuItems[0];
                // SignInMenuItem.IsEnabled = false;

                // var SignOutMenuItem = (Microsoft.Phone.Shell.ApplicationBarMenuItem)this.ApplicationBar.MenuItems[1];
                //SignOutMenuItem.IsEnabled = true;
             // MessageBox.Show(userScreenName);

                wel.Visibility = System.Windows.Visibility.Visible;
                user.Visibility = System.Windows.Visibility.Visible;
                tagline.Visibility = System.Windows.Visibility.Visible;
                mybird.Visibility = System.Windows.Visibility.Collapsed;
                bird.Visibility = System.Windows.Visibility.Collapsed;
            
            
              user.Text = userScreenName + "," + "Tap To Explore";

            });

        }
        void requestTokenQuery_QueryResponse(object sender, WebQueryResponseEventArgs e)
        {
            try
            {
                StreamReader reader = new StreamReader(e.Response);
                string strResponse = reader.ReadToEnd();
                var parameters = MainUtil.GetQueryParameters(strResponse);
                OAuthTokenKey = parameters["oauth_token"];
                tokenSecret = parameters["oauth_token_secret"];
                var authorizeUrl = AppSettings.AuthorizeUri + "?oauth_token=" + OAuthTokenKey;

                Dispatcher.BeginInvoke(() =>
                {
                    this.loginBrowserControl.Navigate(new Uri(authorizeUrl, UriKind.RelativeOrAbsolute));
                });
            }
            catch (Exception ex)
            {
                Dispatcher.BeginInvoke(() =>
                {
                    MessageBox.Show(ex.Message);
                });
            }
        }

        private void loginBrowserControl_Navigating(object sender, NavigatingEventArgs e)
        {
            try
            {
                if (e.Uri.ToString().StartsWith(AppSettings.CallbackUri))
                {
                    var AuthorizeResult = MainUtil.GetQueryParameters(e.Uri.ToString());
                    var VerifyPin = AuthorizeResult["oauth_verifier"];
                    this.loginBrowserControl.Visibility = Visibility.Collapsed;
                    var AccessTokenQuery = OAuthUtil.GetAccessTokenQuery(OAuthTokenKey, tokenSecret, VerifyPin);

                    AccessTokenQuery.QueryResponse += new EventHandler<WebQueryResponseEventArgs>(AccessTokenQuery_QueryResponse);
                    AccessTokenQuery.RequestAsync(AppSettings.AccessTokenUri, null);
                }
            }
            catch
            {
            }
        }

        void AccessTokenQuery_QueryResponse(object sender, WebQueryResponseEventArgs e)
        {
            try
            {
                StreamReader reader = new StreamReader(e.Response);
                string strResponse = reader.ReadToEnd();
                var parameters = MainUtil.GetQueryParameters(strResponse);
                accessToken = parameters["oauth_token"];
                accessTokenSecret = parameters["oauth_token_secret"];
                userID = parameters["user_id"];
                userScreenName = parameters["screen_name"];

                MainUtil.SetKeyValue<string>("AccessToken", accessToken);
                MainUtil.SetKeyValue<string>("AccessTokenSecret", accessTokenSecret);
                MainUtil.SetKeyValue<string>("ScreenName", userScreenName);

                userLoggedIn();


            }
            catch (Exception ex)
            {
                Dispatcher.BeginInvoke(() =>
                {
                    MessageBox.Show(ex.Message);
                });
            }
        }


        private void loginBrowserControl_Navigated(object sender, System.Windows.Navigation.NavigationEventArgs e)
        {
            lasturl = e.Uri;
            this.loginBrowserControl.Visibility = Visibility.Visible;
            this.loginBrowserControl.Navigated -= loginBrowserControl_Navigated;
        }

        private void Button_Click(object sender, RoutedEventArgs e)
        {
            var requestTokenQuery = OAuthUtil.GetRequestTokenQuery();
            requestTokenQuery.RequestAsync(AppSettings.RequestTokenUri, null);
            requestTokenQuery.QueryResponse += new EventHandler<WebQueryResponseEventArgs>(requestTokenQuery_QueryResponse);
           
        }

        private void user_Tap(object sender, System.Windows.Input.GestureEventArgs e)
        {
            NavigationService.Navigate(new Uri("/News.xaml", UriKind.RelativeOrAbsolute));
        }

    }
}