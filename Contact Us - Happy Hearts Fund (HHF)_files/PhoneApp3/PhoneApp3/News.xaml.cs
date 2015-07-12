using System;
using System.Collections.Generic;
using System.Linq;
using System.Net;
using System.Windows;
using System.Windows.Controls;
using System.Windows.Navigation;
using Microsoft.Phone.Controls;
using Microsoft.Phone.Shell;
using System.Collections.ObjectModel;
using System.Windows.Media.Imaging;
using System.IO;
using System.IO.IsolatedStorage;
using Microsoft.Xna.Framework.Media;

namespace PhoneApp3
{
    public partial class News : PhoneApplicationPage
    {
          //  HtmlWeb.LoadAsync("http://wallpaper.mob.org/", DownLoadCompleted);

        public News()
        {
            InitializeComponent();
        }

        private void saveimage()
        {
            WriteableBitmap wBitmap = new WriteableBitmap(statistics, null);
            using (MemoryStream stream = new MemoryStream())
            {
                wBitmap.SaveJpeg(stream, (int)statistics.ActualWidth, (int)statistics.ActualHeight, 0, 100);
                wBitmap = null;
                //Use can either save the file to isolated storage or media library.
                //Creates file in Isolated Storage.
                using (var local = new IsolatedStorageFileStream("/Statistics", FileMode.Create, IsolatedStorageFile.GetUserStoreForApplication()))
                {
                    local.Write(stream.GetBuffer(), 0, stream.GetBuffer().Length);
                }
                //Creates file in Media Library.
                var lib = new MediaLibrary();
                var picture = lib.SavePicture("Statistics", stream.GetBuffer());
            }
        }

        private void tags_Click(object sender, EventArgs e)
        {
            saveimage(); //usually called after download
       
            NavigationService.Navigate(new Uri("/Post.xaml", UriKind.RelativeOrAbsolute));
        }

        
        

    }
}