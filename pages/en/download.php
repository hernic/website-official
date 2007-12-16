<h2>Download Freenet 0.7</h2>
<h3>Important note for first time users</h3>

<p>In an ideal world, all Freenet users would only connect to people they
trust (see your Friends page once your node is installed). In practice, if 
you don't know anyone already on Freenet you will have to enable promiscuous 
mode so your node automatically connects to other nodes (this is less 
secure). It may take several minutes for your node to connect to enough 
nodes for Freenet to be usable, and performance will likely improve over 
time after that. You will get best performance if you can leave your node
running 24x7.</p>

<p> <i>If you have a firewall or a NAT box click <a
href="/faq.html#firewall"><b>here</b></a>
for some info.</i> <BR> &nbsp;<BR>

<a href="javascript:toggleLayer('windows');">Show windows instructions</a>
<div class="hideit" id="windows">
<h3>Windows</h3>
- Download and run <big><a href="http://downloads.freenetproject.org/alpha/installer/freenet-win32-with_jre.exe">freenet webinstall</a> (13MB)</big><br>
- or <a href="http://downloads.freenetproject.org/alpha/installer/freenet-win32.exe">click here</a> if you already have java installed (3MB).<br>
<br>
It will automatically install Freenet and other required components for you. When done, your default browser will automatically open up to Freenet's web-based user interface. <br>
(Freenet contains <u><b>NO spyware or adware</b></u> , it's Free Software! The source code is publicly available for review) <BR>
<BR>
Freenet works best with 
<ul>
<li><b>Windows XP Professional</b> or</li>
<li><b>Windows 2000 Professional</b></li> 
</ul>
Windows 95, 98 and ME (Millennium Edition) don't work as well; in particular, the installer won't run on those operating systems.
Also we strongly recommend you not run an OS for which security support has been discontinued.<br>
If the installer doesn't work (something seriously wrong) then please let us know, install Java, and try the Linux instructions below.
</div>

<a href="javascript:toggleLayer('macos');">Show Mac OSX instructions</a>
<div class="hideit" id="macos">
<h3>Mac OSX</h3>
<a href="http://downloads.freenetproject.org/alpha/installer/mac/freenet.jnlp">Install Freenet 0.7</a> using JavaWebStart.<br>
If this doesn't work, try the linux instructions below.
</div>

<a href="javascript:toggleLayer('unix');">Show Unix/Linux instructions</a>
<div class="hideit" id="unix">
<h3>Unix, and Linux</h3>
You need to have a recent <b>Java Runtime Environment</b> (JRE). We have experienced best results with Sun's Java Runtime Environment which can be obtained from <a href="http://www.java.com/">http://www.java.com/</a>. <BR>
Java version 1.4.2 and later will work. However, be aware that there are applet security vulnerabilities in all versions prior to Java 1.5 update 4. Generally, we recommend using latest.

<p>Type on a command line : 
<pre>
wget <a href="http://downloads.freenetproject.org/alpha/installer/new_installer.jar" alt="new_installer.jar">http://downloads.freenetproject.org/alpha/installer/new_installer.jar</a>
java -jar new_installer.jar
</pre>
</p>

<p> Or do the following on a headless system:
<pre>
wget <a href="http://downloads.freenetproject.org/alpha/installer/freenet07.tar.gz" alt="freenet07.tar.gz">http://downloads.freenetproject.org/alpha/installer/freenet07.tar.gz</a>
cat freenet07.tar.gz | gzip -d | tar xv
cd freenet
./bin/1run.sh
./run.sh start
</pre>
</p>
<p>You might find the <a href="http://www.minihowto.org/freenet_howto/Freenet%2520-%2520a%2520very%2520short%2520howto_3077.html">mini-howto</a> useful (it might be of interest to Windows users too).</p>
</div>

<h3>After installing</h3>

<P>Afer you start Freenet, wait a few seconds for it to start up (on a
slow computer, you may need to wait about 30 seconds), and visit
<pre>http://127.0.0.1:8888/</pre> in your web browser to access Freenet's user
interface. <BR> &nbsp;<BR> </P>

<h3>Offline installation</h3>
Some people might encounter difficulties connecting to our server because of censorship. We do have an offline version of the installer available : <a href="http://downloads.freenetproject.org/alpha/installer/">Freenet 0.7 offline installer</a>. You shouldn't use it unless you have to (it's bigger to download and might not be as up to date as the online one).

<h3>So it's running, what do I do?</h3>

<p>You need to get connected.  If you know anyone running Freenet, ask them 
for their reference, and give them yours.  If you visit <pre>http://127.0.0.1:8888/friends/</pre> 
in your browser, you can see your reference at the bottom and you can add
other people's references, either by cutting and pasting the reference
itself, or by pointing Freenet to a URL or a file containing their
reference.</p>
<p><b>Note: You need to add their reference and they need to add 
yours before your nodes can communicate.</b></p>
<p>If you don't know anyone running Freenet, enable promiscuous mode
(also known as opennet; the first time wizard will ask you), and wait 
a few minutes for the node to announce itself, and Freenet will 
start working by itself.</p>

<h3>So I'm connected, what do I do?</h3>

You can find links to some pages in the index on the FProxy homepage at:
<pre>http://127.0.0.1:8888/</pre>
You can find links to some <a href="http://wiki.freenetproject.org/FreenetZeroPointSevenApps">third party 
applications for freenet</a>.

<h3>It doesn't work, now what?</h3>
<p>If you have problems installing or running Freenet, please contact us on
<a href="mailto:support@freenetproject.org">the support list</a> 
(<a href="/lists.html">subscribe here</a>), or join us on 
<a href="http://en.wikipedia.org/wiki/IRC" title="Internet Relay Chat is a non-anonymous chat system used by many developers and users of Freenet">IRC</a>
on <a href="irc://irc.freenode.net/freenet">#freenet</a> on irc.freenode.net.</p>
	
<h3>Hardware requirements</h3>
<b>Minimum:</b> 400MHz Pentium 2, with at least 192MB of RAM.<br>
<b>Recommended:</b> 1GHz or more processor with 256MB
<!-- decreasing agaisnt my will :(-->
RAM or more (especially if using Windows XP). <BR>
&nbsp;<BR>
<h3>Upgrading</h3>
<p>Freenet provides now an update-over-freenet mechanism ; We recommend people to use it in favour of the updating scripts. However, you may also update your node manually:</p>
<ul><li>Windows users can upgrade to the latest-stable Freenet release by clicking on "update.cmd" in the Freenet directory.</li>
<li>Linux users may similarly upgrade by running the update.sh shell script in the freenet/bin/ directory.</li></ul>
<p>
<h3>Source Code</h3>
You can obtain the latest source code from SVN from <a href="http://freenet.googlecode.com/svn/trunk/freenet/">http://freenet.googlecode.com/svn/trunk/freenet/</a>.
<BR>
<p>
<small><b>Note: </b> You can still find the download page for Freenet 0.5 <a href="/download-old.html">here</a>, however 0.5 is no longer officially maintained or supported and 0.7 has many radical improvements not least being that it is significantly faster.</small>
</p>
