
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

namespace PhoneApp3
{
    public partial class AreaChartDemo : UserControl
    {

        public AreaChartDemo()
        {
            InitializeComponent();
        }

    }
    public class model
    {
        public double ProdId { get; set; }

        public string Prodname { get; set; }

        public double Price { get; set; }

        public double Stock { get; set; }
    }
    public class viewmodel
    {
        public viewmodel()
        {
            this.Products = new ObservableCollection<model>();

            Products.Add(new model() { ProdId = 1, Prodname = "Lang", Price = 20, Stock = 53 });
            Products.Add(new model() { ProdId = 2, Prodname = "Attend", Price = 22, Stock = 76 });
            Products.Add(new model() { ProdId = 3, Prodname = "Retention", Price = 30, Stock = 80 });
            Products.Add(new model() { ProdId = 4, Prodname = "Cost", Price = 26, Stock = 50 });
            Products.Add(new model() { ProdId = 5, Prodname = "Child Op", Price = 36, Stock = 68 });
            Products.Add(new model() { ProdId = 6, Prodname = "Teacher Op", Price = 20, Stock = 90 });
            Products.Add(new model() { ProdId = 7, Prodname = "Commune", Price = 40, Stock = 73 });
        }

        public ObservableCollection<model> Products { get; set; }
    }
}
