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
		public Button btn2;
		public ListView list;
		private int click = 0;
		
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

			list = new ListView
			{
				RowHeight = 20
		};

			btn2 = new Button
			{
				Text = "Kill Alex",
                BackgroundColor = Color.Red,
				FontSize = 30,
				WidthRequest = 150
			};

			btn2.Clicked += OnButtonClicked;

			

			var layout = new StackLayout
			{
				Spacing = 10,
				Children = {btn, lbl, btn2, list},
		};
			this.Content = layout;
			this.Padding = 15;
		}

		void OnButtonClicked(object sender, EventArgs e)
		{
			

				list.ItemsSource = new string[]
				{
					"With a chair",
				};
		}

	}
}
