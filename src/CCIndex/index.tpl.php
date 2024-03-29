<h1>Index Controller</h1>
<p>Welcome to Lydia index controller.</p>

<h2>Download</h2>
<p>You can download Steffe from github.</p>
<blockquote>
<code>git clone git://github.com/kjellmeister/PHPMVC.git</code>
</blockquote>
<p>You can review its source directly on github: <a href='https://github.com/kjellmeister/STEFFE'>https://github.com/kjellmeister/STEFFE</a></p>

<h2>Installation</h2>
<p>First you have to make the data-directory writable. This is the place where Steffe needs
to be able to write and create files.</p>
<blockquote>
<code>cd STEFFE; chmod 777 site/data</code>
<code>cd STEFFE; chmod 777 themes/grid</code>
<p>
You might also have to change the "RewriteBase" in the .htaccess - file. Instructions can be found in the file.
</p>
</blockquote>

<p>Second, Steffe has some modules that need to be initialised. You can do this through a 
controller. Point your browser to the following link.</p>
<blockquote>
<a href='<?=create_url('module/install')?>'>module/install</a>
</blockquote>
