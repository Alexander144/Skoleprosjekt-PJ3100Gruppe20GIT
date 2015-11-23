using System;
using System.Collections.Generic;
using System.IO;
using System.Security.Cryptography;
using System.Text;

namespace SharedProject1
{
	public class sha512
	{
		public string hashData { get; set; }

		public sha512(string password, byte[] SaltBytes)
		{
			//hashData = (SHA512)CryptoConfig.CreateFromName(password);
		}
	}
}
