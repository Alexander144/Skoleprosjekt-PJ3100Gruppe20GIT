using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using Xamarin.Forms;

namespace Westerdals.Pages
{
	public class MainPage : ContentPage
	{
		public MainPage()
		{
			int a = 0;
			var lbl = new Label
			{
				Text = DateTime.Now.ToString("yyyy-MM hh:mm:ss.fff")
			};
			var btn = new Button
			{
				Text = "Click here!"
			};
			btn.Clicked += (s, e) => lbl.Text = DateTime.Now.ToString("yyyy-MM hh:mm:ss.fff");
			var layout = new StackLayout
			{
				Spacing = 10,
				Children = {btn, lbl }
			};
			this.Content = layout;
			this.Padding = 15;
		}
	}
}
