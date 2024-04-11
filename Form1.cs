using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;

namespace SONIC_Computer_Aided_Dispatching_System
{
    public partial class Application : Form
    {
        public Application()
        {
            InitializeComponent();
        }

        public void Form1_Load(object sender, EventArgs e)
        {

        }


        public void label1_Click(object sender, EventArgs e)
        {
            var ToolTip = new ToolTip
            {
                Text = "This is a test for how this changes"
            }
            
        }

        public void progressBar1_Click(object sender, EventArgs e)
        {
 
        }
    }
}
