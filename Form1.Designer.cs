namespace SCADS
{
    partial class Form1
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
            this.nameplateSCADS = new System.Windows.Forms.Label();
            this.SuspendLayout();
            // 
            // nameplateSCADS
            // 
            this.nameplateSCADS.Dock = System.Windows.Forms.DockStyle.Top;
            this.nameplateSCADS.Font = new System.Drawing.Font("Impact", 21F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.nameplateSCADS.ImageAlign = System.Drawing.ContentAlignment.TopCenter;
            this.nameplateSCADS.Location = new System.Drawing.Point(0, 0);
            this.nameplateSCADS.Name = "nameplateSCADS";
            this.nameplateSCADS.Padding = new System.Windows.Forms.Padding(0, 5, 0, 0);
            this.nameplateSCADS.Size = new System.Drawing.Size(1505, 45);
            this.nameplateSCADS.TabIndex = 0;
            this.nameplateSCADS.Text = "SONIC Computer-Aided Dispatching System";
            this.nameplateSCADS.TextAlign = System.Drawing.ContentAlignment.TopCenter;
            this.nameplateSCADS.Click += new System.EventHandler(this.label1_Click);
            // 
            // Form1
            // 
            this.AutoScaleDimensions = new System.Drawing.SizeF(6F, 13F);
            this.AutoScaleMode = System.Windows.Forms.AutoScaleMode.Font;
            this.ClientSize = new System.Drawing.Size(1505, 650);
            this.Controls.Add(this.nameplateSCADS);
            this.Name = "Form1";
            this.Text = "Form1";
            this.Load += new System.EventHandler(this.Form1_Load);
            this.ResumeLayout(false);

        }

        #endregion

        private System.Windows.Forms.Label nameplateSCADS;
    }
}

