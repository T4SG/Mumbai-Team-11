using System;
using System.Collections.Generic;
using System.Linq;
using System.Net;
using System.Windows;
using System.Windows.Controls;
using System.Windows.Navigation;
using Microsoft.Phone.Controls;
using Microsoft.Phone.Shell;
using Microsoft.Phone.Tasks;
using Hammock;
using Hammock.Web;
using Hammock.Authentication.OAuth;
using System.IO;

namespace PhoneApp3
{
    public partial class Post : PhoneApplicationPage
    {
        string accessToken = string.Empty;
        string accessTokenSecret = string.Empty;
       
        public Post()
        {
            InitializeComponent();
            accessToken = MainUtil.GetKeyValue<string>("AccessToken");
            accessTokenSecret = MainUtil.GetKeyValue<string>("AccessTokenSecret");
          
        }

        private void btnPostTweet_Click(object sender, RoutedEventArgs e)
        {
            PhotoChooserTask photoChooserTask = new PhotoChooserTask();
            photoChooserTask.Completed += new EventHandler<PhotoResult>(photoChooserTask_Completed);
            photoChooserTask.Show();
       
        }


         void photoChooserTask_Completed(object sender, PhotoResult e)
        {
            if (e.TaskResult == TaskResult.OK)
            {
                uploadPhoto(e.ChosenPhoto, e.OriginalFileName);
            }
        }
        public void uploadPhoto(Stream photoStream, string photoName)
        {
            try
            {

                var credentials = new OAuthCredentials
                {
                    Type = OAuthType.ProtectedResource,
                    SignatureMethod = OAuthSignatureMethod.HmacSha1,
                    ParameterHandling = OAuthParameterHandling.HttpAuthorizationHeader,
                    ConsumerKey = AppSettings.consumerKey,
                    ConsumerSecret = AppSettings.consumerKeySecret,
                    Token = this.accessToken,
                    TokenSecret = this.accessTokenSecret,
                    Version = "1.0"
                };

                var restClient = new RestClient
                {
                    Authority = "https://api.twitter.com",
                    HasElevatedPermissions = true
                };

                var restRequest = new RestRequest
                {
                    Credentials = credentials,
                    Path = "1.1/statuses/update_with_media.json",
                    Method = WebMethod.Post
                };

                //  restRequest.AddParameter("status", "Some Message to be shared Some Message to be sharedvSe sharedtxtTweetContent.Text"); 
                // restRequest.AddParameter("status", textBoxNewTweet.Text); 

                restRequest.AddField("status", "www.google.com");
                restRequest.AddFile("media[]", photoName, photoStream, "image/jpg");
                
                //restRequest.AddFile("media[]", "ScreenShot.png", ms, "image/jpeg"); 
                restClient.BeginRequest(restRequest, new RestCallback(PostTweetRequestCallback));
            }
            catch
            {
            }
        }

        private void PostTweetRequestCallback(RestRequest request, RestResponse response, object obj)
        {
            Deployment.Current.Dispatcher.BeginInvoke(() =>
            {
                if (response.StatusCode == HttpStatusCode.OK)
                {
                    MessageBox.Show("TWEET POSTED SUCCESSFULLY");
                }
                else if (response.StatusCode == HttpStatusCode.Forbidden)
                {
                    MessageBox.Show("TWEET POST ERR UPDATE LIMIT");
                }
                else
                {
                    MessageBox.Show("WEET POST ERR FAILED");
                }
                txtTweetContent.Text = "";
            });
            //var requestTokenQuery = OAuthUtil.GetRequestTokenQuery();
            //requestTokenQuery.RequestAsync(AppSettings.RequestTokenUri, null);
            //requestTokenQuery.QueryResponse += new EventHandler<WebQueryResponseEventArgs>(requestTokenQuery_QueryResponse);
        }


    }
}