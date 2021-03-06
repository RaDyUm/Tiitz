<?php
	require ('tplError.php');
	require ('tplLog.php');
?>
<div class="tiitz-toolbar">
	<div class="tiitz-navbar">
		<div class="tiitz-inner">
			<ul class="tiitz-nav">
				<li>
					<a href="<?php print WEB_PATH; ?>" class="tiitz-home">
						<img src="<?php print WEB_PATH; ?>/tiitz/img/home.png" alt="" width="35" height="35" />
					</a>
				</li>
				<li class="tiitz-divider"></li>
				<li>
					<a class="tiitz-brand tiitz-toolbar-nav" href="#">
						<img src="<?php print WEB_PATH; ?>/tiitz/img/toolbar-tiitz.png" id="tiitz-logo" /> <span id="tiitz-version"><?php print DebugTool::$toolbar->getFrameworkVersion(); ?></span>
					</a>
					<ul id="toolbar-tiitz-info" class="tiitz-toolbar-info">
						<li>
							<div id="toolbar-tiitz-version" class="tiitz-toolbar-info">
							   	<ul>
							   		<li>
							   			<div id="toolbar-photo">
							   				<a href="https://plus.google.com/communities/102794938632806435828">
							   					<img src="<?php print WEB_PATH; ?>/tiitz/img/toolbar-tiitz.png" alt="Tiitz Official Website" />
							   				</a>	
							   			</div>
							   			<div id="toolbar-content">
							   				<div id="toolbar-header">
							   					<h2><a href="https://plus.google.com/communities/102794938632806435828">Site Officiel</a></h2>
							   				</div>
							   				<div id="toolbar-text">
							   					<p>
							   						Documentation, Actualit&eacute;s, Get Started, Tutoriaux, Pluggins, Interviews etc.
							   					</p>
							   				</div>
							   			</div>
							   			<br class="toolbar-clear" />
							   		</li>
							   		<li>
							   			<div id="toolbar-photo">
							   				<a href="https://plus.google.com/communities/102794938632806435828">
							   					<img src="<?php print WEB_PATH; ?>/tiitz/img/toolbar-google-community.png" alt="google+" />
							   				</a>
							   			</div>
							   			<div id="toolbar-content">
							   				<div id="toolbar-header">
							   					<h2><a href="https://plus.google.com/communities/102794938632806435828">Google Communaut&eacute;</a></h2>
							   				</div>
							   				<div id="toolbar-text">
							   					<p>
							   						Toutes l'actualit&eacute;s de la communaut&eacute; de Tiitz (News, Bugs, Tutoriaux etc.)
							   					</p>
							   				</div>
							   			</div>
							   			<br class="toolbar-clear" />
							   		</li>
							   		<li>
							   			<div id="toolbar-photo">
							   				<a href="https://groups.google.com/forum/?fromgroups=#!forum/tiitz-framework">
							   					<img src="<?php print WEB_PATH; ?>/tiitz/img/toolbar-google-groups.jpeg" alt="google groups" />
							   				</a>
							   			</div>
							   			<div id="toolbar-content">
							   				<div id="toolbar-header">
							   					<h2><a href="https://groups.google.com/forum/?fromgroups=#!forum/tiitz-framework">Support Technique</a></h2>
							   				</div>
							   				<div id="toolbar-text">
							   					<p>
							   						Google Groupe. Vous avez une interrogation? un problème ? Venez nous en parler.
							   					</p>
							   				</div>
							   			</div>
							   			<br class="toolbar-clear" />
							   			
							   		</li>
							   		<li>
							   			<div id="toolbar-photo">
							   				<a href="https://github.com/epok75/tiitz">
							   					<img src="<?php print WEB_PATH; ?>/tiitz/img/toolbar-github.jpg" alt="Github" />
							   				</a>
							   			</div>
							   			<div id="toolbar-content">
							   				<div id="toolbar-header">
							   					<h2><a href="https://github.com/epok75/tiitz">Source / Report</a></h2>
							   				</div>
							   				<div id="toolbar-text">
							   					<p>
							   						Consultez, t&eacute;l&eacute;chargez les sources officielles du framework Tiitz.
							   					</p>
							   				</div>
							   			</div>
							   			<br class="toolbar-clear" />
							   		</li>
							   	</ul>
							</div>
						</li>	
					</ul>	
				</li>
				<li class="tiitz-divider"></li>
				<li><a href="#" class="tiitz-toolbar-nav"><strong>PHP : </strong><?php print DebugTool::$toolbar->getPhpVersion(); ?></a>
				   	<ul id="toolbar-php-version" class="tiitz-toolbar-info">
			   			<li>
			   				<div>
			   					<h2>Configuration php.ini</h2>
			   					<ul id="toolbar-php-version-detail">
			   						<li>
			   							<div>
			   								<h3>Sécurités</h3>
			   								<ul>
			   									<li><strong>allow_url_fopen : </strong> <?php (DebugTool::$toolbar->getPhpIni()['allow_url_fopen'] == 1) ? print '<span style="color:red;">True</span>' : print 'False'; ?></li>
			   									<li>
			   										<strong>register_globals : </strong>
			   										<?php  ini_get('register_globals') ? print ini_get('register_globals') : print 'Supprimé<sup>*</sup>'; ?>
			   									</li>
			   									<li>
			   										<strong>magic_quotes_gpc : </strong>
			   										<?php ini_get('magic_quotes_gpc') ? print ini_get('magic_quotes_gpc') : print 'Supprimé<sup>*</sup>';  ?>
			   									</li>
			   									<li>
			   										<strong>open_basedir : </strong>
			   										<?php echo ini_get('open_basedir'); ?></li>
			   									<li>
			   										<strong>safe_mode : </strong>
			   										<?php ini_get('safe_mode') ? print ini_get('safe_mode') : print 'Supprimé<sup>*</sup>'; ?>
			   									</li>
			   								</ul>
			   							</div>
			   						</li>
			   						<li>
			   							<div>
			   								<h3>Upload</h3>
			   								<ul>
			   									<li><strong>file_uploads : </strong><?php print DebugTool::$toolbar->getPhpIni()['file_uploads']; ?></li>
			   									<li><strong>max_file_uploads : </strong><?php print DebugTool::$toolbar->getPhpIni()['max_file_uploads']; ?></li>
			   									<li><strong>upload_max_filesize : </strong><?php print DebugTool::$toolbar->getPhpIni()['upload_max_filesize']; ?></li>
			   									<li><strong>upload_tmp_dir : </strong><?php print DebugTool::$toolbar->getPhpIni()['upload_tmp_dir']; ?></li>
			   									<li><strong>post_max_size : </strong><?php print DebugTool::$toolbar->getPhpIni()['post_max_size']; ?></li>
			   								</ul>
			   							</div>
			   						</li>
			   						<li>
			   							<div>
			   								<h3>Performances / Divers</h3>
			   								<ul>
			   									<li><strong>memory_limit : </strong><?php print DebugTool::$toolbar->getPhpIni()['memory_limit']; ?></li>
			   									<li><strong>max_execution_time : </strong><?php print DebugTool::$toolbar->getPhpIni()['max_execution_time']; ?></li>
			   									<li><strong>session.gc_maxlifetime : </strong>  <?php print DebugTool::$toolbar->getPhpIni()['session.gc_maxlifetime']; ?></li>
			   									<li><strong>short_open_tag : </strong><?php DebugTool::$toolbar->getPhpIni()['short_open_tag'] == 1 ? print '<span style="color:red;">True</span>' : print 'False';; ?></li>
			   								</ul>
			   							</div>
			   						</li>	
			   						<br class="clear" />		   						
			   					</ul>
			   					<i>* Supprim&eacute; depuis la version 5.4 de php</i>
			   				</div>
			   			</li>
			   		</ul>	
			   	</li>
			   	<li class="tiitz-divider"></li>
			   	<li><a href="#" class="tiitz-toolbar-nav"><strong>Configuration</strong></a>
					<ul id="toolbar-config" class="tiitz-toolbar-info">
			   			<li>
			   				<div>
			   					<ul>
			   						<li><strong>Base de donn&eacute;es </strong>: <?php isset($conf['database']['dbname']) && !empty($conf['database']['dbname']) ? print $conf['database']['dbname'] : print 'none'; ?></li>
			   						<li><strong>Moteur de template </strong>: <?php isset($conf['template']) ? print $conf['template'] : print 'php'; ?></li>
			   						<li><strong>Environnement </strong>: <?php isset($conf['environnement']) ? print $conf['environnement']: print ''; ?></li>
			   						<li><strong>Langue </strong>: <?php isset($conf['language']) ? print $conf['language'] : print ''; ?></li>
			   						<li><strong>Route </strong>: <?php isset($conf['routingType']) ? print $conf['routingType'] : print ''; ?></li>
			   					</ul>
			   				</div>
			   			</li>
			   		</ul>
			   	</li>
			   	<li class="tiitz-divider"></li>
				<li><a href="#" class="tiitz-toolbar-nav"><?php isset($route['className']) ? print $route['className']:''; ?> : <?php isset($route['action']) ? print $route['action']:''; ?></a>
					<ul id="toolbar-file-controller" class="tiitz-toolbar-info">
			   			<li>
			   				<div>
			   					<ul>
			   						<li><strong>Controller </strong>: <?php isset($route['className']) ? print $route['className']:''; ?></li>
			   						<li><strong>Method </strong>: <?php isset($route['action']) ? print $route['action']:''; ?></li>
			   						<li><strong>Path </strong>: <?php isset($route['path']) ? print $route['path']:''; ?></li>
			   					</ul>
			   				</div>
			   			</li>
			   		</ul>
			   	</li>
			   	<li class="tiitz-divider"></li>
			   	<li>
			   		<a href="#">
			   			<strong>Time Loading Page : </strong><?php print DebugTool::$toolbar->getTimeLoadingPage(); ?>
			   		</a>
			   	</li>
			   	<li class="tiitz-divider"></li>
			   	<?php if(!empty($conf['database']['dbname'])) : ?>
			   	<li>
			   		<a href="./configTiitz/entityGenerator" class="tiitz-toolbar-nav">Cr&eacute;er vos entit&eacute;es</a>
				</li>
				<li class="tiitz-divider"></li>
				<?php endif; ?>
				<li>
			   		<a href="#" id="opener-log" >Fichier de logs <?php (count(DebugTool::$errorExtend->getArrayOfError()) > 0)? print "(".count(DebugTool::$errorExtend->getArrayOfError()).")" :
			   																  print ' (0)'; ?></a>
			 	</li>
			   	<li class="tiitz-divider"></li>
			 	<li>
			   		<?php if (DebugTool::$errorExtend->getNumberOfcurrentError() == 1) : ?>
			   			<a href="#" id="opener-error" class="tiitz-danger">1 error</a>
			   			
			   		<?php elseif (DebugTool::$errorExtend->getNumberOfcurrentError() > 1) : ?>
			   			<a href="#" id="opener-error" class="tiitz-danger"><?php print DebugTool::$errorExtend->getNumberOfcurrentError(); ?> errors</a>
			   		<?php endif; ?>
			   	</li>
			</ul>
		</div>
	</div>	
</div>


<script>
	// check if jquery is load and insert bootstrap.js
	function LoadjQueryUI() {
		var link = document.createElement('link');
	  	link.type = "text/css";
	  	link.rel = "stylesheet";
	   	link.href = "<?php print WEB_PATH;?>/tiitz/css/jquery-ui-1.10.0.custom.css";
	   	document.getElementsByTagName('head')[0].appendChild(link);

		var scriptUI = document.createElement('script');
	  	scriptUI.type = "text/javascript";
	   	scriptUI.src = "<?php print WEB_PATH;?>/tiitz/js/jquery-ui-1.10.0.custom.min.js";
	   	document.getElementsByTagName('head')[0].appendChild(scriptUI);
	}

 	

	if(!window.jQuery)
	{
	   var script = document.createElement('script');
	   script.type = "text/javascript";
	   script.src = "<?php print WEB_PATH;?>/tiitz/js/jquery-1.9.0.min.js";
	   document.getElementsByTagName('head')[0].appendChild(script);
	}

	var toolbarCSS = document.createElement('link');
	toolbarCSS.type = "text/css";
	toolbarCSS.rel = "stylesheet";
	toolbarCSS.href = "<?php print WEB_PATH;?>/tiitz/css/style-toolbar.css";
	document.getElementsByTagName('head')[0].appendChild(toolbarCSS);

	LoadjQueryUI();
 		
	window.onload = function () {
		$( "#currentError" ).dialog(
			{ 
				autoOpen: false, 
			  	width : 860,
			  	height: 400, 
			  	title: "Tittz Error"		
			}
		);
		$( "#myLogError" ).dialog(
			{ 
				autoOpen: false, 
			  	width : 860, 
			  	height: 400,
			  	title: "Log error"		
			}
		);

		$( "#opener-error" ).click(function() {
			if ($("a.tiitz-toolbar-nav").hasClass('tiitz-active')) {
				$("a.tiitz-toolbar-nav").removeClass('tiitz-active');
				$("a.tiitz-toolbar-nav").each(function(inc) {
					$(this).next().hide();
				})
			};
			if ($("#myLogError").is(":visible")) {
				$( "#myLogError" ).dialog( "close" );
				$( "#opener-log" ).removeClass('tiitz-active');
			}
			if ($("#currentError").is(":visible")) {
				$( "#currentError" ).dialog( "close" );
			} else {
				$( "#currentError" ).dialog( "open" );
			}
		});
		$( "#opener-log" ).click(function() {
			if ($("a.tiitz-toolbar-nav").hasClass('tiitz-active')) {
				$("a.tiitz-toolbar-nav").removeClass('tiitz-active');
				$("a.tiitz-toolbar-nav").each(function(inc) {
					$(this).next().hide();
				})
			};
			if ($("#currentError").is(":visible")) {
				$( "#currentError" ).dialog( "close" );
			}
			if ($("#myLogError").is(":visible")) {
				$( "#myLogError" ).dialog( "close" );
				$( "#opener-log" ).removeClass('tiitz-active');
			} else {
				$( "#myLogError" ).dialog( "open" );
				$( "#opener-log" ).addClass('tiitz-active');
			}
		});
		// menu link
		$( ".tiitz-nav > li > a.tiitz-toolbar-nav" ).click(function() {
			if ($("#myLogError").is(":visible")) {
				$("#myLogError").dialog( "close" );
				$("#opener-log").removeClass('tiitz-active');
			}
			if ($("#currentError").is(":visible")) {
				$("#currentError").dialog( "close" );
			}
			if ($(this).hasClass('tiitz-active')) {
				$(this).removeClass('tiitz-active');
				$(this).next().hide();
			} else {
				$(".tiitz-nav > li > a").removeClass('tiitz-active');
				$(".tiitz-nav > li > a").next().hide();
				$( this ).addClass('tiitz-active');
				$(this).next().show();
			}
		});
		
	}
</script>
</body>
</html>

