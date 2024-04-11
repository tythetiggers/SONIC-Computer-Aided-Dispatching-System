namespace SONIC_Computer_Aided_Dispatching_System
{
    partial class Application
    {
        /// <summary>
        /// Required designer variable.
        /// </summary>
        private System.ComponentModel.IContainer components = null;

        /// <summary>
        /// Clean up any resources being used.
        /// </summary>
        /// <param name="disposing">true if managed resources should be disposed; otherwise, false.</param>
        protected override void Dispose(bool disposing)
        {
            if (disposing && (components != null))
            {
                components.Dispose();
            }
            base.Dispose(disposing);
        }

        #region Windows Form Designer generated code

        /// <summary>
        /// Required method for Designer support - do not modify
        /// the contents of this method with the code editor.
        /// </summary>
        private void InitializeComponent()
        {
            System.ComponentModel.ComponentResourceManager resources = new System.ComponentModel.ComponentResourceManager(typeof(Application));
            this.loadingBar1 = new System.Windows.Forms.ProgressBar();
            this.pictureBox1 = new System.Windows.Forms.PictureBox();
            this.ToolTip = new System.Windows.Forms.Label();
            ((System.ComponentModel.ISupportInitialize)(this.pictureBox1)).BeginInit();
            this.SuspendLayout();
            // 
            // loadingBar1
            // 
            this.loadingBar1.AccessibleDescription = "We are currently loading the application! Please be patient...";
            this.loadingBar1.AccessibleName = "Currently loading...";
            this.loadingBar1.BackColor = System.Drawing.Color.Chartreuse;
            this.loadingBar1.Cursor = System.Windows.Forms.Cursors.WaitCursor;
            this.loadingBar1.Dock = System.Windows.Forms.DockStyle.Bottom;
            this.loadingBar1.ForeColor = System.Drawing.SystemColors.ControlDarkDark;
            this.loadingBar1.Location = new System.Drawing.Point(0, 598);
            this.loadingBar1.Margin = new System.Windows.Forms.Padding(3, 3, 3, 50);
            this.loadingBar1.Name = "loadingBar1";
            this.loadingBar1.Size = new System.Drawing.Size(1489, 50);
            this.loadingBar1.TabIndex = 0;
            this.loadingBar1.UseWaitCursor = true;
            this.loadingBar1.Value = 100;
            this.loadingBar1.Click += new System.EventHandler(this.progressBar1_Click);
            // 
            // pictureBox1
            // 
            this.pictureBox1.AccessibleDescription = "Logo of Sonic CAD";
            this.pictureBox1.AccessibleName = "Sonic Computer-Aided Dispatching System";
            this.pictureBox1.AccessibleRole = System.Windows.Forms.AccessibleRole.Graphic;
            this.pictureBox1.BackColor = System.Drawing.Color.Transparent;
            this.pictureBox1.BackgroundImage = ((System.Drawing.Image)(resources.GetObject("pictureBox1.BackgroundImage")));
            this.pictureBox1.BackgroundImageLayout = System.Windows.Forms.ImageLayout.Center;
            this.pictureBox1.Dock = System.Windows.Forms.DockStyle.Fill;
            this.pictureBox1.Enabled = false;
            this.pictureBox1.ErrorImage = null;
            this.pictureBox1.InitialImage = null;
            this.pictureBox1.Location = new System.Drawing.Point(0, 0);
            this.pictureBox1.Name = "pictureBox1";
            this.pictureBox1.Padding = new System.Windows.Forms.Padding(150);
            this.pictureBox1.Size = new System.Drawing.Size(1489, 598);
            this.pictureBox1.SizeMode = System.Windows.Forms.PictureBoxSizeMode.AutoSize;
            this.pictureBox1.TabIndex = 1;
            this.pictureBox1.TabStop = false;
            // 
            // ToolTip
            // 
            this.ToolTip.AutoSize = true;
            this.ToolTip.BackColor = System.Drawing.Color.Transparent;
            this.ToolTip.Font = new System.Drawing.Font("Ink Free", 36F, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.ToolTip.Location = new System.Drawing.Point(411, 535);
            this.ToolTip.Name = "ToolTip";
            this.ToolTip.Size = new System.Drawing.Size(514, 60);
            this.ToolTip.TabIndex = 2;
            this.ToolTip.Text = "This is a test tooltip 1";
            this.ToolTip.TextChanged += new System.EventHandler(this.progressBar1_Click);
            this.ToolTip.Click += new System.EventHandler(this.label1_Click);
            // 
            // Application
            // 
            this.AutoScaleDimensions = new System.Drawing.SizeF(6F, 13F);
            this.AutoScaleMode = System.Windows.Forms.AutoScaleMode.Font;
            this.BackColor = System.Drawing.Color.SkyBlue;
            this.ClientSize = new System.Drawing.Size(1489, 648);
            this.Controls.Add(this.ToolTip);
            this.Controls.Add(this.pictureBox1);
            this.Controls.Add(this.loadingBar1);
            this.Icon = ((System.Drawing.Icon)(resources.GetObject("$this.Icon")));
            this.Name = "Application";
            this.Text = "SONIC Computer-Aided Dispatching Sytem";
            this.Load += new System.EventHandler(this.Form1_Load);
            ((System.ComponentModel.ISupportInitialize)(this.pictureBox1)).EndInit();
            this.ResumeLayout(false);
            this.PerformLayout();

        }

        #endregion

        public System.Windows.Forms.ProgressBar loadingBar1;
        public System.Windows.Forms.PictureBox pictureBox1;
        private System.Windows.Forms.Label ToolTip;
    }
}

