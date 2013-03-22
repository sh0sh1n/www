<?php
/*
* File: features/index.php
* Author: Gladys Chan
* Description: main content of download page
*/

$title = "FAQ";
?>
	<?php require "../includes/header.php"; ?>
	<h1 id="faq">Frequently Asked Questions</h1>
	<article id="listquestions">
	<ul>
		<li><a href="#whatis">What is Databrary?</a></li>
		<li><a href="#whyshare">Why should I contribute my data or tools to an open data sharing facility?</a></li>
		<li><a href="#credit">Will I receive credit for my contributions if other researchers use my data?</a></li>
		<li><a href="#whatcon">What can I contribute?</a></li>
		<li><a href="#privacy">What about privacy?</a></li>
		<li><a href="#howuse">What are some ways I might use it?</a></li>
		<li><a href="#whocon">Who can contribute data or tools to the open share repository?</a></li>
		<li><a href="#howcon">How do I contribute?</a></li>
		<li><a href="#whencon">When do I contribute?</a></li>
		<li><a href="#howsearch">How can I search the database?</a></li>
		<li><a href="#requirements">Do I have to use OpenSHAPA or Datavyu to contribute?</a></li>
		<li><a href="#improve">How will using Datavyu and joining the Databrary improve my science?</a></li>
		<li><a href="#sustain">How do we build a sustainable user community?</a></li>		
	</ul>
	</article>
	
	<hr>
	
	<article id="whatis">
		<h2>What is Databrary?</h2>

		<p>Databrary is a data library for scientists to share video and audio recordings, research data and analytical tools, and metadata with other investigators.</p>
	</article>

	<article id="whyshare">
		<h2>Why should I contribute my data or tools to an open data sharing facility?</h2>

		<p>A history of data sharing and a plan to commit data to an open share will enhance the likelihood of funding. Federal funding agencies and private foundations are now requesting data management and data sharing plans. Your work will receive more citations. Users will cite your data set or tools and the papers associated with them.</p> 
	</article>

	<article id="credit">
		<h2>Will I receive credit for my contributions if other researchers use my data?</h2>

		<p>Yes. Users will sign an agreement stating that they will acknowledge contributors by citing any data or tool they use from Databrary. Databrary will provide permanent links and a citation format.</p>
	</article>

	<article id="whatcon">
		<h2>What can I contribute?</h2>

		<p>Data contributors can share raw digital video files, other data streams (e.g., audio, motion tracking, eye tracking coordinates, physiological data, transcripts), papers based on the data, associated metadata (e.g., coded spreadsheets, codebook, questionnaires, instruments, analysis spreadsheets), and a handful of tags describing the overall dataset that reflect standard federal guidelines (number of participants at various ages and their sex, race, ethnicity, and geographical region, typically/atypically developing) and study design (human/animal, naturalistic/experimental, cross-sectional/longitudinal). These rich forms of metadata will help users to search for appropriate datasets within Databrary, browse the videos within datasets for particulars, and make greater use of datasets for research and teaching.</p>
		<p>Because video and audio recordings and photographs may depict faces, voices, names, or other personally identifying information (see <a href='https://github.com/databrary/policies/definitions.md' target='_blank'>Databrary definitions</a>), special care must be taken. The people depicted must give explicit permission for the recordings or photographs to be shared with Databrary. Databrary has created template documents for this purpose (see <a href='https://github.com/databrary/policies/' target='_blank'>examples</a>).</p>
		<p>In other data formats such as text files and spreadsheets, participants must be denoted by code number not names. Personally identifying information must be removed before data are deposited. Databrary recommends investigators adopt <a href='https://github.com/databrary/policies/blob/master/best-practices.md' target='_blank'>best practices for data security</a> and uphold the <a href='https://github.com/databrary/policies/blob/master/bill-of-rights.md' target='_blank'>Databrary Bill of Rights</a>.</p>
		<p>Tool contributors can share tools and algorithms for visualizing, exploring, and analyzing data, and other uses. Links and scripts will enable interoperability between coded data and tools. Open source tools can share the source code.</p>

	</article>   

	<article id="privacy">
		<h2>What about privacy?</h2>

		<p>Databrary takes privacy very seriously, but we also believe in the principle of informed consent. We believe that many people who participate in scientific research will give permission for their data to be shared if they can be confident that their privacy and dignity will be respected. Databrary has designed policies and systems to ensure this happens.  At the end of a research study, people depicted in video and audio recordings and photographs will be asked for their permission to share with other investigators. Those investigators must authorized by Databrary to have access. Databrary only grants authorized access to individuals who meet certain criteria, and who agree to follow Databrary's policies. The investigators must show that they are knowledgeable about ethical research principles with human participants, and the investigators must show that their scientific activity is supervised by an Institutional Review Board (IRB) or its equivalent. Investigators must promise to care for information they view in Databrary with the same care they would treat information they collect. Investigators must get official approval from their university or institute before sharing data with Databrary or before conducting research on information within Databrary.</p>
	</article>

	<article id="howuse">
		<h2>What are some ways I might use it?</h2>

		<p>Consistent with NIH guidelines on data sharing, researchers can:</p>
	        	<ul>
				<li> Upload their own video data and metadata for sharing and archival storage so that their data will survive in usable form beyond their lifetimes</li>

				<li> Enhance teaching by extracting video clips that illustrate an empirical or theoretical point and showing it to their students</li>
		
				<li> Enhance classroom lessons by allowing students to observe and score participants' behaviors or to run "mini-studies" across the data store</li>
		
				<li> Point readers and reviewers to raw video data that illustrate procedures and findings</li>
		
				<li> View archived data for exemplars to make comparisons with their own work and reinforce open scientific inquiry by checking how coding was done, seeing what displays or apparatuses were used, and gathering detailed information to understand better how conclusions were drawn</li>
		
				<li> Browse the database to stimulate ideas that lead to further research</li>
		
				<li> Expand their own sample sizes, run replication studies, examine cohort effects, and assess possible differences due to geographical location or population by using suitable data in the archive</li>
		
				<li> Integrate data across archived studies to create new datasets or to conduct meta-analyses on raw data or metadata</li>
		
				<li> Build on other researchers' codes and prior coding efforts to extend or transform prior analyses and promote further discovery and return the results to the archive</li>
		
				<li> Score archived data for behaviors that were outside the scope of the original study and then return the results to the archive</li>
		
				<li> Use the video data themselves as stimuli in new studies</li>
		
				<li> Use archived data for new purposes in fields outside developmental psychology</li>
		
				<li> Use archived data to test the performance of visualization, exploration, and analysis tools</li>
		
				<li> Use various tools contributed to the archive to enhance understanding of their own data</li>
		
				<li> Collaborate with like-minded researchers in a sub-area of development to create corpora of data with shared coding schemes and other metadata, as exemplified by TalkBank</li>
			</ul>
	</article>

	<article id="whocon">
		<h2>Who can contribute data or tools to the open share repository?</h2>

		<p>Any researcher who has:</p>
			<ol>
				<li>Been named an authorized Databrary investigator;</li>
				<li>Has appropriate IRB clearance to collect and share data with Databrary; and</li>
				<li>Who has sought and secured permission to share from the people depicted in video or audio recordings or photographs or from research participants who provide self-reported health-related information</li>
			</ol>
		<p>may contribute data.</p>

		<p>Any researcher can contribute tools to the repository.</p>

		<p><a href='http://databrary.org/contact/'>Contact Databrary</a> if you want to contribute data or tools.</p>

	</article>

	<article id="howcon">
		<h2>How do I contribute?</h2>

		<p>Uploading files will be easy, quick, and painless with the Databrary data management tools.</p>
	</article>

	<article id="whencon">
		<h2>When do I contribute?</h2>

		<p>Data contributors can upload data at any point and release it openly at any point - as data are collected, after scoring the data, after manuscript submission, when a manuscript goes to press, or later.</p> 

		<p>Tool contributors can share their stuff and release it at any point - as the tools are being developed, after testing, after a manuscript goes to press, or later.</p> 
	</article>

	<article id="howsearch">
		<h2>How can I search the database?</h2>

		<p>To search for appropriate datasets, users type in relevant words or phrases (e.g., infant, Smith, language, 12-month-old, 2011). If these words are present in the abstract, manuscript, coding manual, spreadsheets, or other metadata associated with the study, studies, video clips or portions of video clips might be returned.</p> 

		<p>To navigate within datasets and search results, users could browse by relevance, time sample, or event sample.</p> 
	</article>

	<article id="requirements">
		<h2>Do I have to use <a href="http://datavyu.org">Datavyu</a> to contribute?</h2>

		<p>No. Contributors are not required to score their data with the Datavyu coding tool. However, we encourage them to use Datavyu because it is free and open source and every user strengthens and grows the community.</p> 

		<p>We will work towards round trip interoperability between Datavyu and other free or low-cost academic tools (OpenSHAPA, TalkBank, Elan, Transana). We are also aiming to build one-way translation between commercial tools (e.g., Noldus, Mangold) and Datavyu.</p> 
	</article>

	<article id="improve">
		<h2>How will using Datavyu and joining the Databrary improve my science?</h2>

		<p>The Datavyu coding tool, Labnanny management tools, and data and tools in Databrary will help researchers to discover more, faster.</p> 
	</article>

	<article id="sustain">
		<h2>How do we build a sustainable user community?</h2>

		<p>Become a user and/or a contributor of data, tools, and open source code. Share your suggestions and needs with the community by adding comments to the wikis or helping others on the Datavyu support forum.</p> 
	</article>
</section>
<?php require "../includes/footer.php"; ?>
