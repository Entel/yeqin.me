  


<!DOCTYPE html>
<html>
  <head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# githubog: http://ogp.me/ns/fb/githubog#">
    <meta charset='utf-8'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>PHPMailer/class.smtp.php at master · Synchro/PHPMailer</title>
    <link rel="search" type="application/opensearchdescription+xml" href="/opensearch.xml" title="GitHub" />
    <link rel="fluid-icon" href="https://github.com/fluidicon.png" title="GitHub" />
    <link rel="apple-touch-icon" sizes="57x57" href="/apple-touch-icon-114.png" />
    <link rel="apple-touch-icon" sizes="114x114" href="/apple-touch-icon-114.png" />
    <link rel="apple-touch-icon" sizes="72x72" href="/apple-touch-icon-144.png" />
    <link rel="apple-touch-icon" sizes="144x144" href="/apple-touch-icon-144.png" />
    <link rel="logo" type="image/svg" href="http://github-media-downloads.s3.amazonaws.com/github-logo.svg" />
    <link rel="xhr-socket" href="/_sockets" />


    <meta name="msapplication-TileImage" content="/windows-tile.png" />
    <meta name="msapplication-TileColor" content="#ffffff" />
    <meta name="selected-link" value="repo_source" data-pjax-transient />
    <meta content="collector.githubapp.com" name="octolytics-host" /><meta content="github" name="octolytics-app-id" /><meta content="3852414" name="octolytics-actor-id" /><meta content="20b8a820f742b8be2bcada1e089fbbc631527b4ce10029012f97c3afa4a9705f" name="octolytics-actor-hash" />

    
    
    <link rel="icon" type="image/x-icon" href="/favicon.ico" />

    <meta content="authenticity_token" name="csrf-param" />
<meta content="UIRvq0ZckTOAJxJQQWVkt2KRK/5DiflGtt/uMw7vXcg=" name="csrf-token" />

    <link href="https://a248.e.akamai.net/assets.github.com/assets/github-aacfd01406222a8e32af6bf66a2eed1a08267178.css" media="all" rel="stylesheet" type="text/css" />
    <link href="https://a248.e.akamai.net/assets.github.com/assets/github2-30896c5685c3dd8da766a4fd3065a563107c9370.css" media="all" rel="stylesheet" type="text/css" />
    


      <script src="https://a248.e.akamai.net/assets.github.com/assets/frameworks-ec9348b8374c693b0749d0b95b215fe3f5414fd0.js" type="text/javascript"></script>
      <script src="https://a248.e.akamai.net/assets.github.com/assets/github-3a11f3836624f198d32737512fe1c445445987b3.js" type="text/javascript"></script>
      
      <meta http-equiv="x-pjax-version" content="bdd56032babb410898471b4229dd697b">

        <link data-pjax-transient rel='permalink' href='/Synchro/PHPMailer/blob/7f39eff84baa35f17e271968cd3340dd3721483e/class.smtp.php'>
    <meta property="og:title" content="PHPMailer"/>
    <meta property="og:type" content="githubog:gitrepository"/>
    <meta property="og:url" content="https://github.com/Synchro/PHPMailer"/>
    <meta property="og:image" content="https://secure.gravatar.com/avatar/b4814d6790e91f01c77cac9d25db12b6?s=420&amp;d=https://a248.e.akamai.net/assets.github.com%2Fimages%2Fgravatars%2Fgravatar-user-420.png"/>
    <meta property="og:site_name" content="GitHub"/>
    <meta property="og:description" content="PHPMailer - The classic email sending library for PHP"/>
    <meta property="twitter:card" content="summary"/>
    <meta property="twitter:site" content="@GitHub">
    <meta property="twitter:title" content="Synchro/PHPMailer"/>

    <meta name="description" content="PHPMailer - The classic email sending library for PHP" />

      <meta name="robots" content="noindex, nofollow">

    <meta content="81561" name="octolytics-dimension-user_id" /><meta content="9370939" name="octolytics-dimension-repository_id" />
  <link href="https://github.com/Synchro/PHPMailer/commits/master.atom" rel="alternate" title="Recent Commits to PHPMailer:master" type="application/atom+xml" />

  </head>


  <body class="logged_in page-blob windows vis-public fork env-production  ">
    <div id="wrapper">

      
      
      

      <div class="header header-logged-in true">
  <div class="container clearfix">

    <a class="header-logo-invertocat" href="https://github.com/">
  <span class="mega-octicon octicon-mark-github"></span>
</a>

    <div class="divider-vertical"></div>

      <a href="/notifications" class="notification-indicator tooltipped downwards" title="You have no unread notifications">
    <span class="mail-status all-read"></span>
  </a>
  <div class="divider-vertical"></div>


      <div class="command-bar js-command-bar  in-repository">
          <form accept-charset="UTF-8" action="/search" class="command-bar-form" id="top_search_form" method="get">
  <a href="/search/advanced" class="advanced-search-icon tooltipped downwards command-bar-search" id="advanced_search" title="Advanced search"><span class="octicon octicon-gear "></span></a>

  <input type="text" data-hotkey="/ s" name="q" id="js-command-bar-field" placeholder="Search or type a command" tabindex="1" autocapitalize="off"
    data-username="Entel"
      data-repo="Synchro/PHPMailer"
      data-branch="master"
      data-sha="a496b77d97c8e3fe84a1de9280149c9ebc3ca433"
  >

    <input type="hidden" name="nwo" value="Synchro/PHPMailer" />

    <div class="select-menu js-menu-container js-select-menu search-context-select-menu">
      <span class="minibutton select-menu-button js-menu-target">
        <span class="js-select-button">This repository</span>
      </span>

      <div class="select-menu-modal-holder js-menu-content js-navigation-container">
        <div class="select-menu-modal">

          <div class="select-menu-item js-navigation-item selected">
            <span class="select-menu-item-icon octicon octicon-check"></span>
            <input type="radio" class="js-search-this-repository" name="search_target" value="repository" checked="checked" />
            <div class="select-menu-item-text js-select-button-text">This repository</div>
          </div> <!-- /.select-menu-item -->

          <div class="select-menu-item js-navigation-item">
            <span class="select-menu-item-icon octicon octicon-check"></span>
            <input type="radio" name="search_target" value="global" />
            <div class="select-menu-item-text js-select-button-text">All repositories</div>
          </div> <!-- /.select-menu-item -->

        </div>
      </div>
    </div>

  <span class="octicon help tooltipped downwards" title="Show command bar help">
    <span class="octicon octicon-question"></span>
  </span>


  <input type="hidden" name="ref" value="cmdform">

  <div class="divider-vertical"></div>

</form>
        <ul class="top-nav">
            <li class="explore"><a href="/explore">Explore</a></li>
            <li><a href="https://gist.github.com">Gist</a></li>
            <li><a href="/blog">Blog</a></li>
          <li><a href="http://help.github.com">Help</a></li>
        </ul>
      </div>

    

  

    <ul id="user-links">
      <li>
        <a href="/Entel" class="name">
          <img height="20" src="https://secure.gravatar.com/avatar/01b02a9a7ef832e93a00fb15765a94dd?s=140&amp;d=https://a248.e.akamai.net/assets.github.com%2Fimages%2Fgravatars%2Fgravatar-user-420.png" width="20" /> Entel
        </a>
      </li>

        <li>
          <a href="/new" id="new_repo" class="tooltipped downwards" title="Create a new repo">
            <span class="octicon octicon-repo-create"></span>
          </a>
        </li>

        <li>
          <a href="/settings/profile" id="account_settings"
            class="tooltipped downwards"
            title="Account settings ">
            <span class="octicon octicon-tools"></span>
          </a>
        </li>
        <li>
          <a class="tooltipped downwards" href="/logout" data-method="post" id="logout" title="Sign out">
            <span class="octicon octicon-log-out"></span>
          </a>
        </li>

    </ul>


<div class="js-new-dropdown-contents hidden">
  <ul class="dropdown-menu">
    <li>
      <a href="/new"><span class="octicon octicon-repo-create"></span> New repository</a>
    </li>
    <li>
        <a href="/Synchro/PHPMailer/issues/new"><span class="octicon octicon-issue-opened"></span> New issue</a>
    </li>
    <li>
    </li>
    <li>
      <a href="/organizations/new"><span class="octicon octicon-list-unordered"></span> New organization</a>
    </li>
  </ul>
</div>


    
  </div>
</div>

      

      


            <div class="site hfeed" itemscope itemtype="http://schema.org/WebPage">
      <div class="hentry">
        
        <div class="pagehead repohead instapaper_ignore readability-menu ">
          <div class="container">
            <div class="title-actions-bar">
              

<ul class="pagehead-actions">


    <li class="subscription">
      <form accept-charset="UTF-8" action="/notifications/subscribe" data-autosubmit="true" data-remote="true" method="post"><div style="margin:0;padding:0;display:inline"><input name="authenticity_token" type="hidden" value="UIRvq0ZckTOAJxJQQWVkt2KRK/5DiflGtt/uMw7vXcg=" /></div>  <input id="repository_id" name="repository_id" type="hidden" value="9370939" />

    <div class="select-menu js-menu-container js-select-menu">
      <span class="minibutton select-menu-button js-menu-target">
        <span class="js-select-button">
          <span class="octicon octicon-eye-watch"></span>
          Watch
        </span>
      </span>

      <div class="select-menu-modal-holder js-menu-content">
        <div class="select-menu-modal">
          <div class="select-menu-header">
            <span class="select-menu-title">Notification status</span>
            <span class="octicon octicon-remove-close js-menu-close"></span>
          </div> <!-- /.select-menu-header -->

          <div class="select-menu-list js-navigation-container">

            <div class="select-menu-item js-navigation-item selected">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <div class="select-menu-item-text">
                <input checked="checked" id="do_included" name="do" type="radio" value="included" />
                <h4>Not watching</h4>
                <span class="description">You only receive notifications for discussions in which you participate or are @mentioned.</span>
                <span class="js-select-button-text hidden-select-button-text">
                  <span class="octicon octicon-eye-watch"></span>
                  Watch
                </span>
              </div>
            </div> <!-- /.select-menu-item -->

            <div class="select-menu-item js-navigation-item ">
              <span class="select-menu-item-icon octicon octicon octicon-check"></span>
              <div class="select-menu-item-text">
                <input id="do_subscribed" name="do" type="radio" value="subscribed" />
                <h4>Watching</h4>
                <span class="description">You receive notifications for all discussions in this repository.</span>
                <span class="js-select-button-text hidden-select-button-text">
                  <span class="octicon octicon-eye-unwatch"></span>
                  Unwatch
                </span>
              </div>
            </div> <!-- /.select-menu-item -->

            <div class="select-menu-item js-navigation-item ">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <div class="select-menu-item-text">
                <input id="do_ignore" name="do" type="radio" value="ignore" />
                <h4>Ignoring</h4>
                <span class="description">You do not receive any notifications for discussions in this repository.</span>
                <span class="js-select-button-text hidden-select-button-text">
                  <span class="octicon octicon-mute"></span>
                  Stop ignoring
                </span>
              </div>
            </div> <!-- /.select-menu-item -->

          </div> <!-- /.select-menu-list -->

        </div> <!-- /.select-menu-modal -->
      </div> <!-- /.select-menu-modal-holder -->
    </div> <!-- /.select-menu -->

</form>
    </li>

    <li class="js-toggler-container js-social-container starring-container ">
      <a href="/Synchro/PHPMailer/unstar" class="minibutton js-toggler-target star-button starred upwards" title="Unstar this repo" data-remote="true" data-method="post" rel="nofollow">
        <span class="octicon octicon-star-delete"></span>
        <span class="text">Unstar</span>
      </a>
      <a href="/Synchro/PHPMailer/star" class="minibutton js-toggler-target star-button unstarred upwards" title="Star this repo" data-remote="true" data-method="post" rel="nofollow">
        <span class="octicon octicon-star"></span>
        <span class="text">Star</span>
      </a>
      <a class="social-count js-social-count" href="/Synchro/PHPMailer/stargazers">134</a>
    </li>

        <li>
          <a href="/Synchro/PHPMailer/fork" class="minibutton js-toggler-target fork-button lighter upwards" title="Fork this repo" rel="nofollow" data-method="post">
            <span class="octicon octicon-git-branch-create"></span>
            <span class="text">Fork</span>
          </a>
          <a href="/Synchro/PHPMailer/network" class="social-count">223</a>
        </li>


</ul>

              <h1 itemscope itemtype="http://data-vocabulary.org/Breadcrumb" class="entry-title public">
                <span class="repo-label"><span>public</span></span>
                <span class="mega-octicon octicon-repo-forked"></span>
                <span class="author vcard">
                  <a href="/Synchro" class="url fn" itemprop="url" rel="author">
                  <span itemprop="title">Synchro</span>
                  </a></span> /
                <strong><a href="/Synchro/PHPMailer" class="js-current-repository">PHPMailer</a></strong>
                  <span class="fork-flag">
                    <span class="text">forked from <a href="/PHPMailer/PHPMailer">PHPMailer/PHPMailer</a></span>
                  </span>
              </h1>
            </div>

            
  <ul class="tabs">
    <li class="pulse-nav"><a href="/Synchro/PHPMailer/pulse" class="js-selected-navigation-item " data-selected-links="pulse /Synchro/PHPMailer/pulse" rel="nofollow"><span class="octicon octicon-pulse"></span></a></li>
    <li><a href="/Synchro/PHPMailer" class="js-selected-navigation-item selected" data-selected-links="repo_source repo_downloads repo_commits repo_tags repo_branches /Synchro/PHPMailer">Code</a></li>
    <li><a href="/Synchro/PHPMailer/network" class="js-selected-navigation-item " data-selected-links="repo_network /Synchro/PHPMailer/network">Network</a></li>
    <li><a href="/Synchro/PHPMailer/pulls" class="js-selected-navigation-item " data-selected-links="repo_pulls /Synchro/PHPMailer/pulls">Pull Requests <span class='counter'>0</span></a></li>


      <li><a href="/Synchro/PHPMailer/wiki" class="js-selected-navigation-item " data-selected-links="repo_wiki /Synchro/PHPMailer/wiki">Wiki</a></li>


    <li><a href="/Synchro/PHPMailer/graphs" class="js-selected-navigation-item " data-selected-links="repo_graphs repo_contributors /Synchro/PHPMailer/graphs">Graphs</a></li>


  </ul>
  
<div class="tabnav">

  <span class="tabnav-right">
    <ul class="tabnav-tabs">
          <li><a href="/Synchro/PHPMailer/tags" class="js-selected-navigation-item tabnav-tab" data-selected-links="repo_tags /Synchro/PHPMailer/tags">Tags <span class="counter ">8</span></a></li>
    </ul>
  </span>

  <div class="tabnav-widget scope">


    <div class="select-menu js-menu-container js-select-menu js-branch-menu">
      <a class="minibutton select-menu-button js-menu-target" data-hotkey="w" data-ref="master">
        <span class="octicon octicon-branch"></span>
        <i>branch:</i>
        <span class="js-select-button">master</span>
      </a>

      <div class="select-menu-modal-holder js-menu-content js-navigation-container">

        <div class="select-menu-modal">
          <div class="select-menu-header">
            <span class="select-menu-title">Switch branches/tags</span>
            <span class="octicon octicon-remove-close js-menu-close"></span>
          </div> <!-- /.select-menu-header -->

          <div class="select-menu-filters">
            <div class="select-menu-text-filter">
              <input type="text" id="commitish-filter-field" class="js-filterable-field js-navigation-enable" placeholder="Filter branches/tags">
            </div>
            <div class="select-menu-tabs">
              <ul>
                <li class="select-menu-tab">
                  <a href="#" data-tab-filter="branches" class="js-select-menu-tab">Branches</a>
                </li>
                <li class="select-menu-tab">
                  <a href="#" data-tab-filter="tags" class="js-select-menu-tab">Tags</a>
                </li>
              </ul>
            </div><!-- /.select-menu-tabs -->
          </div><!-- /.select-menu-filters -->

          <div class="select-menu-list select-menu-tab-bucket js-select-menu-tab-bucket css-truncate" data-tab-filter="branches">

            <div data-filterable-for="commitish-filter-field" data-filterable-type="substring">

                <div class="select-menu-item js-navigation-item ">
                  <span class="select-menu-item-icon octicon octicon-check"></span>
                  <a href="/Synchro/PHPMailer/blob/5.0-dev/class.smtp.php" class="js-navigation-open select-menu-item-text js-select-button-text css-truncate-target" data-name="5.0-dev" rel="nofollow" title="5.0-dev">5.0-dev</a>
                </div> <!-- /.select-menu-item -->
                <div class="select-menu-item js-navigation-item ">
                  <span class="select-menu-item-icon octicon octicon-check"></span>
                  <a href="/Synchro/PHPMailer/blob/5.0-phpdocs/class.smtp.php" class="js-navigation-open select-menu-item-text js-select-button-text css-truncate-target" data-name="5.0-phpdocs" rel="nofollow" title="5.0-phpdocs">5.0-phpdocs</a>
                </div> <!-- /.select-menu-item -->
                <div class="select-menu-item js-navigation-item selected">
                  <span class="select-menu-item-icon octicon octicon-check"></span>
                  <a href="/Synchro/PHPMailer/blob/master/class.smtp.php" class="js-navigation-open select-menu-item-text js-select-button-text css-truncate-target" data-name="master" rel="nofollow" title="master">master</a>
                </div> <!-- /.select-menu-item -->
                <div class="select-menu-item js-navigation-item ">
                  <span class="select-menu-item-icon octicon octicon-check"></span>
                  <a href="/Synchro/PHPMailer/blob/phpmailer-2.0/class.smtp.php" class="js-navigation-open select-menu-item-text js-select-button-text css-truncate-target" data-name="phpmailer-2.0" rel="nofollow" title="phpmailer-2.0">phpmailer-2.0</a>
                </div> <!-- /.select-menu-item -->
                <div class="select-menu-item js-navigation-item ">
                  <span class="select-menu-item-icon octicon octicon-check"></span>
                  <a href="/Synchro/PHPMailer/blob/phpmailer-2.3.0-msg-limit-patch/class.smtp.php" class="js-navigation-open select-menu-item-text js-select-button-text css-truncate-target" data-name="phpmailer-2.3.0-msg-limit-patch" rel="nofollow" title="phpmailer-2.3.0-msg-limit-patch">phpmailer-2.3.0-msg-limit-patch</a>
                </div> <!-- /.select-menu-item -->
                <div class="select-menu-item js-navigation-item ">
                  <span class="select-menu-item-icon octicon octicon-check"></span>
                  <a href="/Synchro/PHPMailer/blob/phpmailer-5.2.0/class.smtp.php" class="js-navigation-open select-menu-item-text js-select-button-text css-truncate-target" data-name="phpmailer-5.2.0" rel="nofollow" title="phpmailer-5.2.0">phpmailer-5.2.0</a>
                </div> <!-- /.select-menu-item -->
                <div class="select-menu-item js-navigation-item ">
                  <span class="select-menu-item-icon octicon octicon-check"></span>
                  <a href="/Synchro/PHPMailer/blob/qmail/class.smtp.php" class="js-navigation-open select-menu-item-text js-select-button-text css-truncate-target" data-name="qmail" rel="nofollow" title="qmail">qmail</a>
                </div> <!-- /.select-menu-item -->
                <div class="select-menu-item js-navigation-item ">
                  <span class="select-menu-item-icon octicon octicon-check"></span>
                  <a href="/Synchro/PHPMailer/blob/vendor/class.smtp.php" class="js-navigation-open select-menu-item-text js-select-button-text css-truncate-target" data-name="vendor" rel="nofollow" title="vendor">vendor</a>
                </div> <!-- /.select-menu-item -->
            </div>

              <div class="select-menu-no-results">Nothing to show</div>
          </div> <!-- /.select-menu-list -->


          <div class="select-menu-list select-menu-tab-bucket js-select-menu-tab-bucket css-truncate" data-tab-filter="tags">
            <div data-filterable-for="commitish-filter-field" data-filterable-type="substring">

                <div class="select-menu-item js-navigation-item ">
                  <span class="select-menu-item-icon octicon octicon-check"></span>
                  <a href="/Synchro/PHPMailer/blob/v5.2.6/class.smtp.php" class="js-navigation-open select-menu-item-text js-select-button-text css-truncate-target" data-name="v5.2.6" rel="nofollow" title="v5.2.6">v5.2.6</a>
                </div> <!-- /.select-menu-item -->
                <div class="select-menu-item js-navigation-item ">
                  <span class="select-menu-item-icon octicon octicon-check"></span>
                  <a href="/Synchro/PHPMailer/blob/v5.2.5/class.smtp.php" class="js-navigation-open select-menu-item-text js-select-button-text css-truncate-target" data-name="v5.2.5" rel="nofollow" title="v5.2.5">v5.2.5</a>
                </div> <!-- /.select-menu-item -->
                <div class="select-menu-item js-navigation-item ">
                  <span class="select-menu-item-icon octicon octicon-check"></span>
                  <a href="/Synchro/PHPMailer/blob/phpmailer-5.1/class.smtp.php" class="js-navigation-open select-menu-item-text js-select-button-text css-truncate-target" data-name="phpmailer-5.1" rel="nofollow" title="phpmailer-5.1">phpmailer-5.1</a>
                </div> <!-- /.select-menu-item -->
                <div class="select-menu-item js-navigation-item ">
                  <span class="select-menu-item-icon octicon octicon-check"></span>
                  <a href="/Synchro/PHPMailer/blob/phpmailer-5.0.2/class.smtp.php" class="js-navigation-open select-menu-item-text js-select-button-text css-truncate-target" data-name="phpmailer-5.0.2" rel="nofollow" title="phpmailer-5.0.2">phpmailer-5.0.2</a>
                </div> <!-- /.select-menu-item -->
                <div class="select-menu-item js-navigation-item ">
                  <span class="select-menu-item-icon octicon octicon-check"></span>
                  <a href="/Synchro/PHPMailer/blob/phpmailer-5.0.0/class.smtp.php" class="js-navigation-open select-menu-item-text js-select-button-text css-truncate-target" data-name="phpmailer-5.0.0" rel="nofollow" title="phpmailer-5.0.0">phpmailer-5.0.0</a>
                </div> <!-- /.select-menu-item -->
                <div class="select-menu-item js-navigation-item ">
                  <span class="select-menu-item-icon octicon octicon-check"></span>
                  <a href="/Synchro/PHPMailer/blob/phpmailer-2.3.0%40186/class.smtp.php" class="js-navigation-open select-menu-item-text js-select-button-text css-truncate-target" data-name="phpmailer-2.3.0@186" rel="nofollow" title="phpmailer-2.3.0@186">phpmailer-2.3.0@186</a>
                </div> <!-- /.select-menu-item -->
                <div class="select-menu-item js-navigation-item ">
                  <span class="select-menu-item-icon octicon octicon-check"></span>
                  <a href="/Synchro/PHPMailer/blob/phpmailer-2.3.0/class.smtp.php" class="js-navigation-open select-menu-item-text js-select-button-text css-truncate-target" data-name="phpmailer-2.3.0" rel="nofollow" title="phpmailer-2.3.0">phpmailer-2.3.0</a>
                </div> <!-- /.select-menu-item -->
                <div class="select-menu-item js-navigation-item ">
                  <span class="select-menu-item-icon octicon octicon-check"></span>
                  <a href="/Synchro/PHPMailer/blob/phpmailer-2.0.3/class.smtp.php" class="js-navigation-open select-menu-item-text js-select-button-text css-truncate-target" data-name="phpmailer-2.0.3" rel="nofollow" title="phpmailer-2.0.3">phpmailer-2.0.3</a>
                </div> <!-- /.select-menu-item -->
            </div>

            <div class="select-menu-no-results">Nothing to show</div>

          </div> <!-- /.select-menu-list -->

        </div> <!-- /.select-menu-modal -->
      </div> <!-- /.select-menu-modal-holder -->
    </div> <!-- /.select-menu -->

  </div> <!-- /.scope -->

  <ul class="tabnav-tabs">
    <li><a href="/Synchro/PHPMailer" class="selected js-selected-navigation-item tabnav-tab" data-selected-links="repo_source /Synchro/PHPMailer">Files</a></li>
    <li><a href="/Synchro/PHPMailer/commits/master" class="js-selected-navigation-item tabnav-tab" data-selected-links="repo_commits /Synchro/PHPMailer/commits/master">Commits</a></li>
    <li><a href="/Synchro/PHPMailer/branches" class="js-selected-navigation-item tabnav-tab" data-selected-links="repo_branches /Synchro/PHPMailer/branches" rel="nofollow">Branches <span class="counter ">8</span></a></li>
  </ul>

</div>

  
  
  


            
          </div>
        </div><!-- /.repohead -->

        <div id="js-repo-pjax-container" class="container context-loader-container" data-pjax-container>
          


<!-- blob contrib key: blob_contributors:v21:3e7d5b118f99755225d966e099d3c6e3 -->
<!-- blob contrib frag key: views10/v8/blob_contributors:v21:3e7d5b118f99755225d966e099d3c6e3 -->


<div id="slider">
    <div class="frame-meta">

      <p title="This is a placeholder element" class="js-history-link-replace hidden"></p>

        <div class="breadcrumb">
          <span class='bold'><span itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb"><a href="/Synchro/PHPMailer" class="js-slide-to" data-branch="master" data-direction="back" itemscope="url"><span itemprop="title">PHPMailer</span></a></span></span><span class="separator"> / </span><strong class="final-path">class.smtp.php</strong> <span class="js-zeroclipboard zeroclipboard-button" data-clipboard-text="class.smtp.php" data-copied-hint="copied!" title="copy to clipboard"><span class="octicon octicon-clippy"></span></span>
        </div>

      <a href="/Synchro/PHPMailer/find/master" class="js-slide-to" data-hotkey="t" style="display:none">Show File Finder</a>


        
  <div class="commit file-history-tease">
    <img class="main-avatar" height="24" src="https://secure.gravatar.com/avatar/b4814d6790e91f01c77cac9d25db12b6?s=140&amp;d=https://a248.e.akamai.net/assets.github.com%2Fimages%2Fgravatars%2Fgravatar-user-420.png" width="24" />
    <span class="author"><a href="/Synchro" rel="author">Synchro</a></span>
    <time class="js-relative-date" datetime="2013-05-16T02:33:19-07:00" title="2013-05-16 02:33:19">May 16, 2013</time>
    <div class="commit-title">
        <a href="/Synchro/PHPMailer/commit/9cbce116dcce89dba2771882bdc41b17bca41520" class="message">Add support for stream options on SMTP connect, use stream_socket_cli…</a>
    </div>

    <div class="participation">
      <p class="quickstat"><a href="#blob_contributors_box" rel="facebox"><strong>3</strong> contributors</a></p>
          <a class="avatar tooltipped downwards" title="Synchro" href="/Synchro/PHPMailer/commits/master/class.smtp.php?author=Synchro"><img height="20" src="https://secure.gravatar.com/avatar/b4814d6790e91f01c77cac9d25db12b6?s=140&amp;d=https://a248.e.akamai.net/assets.github.com%2Fimages%2Fgravatars%2Fgravatar-user-420.png" width="20" /></a>
    <a class="avatar tooltipped downwards" title="okonomiyaki3000" href="/Synchro/PHPMailer/commits/master/class.smtp.php?author=okonomiyaki3000"><img height="20" src="https://secure.gravatar.com/avatar/ba0e6d739e834c89625f71055305253a?s=140&amp;d=https://a248.e.akamai.net/assets.github.com%2Fimages%2Fgravatars%2Fgravatar-user-420.png" width="20" /></a>
    <a class="avatar tooltipped downwards" title="jimjag" href="/Synchro/PHPMailer/commits/master/class.smtp.php?author=jimjag"><img height="20" src="https://secure.gravatar.com/avatar/a86203bd1e538f2a4e58eb8850fb66ef?s=140&amp;d=https://a248.e.akamai.net/assets.github.com%2Fimages%2Fgravatars%2Fgravatar-user-420.png" width="20" /></a>


    </div>
    <div id="blob_contributors_box" style="display:none">
      <h2>Users on GitHub who have contributed to this file</h2>
      <ul class="facebox-user-list">
        <li>
          <img height="24" src="https://secure.gravatar.com/avatar/b4814d6790e91f01c77cac9d25db12b6?s=140&amp;d=https://a248.e.akamai.net/assets.github.com%2Fimages%2Fgravatars%2Fgravatar-user-420.png" width="24" />
          <a href="/Synchro">Synchro</a>
        </li>
        <li>
          <img height="24" src="https://secure.gravatar.com/avatar/ba0e6d739e834c89625f71055305253a?s=140&amp;d=https://a248.e.akamai.net/assets.github.com%2Fimages%2Fgravatars%2Fgravatar-user-420.png" width="24" />
          <a href="/okonomiyaki3000">okonomiyaki3000</a>
        </li>
        <li>
          <img height="24" src="https://secure.gravatar.com/avatar/a86203bd1e538f2a4e58eb8850fb66ef?s=140&amp;d=https://a248.e.akamai.net/assets.github.com%2Fimages%2Fgravatars%2Fgravatar-user-420.png" width="24" />
          <a href="/jimjag">jimjag</a>
        </li>
      </ul>
    </div>
  </div>


    </div><!-- ./.frame-meta -->

    <div class="frames">
      <div class="frame" data-permalink-url="/Synchro/PHPMailer/blob/7f39eff84baa35f17e271968cd3340dd3721483e/class.smtp.php" data-title="PHPMailer/class.smtp.php at master · Synchro/PHPMailer · GitHub" data-type="blob">

        <div id="files" class="bubble">
          <div class="file">
            <div class="meta">
              <div class="info">
                <span class="icon"><b class="octicon octicon-file-text"></b></span>
                <span class="mode" title="File Mode">file</span>
                  <span>1093 lines (954 sloc)</span>
                <span>33.155 kb</span>
              </div>
              <div class="actions">
                <div class="button-group">
                        <a class="minibutton tooltipped leftwards"
                           title="Clicking this button will automatically fork this project so you can edit the file"
                           href="/Synchro/PHPMailer/edit/master/class.smtp.php"
                           data-method="post" rel="nofollow">Edit</a>
                  <a href="/Synchro/PHPMailer/raw/master/class.smtp.php" class="button minibutton " id="raw-url">Raw</a>
                    <a href="/Synchro/PHPMailer/blame/master/class.smtp.php" class="button minibutton ">Blame</a>
                  <a href="/Synchro/PHPMailer/commits/master/class.smtp.php" class="button minibutton " rel="nofollow">History</a>
                </div><!-- /.button-group -->
              </div><!-- /.actions -->

            </div>
                <div class="blob-wrapper data type-php js-blob-data">
      <table class="file-code file-diff">
        <tr class="file-code-line">
          <td class="blob-line-nums">
            <span id="L1" rel="#L1">1</span>
<span id="L2" rel="#L2">2</span>
<span id="L3" rel="#L3">3</span>
<span id="L4" rel="#L4">4</span>
<span id="L5" rel="#L5">5</span>
<span id="L6" rel="#L6">6</span>
<span id="L7" rel="#L7">7</span>
<span id="L8" rel="#L8">8</span>
<span id="L9" rel="#L9">9</span>
<span id="L10" rel="#L10">10</span>
<span id="L11" rel="#L11">11</span>
<span id="L12" rel="#L12">12</span>
<span id="L13" rel="#L13">13</span>
<span id="L14" rel="#L14">14</span>
<span id="L15" rel="#L15">15</span>
<span id="L16" rel="#L16">16</span>
<span id="L17" rel="#L17">17</span>
<span id="L18" rel="#L18">18</span>
<span id="L19" rel="#L19">19</span>
<span id="L20" rel="#L20">20</span>
<span id="L21" rel="#L21">21</span>
<span id="L22" rel="#L22">22</span>
<span id="L23" rel="#L23">23</span>
<span id="L24" rel="#L24">24</span>
<span id="L25" rel="#L25">25</span>
<span id="L26" rel="#L26">26</span>
<span id="L27" rel="#L27">27</span>
<span id="L28" rel="#L28">28</span>
<span id="L29" rel="#L29">29</span>
<span id="L30" rel="#L30">30</span>
<span id="L31" rel="#L31">31</span>
<span id="L32" rel="#L32">32</span>
<span id="L33" rel="#L33">33</span>
<span id="L34" rel="#L34">34</span>
<span id="L35" rel="#L35">35</span>
<span id="L36" rel="#L36">36</span>
<span id="L37" rel="#L37">37</span>
<span id="L38" rel="#L38">38</span>
<span id="L39" rel="#L39">39</span>
<span id="L40" rel="#L40">40</span>
<span id="L41" rel="#L41">41</span>
<span id="L42" rel="#L42">42</span>
<span id="L43" rel="#L43">43</span>
<span id="L44" rel="#L44">44</span>
<span id="L45" rel="#L45">45</span>
<span id="L46" rel="#L46">46</span>
<span id="L47" rel="#L47">47</span>
<span id="L48" rel="#L48">48</span>
<span id="L49" rel="#L49">49</span>
<span id="L50" rel="#L50">50</span>
<span id="L51" rel="#L51">51</span>
<span id="L52" rel="#L52">52</span>
<span id="L53" rel="#L53">53</span>
<span id="L54" rel="#L54">54</span>
<span id="L55" rel="#L55">55</span>
<span id="L56" rel="#L56">56</span>
<span id="L57" rel="#L57">57</span>
<span id="L58" rel="#L58">58</span>
<span id="L59" rel="#L59">59</span>
<span id="L60" rel="#L60">60</span>
<span id="L61" rel="#L61">61</span>
<span id="L62" rel="#L62">62</span>
<span id="L63" rel="#L63">63</span>
<span id="L64" rel="#L64">64</span>
<span id="L65" rel="#L65">65</span>
<span id="L66" rel="#L66">66</span>
<span id="L67" rel="#L67">67</span>
<span id="L68" rel="#L68">68</span>
<span id="L69" rel="#L69">69</span>
<span id="L70" rel="#L70">70</span>
<span id="L71" rel="#L71">71</span>
<span id="L72" rel="#L72">72</span>
<span id="L73" rel="#L73">73</span>
<span id="L74" rel="#L74">74</span>
<span id="L75" rel="#L75">75</span>
<span id="L76" rel="#L76">76</span>
<span id="L77" rel="#L77">77</span>
<span id="L78" rel="#L78">78</span>
<span id="L79" rel="#L79">79</span>
<span id="L80" rel="#L80">80</span>
<span id="L81" rel="#L81">81</span>
<span id="L82" rel="#L82">82</span>
<span id="L83" rel="#L83">83</span>
<span id="L84" rel="#L84">84</span>
<span id="L85" rel="#L85">85</span>
<span id="L86" rel="#L86">86</span>
<span id="L87" rel="#L87">87</span>
<span id="L88" rel="#L88">88</span>
<span id="L89" rel="#L89">89</span>
<span id="L90" rel="#L90">90</span>
<span id="L91" rel="#L91">91</span>
<span id="L92" rel="#L92">92</span>
<span id="L93" rel="#L93">93</span>
<span id="L94" rel="#L94">94</span>
<span id="L95" rel="#L95">95</span>
<span id="L96" rel="#L96">96</span>
<span id="L97" rel="#L97">97</span>
<span id="L98" rel="#L98">98</span>
<span id="L99" rel="#L99">99</span>
<span id="L100" rel="#L100">100</span>
<span id="L101" rel="#L101">101</span>
<span id="L102" rel="#L102">102</span>
<span id="L103" rel="#L103">103</span>
<span id="L104" rel="#L104">104</span>
<span id="L105" rel="#L105">105</span>
<span id="L106" rel="#L106">106</span>
<span id="L107" rel="#L107">107</span>
<span id="L108" rel="#L108">108</span>
<span id="L109" rel="#L109">109</span>
<span id="L110" rel="#L110">110</span>
<span id="L111" rel="#L111">111</span>
<span id="L112" rel="#L112">112</span>
<span id="L113" rel="#L113">113</span>
<span id="L114" rel="#L114">114</span>
<span id="L115" rel="#L115">115</span>
<span id="L116" rel="#L116">116</span>
<span id="L117" rel="#L117">117</span>
<span id="L118" rel="#L118">118</span>
<span id="L119" rel="#L119">119</span>
<span id="L120" rel="#L120">120</span>
<span id="L121" rel="#L121">121</span>
<span id="L122" rel="#L122">122</span>
<span id="L123" rel="#L123">123</span>
<span id="L124" rel="#L124">124</span>
<span id="L125" rel="#L125">125</span>
<span id="L126" rel="#L126">126</span>
<span id="L127" rel="#L127">127</span>
<span id="L128" rel="#L128">128</span>
<span id="L129" rel="#L129">129</span>
<span id="L130" rel="#L130">130</span>
<span id="L131" rel="#L131">131</span>
<span id="L132" rel="#L132">132</span>
<span id="L133" rel="#L133">133</span>
<span id="L134" rel="#L134">134</span>
<span id="L135" rel="#L135">135</span>
<span id="L136" rel="#L136">136</span>
<span id="L137" rel="#L137">137</span>
<span id="L138" rel="#L138">138</span>
<span id="L139" rel="#L139">139</span>
<span id="L140" rel="#L140">140</span>
<span id="L141" rel="#L141">141</span>
<span id="L142" rel="#L142">142</span>
<span id="L143" rel="#L143">143</span>
<span id="L144" rel="#L144">144</span>
<span id="L145" rel="#L145">145</span>
<span id="L146" rel="#L146">146</span>
<span id="L147" rel="#L147">147</span>
<span id="L148" rel="#L148">148</span>
<span id="L149" rel="#L149">149</span>
<span id="L150" rel="#L150">150</span>
<span id="L151" rel="#L151">151</span>
<span id="L152" rel="#L152">152</span>
<span id="L153" rel="#L153">153</span>
<span id="L154" rel="#L154">154</span>
<span id="L155" rel="#L155">155</span>
<span id="L156" rel="#L156">156</span>
<span id="L157" rel="#L157">157</span>
<span id="L158" rel="#L158">158</span>
<span id="L159" rel="#L159">159</span>
<span id="L160" rel="#L160">160</span>
<span id="L161" rel="#L161">161</span>
<span id="L162" rel="#L162">162</span>
<span id="L163" rel="#L163">163</span>
<span id="L164" rel="#L164">164</span>
<span id="L165" rel="#L165">165</span>
<span id="L166" rel="#L166">166</span>
<span id="L167" rel="#L167">167</span>
<span id="L168" rel="#L168">168</span>
<span id="L169" rel="#L169">169</span>
<span id="L170" rel="#L170">170</span>
<span id="L171" rel="#L171">171</span>
<span id="L172" rel="#L172">172</span>
<span id="L173" rel="#L173">173</span>
<span id="L174" rel="#L174">174</span>
<span id="L175" rel="#L175">175</span>
<span id="L176" rel="#L176">176</span>
<span id="L177" rel="#L177">177</span>
<span id="L178" rel="#L178">178</span>
<span id="L179" rel="#L179">179</span>
<span id="L180" rel="#L180">180</span>
<span id="L181" rel="#L181">181</span>
<span id="L182" rel="#L182">182</span>
<span id="L183" rel="#L183">183</span>
<span id="L184" rel="#L184">184</span>
<span id="L185" rel="#L185">185</span>
<span id="L186" rel="#L186">186</span>
<span id="L187" rel="#L187">187</span>
<span id="L188" rel="#L188">188</span>
<span id="L189" rel="#L189">189</span>
<span id="L190" rel="#L190">190</span>
<span id="L191" rel="#L191">191</span>
<span id="L192" rel="#L192">192</span>
<span id="L193" rel="#L193">193</span>
<span id="L194" rel="#L194">194</span>
<span id="L195" rel="#L195">195</span>
<span id="L196" rel="#L196">196</span>
<span id="L197" rel="#L197">197</span>
<span id="L198" rel="#L198">198</span>
<span id="L199" rel="#L199">199</span>
<span id="L200" rel="#L200">200</span>
<span id="L201" rel="#L201">201</span>
<span id="L202" rel="#L202">202</span>
<span id="L203" rel="#L203">203</span>
<span id="L204" rel="#L204">204</span>
<span id="L205" rel="#L205">205</span>
<span id="L206" rel="#L206">206</span>
<span id="L207" rel="#L207">207</span>
<span id="L208" rel="#L208">208</span>
<span id="L209" rel="#L209">209</span>
<span id="L210" rel="#L210">210</span>
<span id="L211" rel="#L211">211</span>
<span id="L212" rel="#L212">212</span>
<span id="L213" rel="#L213">213</span>
<span id="L214" rel="#L214">214</span>
<span id="L215" rel="#L215">215</span>
<span id="L216" rel="#L216">216</span>
<span id="L217" rel="#L217">217</span>
<span id="L218" rel="#L218">218</span>
<span id="L219" rel="#L219">219</span>
<span id="L220" rel="#L220">220</span>
<span id="L221" rel="#L221">221</span>
<span id="L222" rel="#L222">222</span>
<span id="L223" rel="#L223">223</span>
<span id="L224" rel="#L224">224</span>
<span id="L225" rel="#L225">225</span>
<span id="L226" rel="#L226">226</span>
<span id="L227" rel="#L227">227</span>
<span id="L228" rel="#L228">228</span>
<span id="L229" rel="#L229">229</span>
<span id="L230" rel="#L230">230</span>
<span id="L231" rel="#L231">231</span>
<span id="L232" rel="#L232">232</span>
<span id="L233" rel="#L233">233</span>
<span id="L234" rel="#L234">234</span>
<span id="L235" rel="#L235">235</span>
<span id="L236" rel="#L236">236</span>
<span id="L237" rel="#L237">237</span>
<span id="L238" rel="#L238">238</span>
<span id="L239" rel="#L239">239</span>
<span id="L240" rel="#L240">240</span>
<span id="L241" rel="#L241">241</span>
<span id="L242" rel="#L242">242</span>
<span id="L243" rel="#L243">243</span>
<span id="L244" rel="#L244">244</span>
<span id="L245" rel="#L245">245</span>
<span id="L246" rel="#L246">246</span>
<span id="L247" rel="#L247">247</span>
<span id="L248" rel="#L248">248</span>
<span id="L249" rel="#L249">249</span>
<span id="L250" rel="#L250">250</span>
<span id="L251" rel="#L251">251</span>
<span id="L252" rel="#L252">252</span>
<span id="L253" rel="#L253">253</span>
<span id="L254" rel="#L254">254</span>
<span id="L255" rel="#L255">255</span>
<span id="L256" rel="#L256">256</span>
<span id="L257" rel="#L257">257</span>
<span id="L258" rel="#L258">258</span>
<span id="L259" rel="#L259">259</span>
<span id="L260" rel="#L260">260</span>
<span id="L261" rel="#L261">261</span>
<span id="L262" rel="#L262">262</span>
<span id="L263" rel="#L263">263</span>
<span id="L264" rel="#L264">264</span>
<span id="L265" rel="#L265">265</span>
<span id="L266" rel="#L266">266</span>
<span id="L267" rel="#L267">267</span>
<span id="L268" rel="#L268">268</span>
<span id="L269" rel="#L269">269</span>
<span id="L270" rel="#L270">270</span>
<span id="L271" rel="#L271">271</span>
<span id="L272" rel="#L272">272</span>
<span id="L273" rel="#L273">273</span>
<span id="L274" rel="#L274">274</span>
<span id="L275" rel="#L275">275</span>
<span id="L276" rel="#L276">276</span>
<span id="L277" rel="#L277">277</span>
<span id="L278" rel="#L278">278</span>
<span id="L279" rel="#L279">279</span>
<span id="L280" rel="#L280">280</span>
<span id="L281" rel="#L281">281</span>
<span id="L282" rel="#L282">282</span>
<span id="L283" rel="#L283">283</span>
<span id="L284" rel="#L284">284</span>
<span id="L285" rel="#L285">285</span>
<span id="L286" rel="#L286">286</span>
<span id="L287" rel="#L287">287</span>
<span id="L288" rel="#L288">288</span>
<span id="L289" rel="#L289">289</span>
<span id="L290" rel="#L290">290</span>
<span id="L291" rel="#L291">291</span>
<span id="L292" rel="#L292">292</span>
<span id="L293" rel="#L293">293</span>
<span id="L294" rel="#L294">294</span>
<span id="L295" rel="#L295">295</span>
<span id="L296" rel="#L296">296</span>
<span id="L297" rel="#L297">297</span>
<span id="L298" rel="#L298">298</span>
<span id="L299" rel="#L299">299</span>
<span id="L300" rel="#L300">300</span>
<span id="L301" rel="#L301">301</span>
<span id="L302" rel="#L302">302</span>
<span id="L303" rel="#L303">303</span>
<span id="L304" rel="#L304">304</span>
<span id="L305" rel="#L305">305</span>
<span id="L306" rel="#L306">306</span>
<span id="L307" rel="#L307">307</span>
<span id="L308" rel="#L308">308</span>
<span id="L309" rel="#L309">309</span>
<span id="L310" rel="#L310">310</span>
<span id="L311" rel="#L311">311</span>
<span id="L312" rel="#L312">312</span>
<span id="L313" rel="#L313">313</span>
<span id="L314" rel="#L314">314</span>
<span id="L315" rel="#L315">315</span>
<span id="L316" rel="#L316">316</span>
<span id="L317" rel="#L317">317</span>
<span id="L318" rel="#L318">318</span>
<span id="L319" rel="#L319">319</span>
<span id="L320" rel="#L320">320</span>
<span id="L321" rel="#L321">321</span>
<span id="L322" rel="#L322">322</span>
<span id="L323" rel="#L323">323</span>
<span id="L324" rel="#L324">324</span>
<span id="L325" rel="#L325">325</span>
<span id="L326" rel="#L326">326</span>
<span id="L327" rel="#L327">327</span>
<span id="L328" rel="#L328">328</span>
<span id="L329" rel="#L329">329</span>
<span id="L330" rel="#L330">330</span>
<span id="L331" rel="#L331">331</span>
<span id="L332" rel="#L332">332</span>
<span id="L333" rel="#L333">333</span>
<span id="L334" rel="#L334">334</span>
<span id="L335" rel="#L335">335</span>
<span id="L336" rel="#L336">336</span>
<span id="L337" rel="#L337">337</span>
<span id="L338" rel="#L338">338</span>
<span id="L339" rel="#L339">339</span>
<span id="L340" rel="#L340">340</span>
<span id="L341" rel="#L341">341</span>
<span id="L342" rel="#L342">342</span>
<span id="L343" rel="#L343">343</span>
<span id="L344" rel="#L344">344</span>
<span id="L345" rel="#L345">345</span>
<span id="L346" rel="#L346">346</span>
<span id="L347" rel="#L347">347</span>
<span id="L348" rel="#L348">348</span>
<span id="L349" rel="#L349">349</span>
<span id="L350" rel="#L350">350</span>
<span id="L351" rel="#L351">351</span>
<span id="L352" rel="#L352">352</span>
<span id="L353" rel="#L353">353</span>
<span id="L354" rel="#L354">354</span>
<span id="L355" rel="#L355">355</span>
<span id="L356" rel="#L356">356</span>
<span id="L357" rel="#L357">357</span>
<span id="L358" rel="#L358">358</span>
<span id="L359" rel="#L359">359</span>
<span id="L360" rel="#L360">360</span>
<span id="L361" rel="#L361">361</span>
<span id="L362" rel="#L362">362</span>
<span id="L363" rel="#L363">363</span>
<span id="L364" rel="#L364">364</span>
<span id="L365" rel="#L365">365</span>
<span id="L366" rel="#L366">366</span>
<span id="L367" rel="#L367">367</span>
<span id="L368" rel="#L368">368</span>
<span id="L369" rel="#L369">369</span>
<span id="L370" rel="#L370">370</span>
<span id="L371" rel="#L371">371</span>
<span id="L372" rel="#L372">372</span>
<span id="L373" rel="#L373">373</span>
<span id="L374" rel="#L374">374</span>
<span id="L375" rel="#L375">375</span>
<span id="L376" rel="#L376">376</span>
<span id="L377" rel="#L377">377</span>
<span id="L378" rel="#L378">378</span>
<span id="L379" rel="#L379">379</span>
<span id="L380" rel="#L380">380</span>
<span id="L381" rel="#L381">381</span>
<span id="L382" rel="#L382">382</span>
<span id="L383" rel="#L383">383</span>
<span id="L384" rel="#L384">384</span>
<span id="L385" rel="#L385">385</span>
<span id="L386" rel="#L386">386</span>
<span id="L387" rel="#L387">387</span>
<span id="L388" rel="#L388">388</span>
<span id="L389" rel="#L389">389</span>
<span id="L390" rel="#L390">390</span>
<span id="L391" rel="#L391">391</span>
<span id="L392" rel="#L392">392</span>
<span id="L393" rel="#L393">393</span>
<span id="L394" rel="#L394">394</span>
<span id="L395" rel="#L395">395</span>
<span id="L396" rel="#L396">396</span>
<span id="L397" rel="#L397">397</span>
<span id="L398" rel="#L398">398</span>
<span id="L399" rel="#L399">399</span>
<span id="L400" rel="#L400">400</span>
<span id="L401" rel="#L401">401</span>
<span id="L402" rel="#L402">402</span>
<span id="L403" rel="#L403">403</span>
<span id="L404" rel="#L404">404</span>
<span id="L405" rel="#L405">405</span>
<span id="L406" rel="#L406">406</span>
<span id="L407" rel="#L407">407</span>
<span id="L408" rel="#L408">408</span>
<span id="L409" rel="#L409">409</span>
<span id="L410" rel="#L410">410</span>
<span id="L411" rel="#L411">411</span>
<span id="L412" rel="#L412">412</span>
<span id="L413" rel="#L413">413</span>
<span id="L414" rel="#L414">414</span>
<span id="L415" rel="#L415">415</span>
<span id="L416" rel="#L416">416</span>
<span id="L417" rel="#L417">417</span>
<span id="L418" rel="#L418">418</span>
<span id="L419" rel="#L419">419</span>
<span id="L420" rel="#L420">420</span>
<span id="L421" rel="#L421">421</span>
<span id="L422" rel="#L422">422</span>
<span id="L423" rel="#L423">423</span>
<span id="L424" rel="#L424">424</span>
<span id="L425" rel="#L425">425</span>
<span id="L426" rel="#L426">426</span>
<span id="L427" rel="#L427">427</span>
<span id="L428" rel="#L428">428</span>
<span id="L429" rel="#L429">429</span>
<span id="L430" rel="#L430">430</span>
<span id="L431" rel="#L431">431</span>
<span id="L432" rel="#L432">432</span>
<span id="L433" rel="#L433">433</span>
<span id="L434" rel="#L434">434</span>
<span id="L435" rel="#L435">435</span>
<span id="L436" rel="#L436">436</span>
<span id="L437" rel="#L437">437</span>
<span id="L438" rel="#L438">438</span>
<span id="L439" rel="#L439">439</span>
<span id="L440" rel="#L440">440</span>
<span id="L441" rel="#L441">441</span>
<span id="L442" rel="#L442">442</span>
<span id="L443" rel="#L443">443</span>
<span id="L444" rel="#L444">444</span>
<span id="L445" rel="#L445">445</span>
<span id="L446" rel="#L446">446</span>
<span id="L447" rel="#L447">447</span>
<span id="L448" rel="#L448">448</span>
<span id="L449" rel="#L449">449</span>
<span id="L450" rel="#L450">450</span>
<span id="L451" rel="#L451">451</span>
<span id="L452" rel="#L452">452</span>
<span id="L453" rel="#L453">453</span>
<span id="L454" rel="#L454">454</span>
<span id="L455" rel="#L455">455</span>
<span id="L456" rel="#L456">456</span>
<span id="L457" rel="#L457">457</span>
<span id="L458" rel="#L458">458</span>
<span id="L459" rel="#L459">459</span>
<span id="L460" rel="#L460">460</span>
<span id="L461" rel="#L461">461</span>
<span id="L462" rel="#L462">462</span>
<span id="L463" rel="#L463">463</span>
<span id="L464" rel="#L464">464</span>
<span id="L465" rel="#L465">465</span>
<span id="L466" rel="#L466">466</span>
<span id="L467" rel="#L467">467</span>
<span id="L468" rel="#L468">468</span>
<span id="L469" rel="#L469">469</span>
<span id="L470" rel="#L470">470</span>
<span id="L471" rel="#L471">471</span>
<span id="L472" rel="#L472">472</span>
<span id="L473" rel="#L473">473</span>
<span id="L474" rel="#L474">474</span>
<span id="L475" rel="#L475">475</span>
<span id="L476" rel="#L476">476</span>
<span id="L477" rel="#L477">477</span>
<span id="L478" rel="#L478">478</span>
<span id="L479" rel="#L479">479</span>
<span id="L480" rel="#L480">480</span>
<span id="L481" rel="#L481">481</span>
<span id="L482" rel="#L482">482</span>
<span id="L483" rel="#L483">483</span>
<span id="L484" rel="#L484">484</span>
<span id="L485" rel="#L485">485</span>
<span id="L486" rel="#L486">486</span>
<span id="L487" rel="#L487">487</span>
<span id="L488" rel="#L488">488</span>
<span id="L489" rel="#L489">489</span>
<span id="L490" rel="#L490">490</span>
<span id="L491" rel="#L491">491</span>
<span id="L492" rel="#L492">492</span>
<span id="L493" rel="#L493">493</span>
<span id="L494" rel="#L494">494</span>
<span id="L495" rel="#L495">495</span>
<span id="L496" rel="#L496">496</span>
<span id="L497" rel="#L497">497</span>
<span id="L498" rel="#L498">498</span>
<span id="L499" rel="#L499">499</span>
<span id="L500" rel="#L500">500</span>
<span id="L501" rel="#L501">501</span>
<span id="L502" rel="#L502">502</span>
<span id="L503" rel="#L503">503</span>
<span id="L504" rel="#L504">504</span>
<span id="L505" rel="#L505">505</span>
<span id="L506" rel="#L506">506</span>
<span id="L507" rel="#L507">507</span>
<span id="L508" rel="#L508">508</span>
<span id="L509" rel="#L509">509</span>
<span id="L510" rel="#L510">510</span>
<span id="L511" rel="#L511">511</span>
<span id="L512" rel="#L512">512</span>
<span id="L513" rel="#L513">513</span>
<span id="L514" rel="#L514">514</span>
<span id="L515" rel="#L515">515</span>
<span id="L516" rel="#L516">516</span>
<span id="L517" rel="#L517">517</span>
<span id="L518" rel="#L518">518</span>
<span id="L519" rel="#L519">519</span>
<span id="L520" rel="#L520">520</span>
<span id="L521" rel="#L521">521</span>
<span id="L522" rel="#L522">522</span>
<span id="L523" rel="#L523">523</span>
<span id="L524" rel="#L524">524</span>
<span id="L525" rel="#L525">525</span>
<span id="L526" rel="#L526">526</span>
<span id="L527" rel="#L527">527</span>
<span id="L528" rel="#L528">528</span>
<span id="L529" rel="#L529">529</span>
<span id="L530" rel="#L530">530</span>
<span id="L531" rel="#L531">531</span>
<span id="L532" rel="#L532">532</span>
<span id="L533" rel="#L533">533</span>
<span id="L534" rel="#L534">534</span>
<span id="L535" rel="#L535">535</span>
<span id="L536" rel="#L536">536</span>
<span id="L537" rel="#L537">537</span>
<span id="L538" rel="#L538">538</span>
<span id="L539" rel="#L539">539</span>
<span id="L540" rel="#L540">540</span>
<span id="L541" rel="#L541">541</span>
<span id="L542" rel="#L542">542</span>
<span id="L543" rel="#L543">543</span>
<span id="L544" rel="#L544">544</span>
<span id="L545" rel="#L545">545</span>
<span id="L546" rel="#L546">546</span>
<span id="L547" rel="#L547">547</span>
<span id="L548" rel="#L548">548</span>
<span id="L549" rel="#L549">549</span>
<span id="L550" rel="#L550">550</span>
<span id="L551" rel="#L551">551</span>
<span id="L552" rel="#L552">552</span>
<span id="L553" rel="#L553">553</span>
<span id="L554" rel="#L554">554</span>
<span id="L555" rel="#L555">555</span>
<span id="L556" rel="#L556">556</span>
<span id="L557" rel="#L557">557</span>
<span id="L558" rel="#L558">558</span>
<span id="L559" rel="#L559">559</span>
<span id="L560" rel="#L560">560</span>
<span id="L561" rel="#L561">561</span>
<span id="L562" rel="#L562">562</span>
<span id="L563" rel="#L563">563</span>
<span id="L564" rel="#L564">564</span>
<span id="L565" rel="#L565">565</span>
<span id="L566" rel="#L566">566</span>
<span id="L567" rel="#L567">567</span>
<span id="L568" rel="#L568">568</span>
<span id="L569" rel="#L569">569</span>
<span id="L570" rel="#L570">570</span>
<span id="L571" rel="#L571">571</span>
<span id="L572" rel="#L572">572</span>
<span id="L573" rel="#L573">573</span>
<span id="L574" rel="#L574">574</span>
<span id="L575" rel="#L575">575</span>
<span id="L576" rel="#L576">576</span>
<span id="L577" rel="#L577">577</span>
<span id="L578" rel="#L578">578</span>
<span id="L579" rel="#L579">579</span>
<span id="L580" rel="#L580">580</span>
<span id="L581" rel="#L581">581</span>
<span id="L582" rel="#L582">582</span>
<span id="L583" rel="#L583">583</span>
<span id="L584" rel="#L584">584</span>
<span id="L585" rel="#L585">585</span>
<span id="L586" rel="#L586">586</span>
<span id="L587" rel="#L587">587</span>
<span id="L588" rel="#L588">588</span>
<span id="L589" rel="#L589">589</span>
<span id="L590" rel="#L590">590</span>
<span id="L591" rel="#L591">591</span>
<span id="L592" rel="#L592">592</span>
<span id="L593" rel="#L593">593</span>
<span id="L594" rel="#L594">594</span>
<span id="L595" rel="#L595">595</span>
<span id="L596" rel="#L596">596</span>
<span id="L597" rel="#L597">597</span>
<span id="L598" rel="#L598">598</span>
<span id="L599" rel="#L599">599</span>
<span id="L600" rel="#L600">600</span>
<span id="L601" rel="#L601">601</span>
<span id="L602" rel="#L602">602</span>
<span id="L603" rel="#L603">603</span>
<span id="L604" rel="#L604">604</span>
<span id="L605" rel="#L605">605</span>
<span id="L606" rel="#L606">606</span>
<span id="L607" rel="#L607">607</span>
<span id="L608" rel="#L608">608</span>
<span id="L609" rel="#L609">609</span>
<span id="L610" rel="#L610">610</span>
<span id="L611" rel="#L611">611</span>
<span id="L612" rel="#L612">612</span>
<span id="L613" rel="#L613">613</span>
<span id="L614" rel="#L614">614</span>
<span id="L615" rel="#L615">615</span>
<span id="L616" rel="#L616">616</span>
<span id="L617" rel="#L617">617</span>
<span id="L618" rel="#L618">618</span>
<span id="L619" rel="#L619">619</span>
<span id="L620" rel="#L620">620</span>
<span id="L621" rel="#L621">621</span>
<span id="L622" rel="#L622">622</span>
<span id="L623" rel="#L623">623</span>
<span id="L624" rel="#L624">624</span>
<span id="L625" rel="#L625">625</span>
<span id="L626" rel="#L626">626</span>
<span id="L627" rel="#L627">627</span>
<span id="L628" rel="#L628">628</span>
<span id="L629" rel="#L629">629</span>
<span id="L630" rel="#L630">630</span>
<span id="L631" rel="#L631">631</span>
<span id="L632" rel="#L632">632</span>
<span id="L633" rel="#L633">633</span>
<span id="L634" rel="#L634">634</span>
<span id="L635" rel="#L635">635</span>
<span id="L636" rel="#L636">636</span>
<span id="L637" rel="#L637">637</span>
<span id="L638" rel="#L638">638</span>
<span id="L639" rel="#L639">639</span>
<span id="L640" rel="#L640">640</span>
<span id="L641" rel="#L641">641</span>
<span id="L642" rel="#L642">642</span>
<span id="L643" rel="#L643">643</span>
<span id="L644" rel="#L644">644</span>
<span id="L645" rel="#L645">645</span>
<span id="L646" rel="#L646">646</span>
<span id="L647" rel="#L647">647</span>
<span id="L648" rel="#L648">648</span>
<span id="L649" rel="#L649">649</span>
<span id="L650" rel="#L650">650</span>
<span id="L651" rel="#L651">651</span>
<span id="L652" rel="#L652">652</span>
<span id="L653" rel="#L653">653</span>
<span id="L654" rel="#L654">654</span>
<span id="L655" rel="#L655">655</span>
<span id="L656" rel="#L656">656</span>
<span id="L657" rel="#L657">657</span>
<span id="L658" rel="#L658">658</span>
<span id="L659" rel="#L659">659</span>
<span id="L660" rel="#L660">660</span>
<span id="L661" rel="#L661">661</span>
<span id="L662" rel="#L662">662</span>
<span id="L663" rel="#L663">663</span>
<span id="L664" rel="#L664">664</span>
<span id="L665" rel="#L665">665</span>
<span id="L666" rel="#L666">666</span>
<span id="L667" rel="#L667">667</span>
<span id="L668" rel="#L668">668</span>
<span id="L669" rel="#L669">669</span>
<span id="L670" rel="#L670">670</span>
<span id="L671" rel="#L671">671</span>
<span id="L672" rel="#L672">672</span>
<span id="L673" rel="#L673">673</span>
<span id="L674" rel="#L674">674</span>
<span id="L675" rel="#L675">675</span>
<span id="L676" rel="#L676">676</span>
<span id="L677" rel="#L677">677</span>
<span id="L678" rel="#L678">678</span>
<span id="L679" rel="#L679">679</span>
<span id="L680" rel="#L680">680</span>
<span id="L681" rel="#L681">681</span>
<span id="L682" rel="#L682">682</span>
<span id="L683" rel="#L683">683</span>
<span id="L684" rel="#L684">684</span>
<span id="L685" rel="#L685">685</span>
<span id="L686" rel="#L686">686</span>
<span id="L687" rel="#L687">687</span>
<span id="L688" rel="#L688">688</span>
<span id="L689" rel="#L689">689</span>
<span id="L690" rel="#L690">690</span>
<span id="L691" rel="#L691">691</span>
<span id="L692" rel="#L692">692</span>
<span id="L693" rel="#L693">693</span>
<span id="L694" rel="#L694">694</span>
<span id="L695" rel="#L695">695</span>
<span id="L696" rel="#L696">696</span>
<span id="L697" rel="#L697">697</span>
<span id="L698" rel="#L698">698</span>
<span id="L699" rel="#L699">699</span>
<span id="L700" rel="#L700">700</span>
<span id="L701" rel="#L701">701</span>
<span id="L702" rel="#L702">702</span>
<span id="L703" rel="#L703">703</span>
<span id="L704" rel="#L704">704</span>
<span id="L705" rel="#L705">705</span>
<span id="L706" rel="#L706">706</span>
<span id="L707" rel="#L707">707</span>
<span id="L708" rel="#L708">708</span>
<span id="L709" rel="#L709">709</span>
<span id="L710" rel="#L710">710</span>
<span id="L711" rel="#L711">711</span>
<span id="L712" rel="#L712">712</span>
<span id="L713" rel="#L713">713</span>
<span id="L714" rel="#L714">714</span>
<span id="L715" rel="#L715">715</span>
<span id="L716" rel="#L716">716</span>
<span id="L717" rel="#L717">717</span>
<span id="L718" rel="#L718">718</span>
<span id="L719" rel="#L719">719</span>
<span id="L720" rel="#L720">720</span>
<span id="L721" rel="#L721">721</span>
<span id="L722" rel="#L722">722</span>
<span id="L723" rel="#L723">723</span>
<span id="L724" rel="#L724">724</span>
<span id="L725" rel="#L725">725</span>
<span id="L726" rel="#L726">726</span>
<span id="L727" rel="#L727">727</span>
<span id="L728" rel="#L728">728</span>
<span id="L729" rel="#L729">729</span>
<span id="L730" rel="#L730">730</span>
<span id="L731" rel="#L731">731</span>
<span id="L732" rel="#L732">732</span>
<span id="L733" rel="#L733">733</span>
<span id="L734" rel="#L734">734</span>
<span id="L735" rel="#L735">735</span>
<span id="L736" rel="#L736">736</span>
<span id="L737" rel="#L737">737</span>
<span id="L738" rel="#L738">738</span>
<span id="L739" rel="#L739">739</span>
<span id="L740" rel="#L740">740</span>
<span id="L741" rel="#L741">741</span>
<span id="L742" rel="#L742">742</span>
<span id="L743" rel="#L743">743</span>
<span id="L744" rel="#L744">744</span>
<span id="L745" rel="#L745">745</span>
<span id="L746" rel="#L746">746</span>
<span id="L747" rel="#L747">747</span>
<span id="L748" rel="#L748">748</span>
<span id="L749" rel="#L749">749</span>
<span id="L750" rel="#L750">750</span>
<span id="L751" rel="#L751">751</span>
<span id="L752" rel="#L752">752</span>
<span id="L753" rel="#L753">753</span>
<span id="L754" rel="#L754">754</span>
<span id="L755" rel="#L755">755</span>
<span id="L756" rel="#L756">756</span>
<span id="L757" rel="#L757">757</span>
<span id="L758" rel="#L758">758</span>
<span id="L759" rel="#L759">759</span>
<span id="L760" rel="#L760">760</span>
<span id="L761" rel="#L761">761</span>
<span id="L762" rel="#L762">762</span>
<span id="L763" rel="#L763">763</span>
<span id="L764" rel="#L764">764</span>
<span id="L765" rel="#L765">765</span>
<span id="L766" rel="#L766">766</span>
<span id="L767" rel="#L767">767</span>
<span id="L768" rel="#L768">768</span>
<span id="L769" rel="#L769">769</span>
<span id="L770" rel="#L770">770</span>
<span id="L771" rel="#L771">771</span>
<span id="L772" rel="#L772">772</span>
<span id="L773" rel="#L773">773</span>
<span id="L774" rel="#L774">774</span>
<span id="L775" rel="#L775">775</span>
<span id="L776" rel="#L776">776</span>
<span id="L777" rel="#L777">777</span>
<span id="L778" rel="#L778">778</span>
<span id="L779" rel="#L779">779</span>
<span id="L780" rel="#L780">780</span>
<span id="L781" rel="#L781">781</span>
<span id="L782" rel="#L782">782</span>
<span id="L783" rel="#L783">783</span>
<span id="L784" rel="#L784">784</span>
<span id="L785" rel="#L785">785</span>
<span id="L786" rel="#L786">786</span>
<span id="L787" rel="#L787">787</span>
<span id="L788" rel="#L788">788</span>
<span id="L789" rel="#L789">789</span>
<span id="L790" rel="#L790">790</span>
<span id="L791" rel="#L791">791</span>
<span id="L792" rel="#L792">792</span>
<span id="L793" rel="#L793">793</span>
<span id="L794" rel="#L794">794</span>
<span id="L795" rel="#L795">795</span>
<span id="L796" rel="#L796">796</span>
<span id="L797" rel="#L797">797</span>
<span id="L798" rel="#L798">798</span>
<span id="L799" rel="#L799">799</span>
<span id="L800" rel="#L800">800</span>
<span id="L801" rel="#L801">801</span>
<span id="L802" rel="#L802">802</span>
<span id="L803" rel="#L803">803</span>
<span id="L804" rel="#L804">804</span>
<span id="L805" rel="#L805">805</span>
<span id="L806" rel="#L806">806</span>
<span id="L807" rel="#L807">807</span>
<span id="L808" rel="#L808">808</span>
<span id="L809" rel="#L809">809</span>
<span id="L810" rel="#L810">810</span>
<span id="L811" rel="#L811">811</span>
<span id="L812" rel="#L812">812</span>
<span id="L813" rel="#L813">813</span>
<span id="L814" rel="#L814">814</span>
<span id="L815" rel="#L815">815</span>
<span id="L816" rel="#L816">816</span>
<span id="L817" rel="#L817">817</span>
<span id="L818" rel="#L818">818</span>
<span id="L819" rel="#L819">819</span>
<span id="L820" rel="#L820">820</span>
<span id="L821" rel="#L821">821</span>
<span id="L822" rel="#L822">822</span>
<span id="L823" rel="#L823">823</span>
<span id="L824" rel="#L824">824</span>
<span id="L825" rel="#L825">825</span>
<span id="L826" rel="#L826">826</span>
<span id="L827" rel="#L827">827</span>
<span id="L828" rel="#L828">828</span>
<span id="L829" rel="#L829">829</span>
<span id="L830" rel="#L830">830</span>
<span id="L831" rel="#L831">831</span>
<span id="L832" rel="#L832">832</span>
<span id="L833" rel="#L833">833</span>
<span id="L834" rel="#L834">834</span>
<span id="L835" rel="#L835">835</span>
<span id="L836" rel="#L836">836</span>
<span id="L837" rel="#L837">837</span>
<span id="L838" rel="#L838">838</span>
<span id="L839" rel="#L839">839</span>
<span id="L840" rel="#L840">840</span>
<span id="L841" rel="#L841">841</span>
<span id="L842" rel="#L842">842</span>
<span id="L843" rel="#L843">843</span>
<span id="L844" rel="#L844">844</span>
<span id="L845" rel="#L845">845</span>
<span id="L846" rel="#L846">846</span>
<span id="L847" rel="#L847">847</span>
<span id="L848" rel="#L848">848</span>
<span id="L849" rel="#L849">849</span>
<span id="L850" rel="#L850">850</span>
<span id="L851" rel="#L851">851</span>
<span id="L852" rel="#L852">852</span>
<span id="L853" rel="#L853">853</span>
<span id="L854" rel="#L854">854</span>
<span id="L855" rel="#L855">855</span>
<span id="L856" rel="#L856">856</span>
<span id="L857" rel="#L857">857</span>
<span id="L858" rel="#L858">858</span>
<span id="L859" rel="#L859">859</span>
<span id="L860" rel="#L860">860</span>
<span id="L861" rel="#L861">861</span>
<span id="L862" rel="#L862">862</span>
<span id="L863" rel="#L863">863</span>
<span id="L864" rel="#L864">864</span>
<span id="L865" rel="#L865">865</span>
<span id="L866" rel="#L866">866</span>
<span id="L867" rel="#L867">867</span>
<span id="L868" rel="#L868">868</span>
<span id="L869" rel="#L869">869</span>
<span id="L870" rel="#L870">870</span>
<span id="L871" rel="#L871">871</span>
<span id="L872" rel="#L872">872</span>
<span id="L873" rel="#L873">873</span>
<span id="L874" rel="#L874">874</span>
<span id="L875" rel="#L875">875</span>
<span id="L876" rel="#L876">876</span>
<span id="L877" rel="#L877">877</span>
<span id="L878" rel="#L878">878</span>
<span id="L879" rel="#L879">879</span>
<span id="L880" rel="#L880">880</span>
<span id="L881" rel="#L881">881</span>
<span id="L882" rel="#L882">882</span>
<span id="L883" rel="#L883">883</span>
<span id="L884" rel="#L884">884</span>
<span id="L885" rel="#L885">885</span>
<span id="L886" rel="#L886">886</span>
<span id="L887" rel="#L887">887</span>
<span id="L888" rel="#L888">888</span>
<span id="L889" rel="#L889">889</span>
<span id="L890" rel="#L890">890</span>
<span id="L891" rel="#L891">891</span>
<span id="L892" rel="#L892">892</span>
<span id="L893" rel="#L893">893</span>
<span id="L894" rel="#L894">894</span>
<span id="L895" rel="#L895">895</span>
<span id="L896" rel="#L896">896</span>
<span id="L897" rel="#L897">897</span>
<span id="L898" rel="#L898">898</span>
<span id="L899" rel="#L899">899</span>
<span id="L900" rel="#L900">900</span>
<span id="L901" rel="#L901">901</span>
<span id="L902" rel="#L902">902</span>
<span id="L903" rel="#L903">903</span>
<span id="L904" rel="#L904">904</span>
<span id="L905" rel="#L905">905</span>
<span id="L906" rel="#L906">906</span>
<span id="L907" rel="#L907">907</span>
<span id="L908" rel="#L908">908</span>
<span id="L909" rel="#L909">909</span>
<span id="L910" rel="#L910">910</span>
<span id="L911" rel="#L911">911</span>
<span id="L912" rel="#L912">912</span>
<span id="L913" rel="#L913">913</span>
<span id="L914" rel="#L914">914</span>
<span id="L915" rel="#L915">915</span>
<span id="L916" rel="#L916">916</span>
<span id="L917" rel="#L917">917</span>
<span id="L918" rel="#L918">918</span>
<span id="L919" rel="#L919">919</span>
<span id="L920" rel="#L920">920</span>
<span id="L921" rel="#L921">921</span>
<span id="L922" rel="#L922">922</span>
<span id="L923" rel="#L923">923</span>
<span id="L924" rel="#L924">924</span>
<span id="L925" rel="#L925">925</span>
<span id="L926" rel="#L926">926</span>
<span id="L927" rel="#L927">927</span>
<span id="L928" rel="#L928">928</span>
<span id="L929" rel="#L929">929</span>
<span id="L930" rel="#L930">930</span>
<span id="L931" rel="#L931">931</span>
<span id="L932" rel="#L932">932</span>
<span id="L933" rel="#L933">933</span>
<span id="L934" rel="#L934">934</span>
<span id="L935" rel="#L935">935</span>
<span id="L936" rel="#L936">936</span>
<span id="L937" rel="#L937">937</span>
<span id="L938" rel="#L938">938</span>
<span id="L939" rel="#L939">939</span>
<span id="L940" rel="#L940">940</span>
<span id="L941" rel="#L941">941</span>
<span id="L942" rel="#L942">942</span>
<span id="L943" rel="#L943">943</span>
<span id="L944" rel="#L944">944</span>
<span id="L945" rel="#L945">945</span>
<span id="L946" rel="#L946">946</span>
<span id="L947" rel="#L947">947</span>
<span id="L948" rel="#L948">948</span>
<span id="L949" rel="#L949">949</span>
<span id="L950" rel="#L950">950</span>
<span id="L951" rel="#L951">951</span>
<span id="L952" rel="#L952">952</span>
<span id="L953" rel="#L953">953</span>
<span id="L954" rel="#L954">954</span>
<span id="L955" rel="#L955">955</span>
<span id="L956" rel="#L956">956</span>
<span id="L957" rel="#L957">957</span>
<span id="L958" rel="#L958">958</span>
<span id="L959" rel="#L959">959</span>
<span id="L960" rel="#L960">960</span>
<span id="L961" rel="#L961">961</span>
<span id="L962" rel="#L962">962</span>
<span id="L963" rel="#L963">963</span>
<span id="L964" rel="#L964">964</span>
<span id="L965" rel="#L965">965</span>
<span id="L966" rel="#L966">966</span>
<span id="L967" rel="#L967">967</span>
<span id="L968" rel="#L968">968</span>
<span id="L969" rel="#L969">969</span>
<span id="L970" rel="#L970">970</span>
<span id="L971" rel="#L971">971</span>
<span id="L972" rel="#L972">972</span>
<span id="L973" rel="#L973">973</span>
<span id="L974" rel="#L974">974</span>
<span id="L975" rel="#L975">975</span>
<span id="L976" rel="#L976">976</span>
<span id="L977" rel="#L977">977</span>
<span id="L978" rel="#L978">978</span>
<span id="L979" rel="#L979">979</span>
<span id="L980" rel="#L980">980</span>
<span id="L981" rel="#L981">981</span>
<span id="L982" rel="#L982">982</span>
<span id="L983" rel="#L983">983</span>
<span id="L984" rel="#L984">984</span>
<span id="L985" rel="#L985">985</span>
<span id="L986" rel="#L986">986</span>
<span id="L987" rel="#L987">987</span>
<span id="L988" rel="#L988">988</span>
<span id="L989" rel="#L989">989</span>
<span id="L990" rel="#L990">990</span>
<span id="L991" rel="#L991">991</span>
<span id="L992" rel="#L992">992</span>
<span id="L993" rel="#L993">993</span>
<span id="L994" rel="#L994">994</span>
<span id="L995" rel="#L995">995</span>
<span id="L996" rel="#L996">996</span>
<span id="L997" rel="#L997">997</span>
<span id="L998" rel="#L998">998</span>
<span id="L999" rel="#L999">999</span>
<span id="L1000" rel="#L1000">1000</span>
<span id="L1001" rel="#L1001">1001</span>
<span id="L1002" rel="#L1002">1002</span>
<span id="L1003" rel="#L1003">1003</span>
<span id="L1004" rel="#L1004">1004</span>
<span id="L1005" rel="#L1005">1005</span>
<span id="L1006" rel="#L1006">1006</span>
<span id="L1007" rel="#L1007">1007</span>
<span id="L1008" rel="#L1008">1008</span>
<span id="L1009" rel="#L1009">1009</span>
<span id="L1010" rel="#L1010">1010</span>
<span id="L1011" rel="#L1011">1011</span>
<span id="L1012" rel="#L1012">1012</span>
<span id="L1013" rel="#L1013">1013</span>
<span id="L1014" rel="#L1014">1014</span>
<span id="L1015" rel="#L1015">1015</span>
<span id="L1016" rel="#L1016">1016</span>
<span id="L1017" rel="#L1017">1017</span>
<span id="L1018" rel="#L1018">1018</span>
<span id="L1019" rel="#L1019">1019</span>
<span id="L1020" rel="#L1020">1020</span>
<span id="L1021" rel="#L1021">1021</span>
<span id="L1022" rel="#L1022">1022</span>
<span id="L1023" rel="#L1023">1023</span>
<span id="L1024" rel="#L1024">1024</span>
<span id="L1025" rel="#L1025">1025</span>
<span id="L1026" rel="#L1026">1026</span>
<span id="L1027" rel="#L1027">1027</span>
<span id="L1028" rel="#L1028">1028</span>
<span id="L1029" rel="#L1029">1029</span>
<span id="L1030" rel="#L1030">1030</span>
<span id="L1031" rel="#L1031">1031</span>
<span id="L1032" rel="#L1032">1032</span>
<span id="L1033" rel="#L1033">1033</span>
<span id="L1034" rel="#L1034">1034</span>
<span id="L1035" rel="#L1035">1035</span>
<span id="L1036" rel="#L1036">1036</span>
<span id="L1037" rel="#L1037">1037</span>
<span id="L1038" rel="#L1038">1038</span>
<span id="L1039" rel="#L1039">1039</span>
<span id="L1040" rel="#L1040">1040</span>
<span id="L1041" rel="#L1041">1041</span>
<span id="L1042" rel="#L1042">1042</span>
<span id="L1043" rel="#L1043">1043</span>
<span id="L1044" rel="#L1044">1044</span>
<span id="L1045" rel="#L1045">1045</span>
<span id="L1046" rel="#L1046">1046</span>
<span id="L1047" rel="#L1047">1047</span>
<span id="L1048" rel="#L1048">1048</span>
<span id="L1049" rel="#L1049">1049</span>
<span id="L1050" rel="#L1050">1050</span>
<span id="L1051" rel="#L1051">1051</span>
<span id="L1052" rel="#L1052">1052</span>
<span id="L1053" rel="#L1053">1053</span>
<span id="L1054" rel="#L1054">1054</span>
<span id="L1055" rel="#L1055">1055</span>
<span id="L1056" rel="#L1056">1056</span>
<span id="L1057" rel="#L1057">1057</span>
<span id="L1058" rel="#L1058">1058</span>
<span id="L1059" rel="#L1059">1059</span>
<span id="L1060" rel="#L1060">1060</span>
<span id="L1061" rel="#L1061">1061</span>
<span id="L1062" rel="#L1062">1062</span>
<span id="L1063" rel="#L1063">1063</span>
<span id="L1064" rel="#L1064">1064</span>
<span id="L1065" rel="#L1065">1065</span>
<span id="L1066" rel="#L1066">1066</span>
<span id="L1067" rel="#L1067">1067</span>
<span id="L1068" rel="#L1068">1068</span>
<span id="L1069" rel="#L1069">1069</span>
<span id="L1070" rel="#L1070">1070</span>
<span id="L1071" rel="#L1071">1071</span>
<span id="L1072" rel="#L1072">1072</span>
<span id="L1073" rel="#L1073">1073</span>
<span id="L1074" rel="#L1074">1074</span>
<span id="L1075" rel="#L1075">1075</span>
<span id="L1076" rel="#L1076">1076</span>
<span id="L1077" rel="#L1077">1077</span>
<span id="L1078" rel="#L1078">1078</span>
<span id="L1079" rel="#L1079">1079</span>
<span id="L1080" rel="#L1080">1080</span>
<span id="L1081" rel="#L1081">1081</span>
<span id="L1082" rel="#L1082">1082</span>
<span id="L1083" rel="#L1083">1083</span>
<span id="L1084" rel="#L1084">1084</span>
<span id="L1085" rel="#L1085">1085</span>
<span id="L1086" rel="#L1086">1086</span>
<span id="L1087" rel="#L1087">1087</span>
<span id="L1088" rel="#L1088">1088</span>
<span id="L1089" rel="#L1089">1089</span>
<span id="L1090" rel="#L1090">1090</span>
<span id="L1091" rel="#L1091">1091</span>
<span id="L1092" rel="#L1092">1092</span>

          </td>
          <td class="blob-line-code">
                  <div class="highlight"><pre><div class='line' id='LC1'><span class="o">&lt;?</span><span class="nx">php</span></div><div class='line' id='LC2'><span class="cm">/*~ class.smtp.php</span></div><div class='line' id='LC3'><span class="cm">.---------------------------------------------------------------------------.</span></div><div class='line' id='LC4'><span class="cm">|  Software: PHPMailer - PHP email class                                    |</span></div><div class='line' id='LC5'><span class="cm">|   Version: 5.2.6                                                          |</span></div><div class='line' id='LC6'><span class="cm">|      Site: https://github.com/PHPMailer/PHPMailer/                        |</span></div><div class='line' id='LC7'><span class="cm">| ------------------------------------------------------------------------- |</span></div><div class='line' id='LC8'><span class="cm">|    Admins: Marcus Bointon                                                 |</span></div><div class='line' id='LC9'><span class="cm">|    Admins: Jim Jagielski                                                  |</span></div><div class='line' id='LC10'><span class="cm">|   Authors: Andy Prevost (codeworxtech) codeworxtech@users.sourceforge.net |</span></div><div class='line' id='LC11'><span class="cm">|          : Marcus Bointon (coolbru) phpmailer@synchromedia.co.uk          |</span></div><div class='line' id='LC12'><span class="cm">|          : Jim Jagielski (jimjag) jimjag@gmail.com                        |</span></div><div class='line' id='LC13'><span class="cm">|   Founder: Brent R. Matzelle (original founder)                           |</span></div><div class='line' id='LC14'><span class="cm">| Copyright (c) 2010-2012, Jim Jagielski. All Rights Reserved.              |</span></div><div class='line' id='LC15'><span class="cm">| Copyright (c) 2004-2009, Andy Prevost. All Rights Reserved.               |</span></div><div class='line' id='LC16'><span class="cm">| Copyright (c) 2001-2003, Brent R. Matzelle                                |</span></div><div class='line' id='LC17'><span class="cm">| ------------------------------------------------------------------------- |</span></div><div class='line' id='LC18'><span class="cm">|   License: Distributed under the Lesser General Public License (LGPL)     |</span></div><div class='line' id='LC19'><span class="cm">|            http://www.gnu.org/copyleft/lesser.html                        |</span></div><div class='line' id='LC20'><span class="cm">| This program is distributed in the hope that it will be useful - WITHOUT  |</span></div><div class='line' id='LC21'><span class="cm">| ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or     |</span></div><div class='line' id='LC22'><span class="cm">| FITNESS FOR A PARTICULAR PURPOSE.                                         |</span></div><div class='line' id='LC23'><span class="cm">&#39;---------------------------------------------------------------------------&#39;</span></div><div class='line' id='LC24'><span class="cm">*/</span></div><div class='line' id='LC25'><br/></div><div class='line' id='LC26'><span class="sd">/**</span></div><div class='line' id='LC27'><span class="sd"> * PHPMailer - PHP SMTP email transport class</span></div><div class='line' id='LC28'><span class="sd"> * NOTE: Designed for use with PHP version 5 and up</span></div><div class='line' id='LC29'><span class="sd"> * @package PHPMailer</span></div><div class='line' id='LC30'><span class="sd"> * @author Andy Prevost</span></div><div class='line' id='LC31'><span class="sd"> * @author Marcus Bointon</span></div><div class='line' id='LC32'><span class="sd"> * @copyright 2004 - 2008 Andy Prevost</span></div><div class='line' id='LC33'><span class="sd"> * @author Jim Jagielski</span></div><div class='line' id='LC34'><span class="sd"> * @copyright 2010 - 2012 Jim Jagielski</span></div><div class='line' id='LC35'><span class="sd"> * @license http://www.gnu.org/copyleft/lesser.html Distributed under the Lesser General Public License (LGPL)</span></div><div class='line' id='LC36'><span class="sd"> */</span></div><div class='line' id='LC37'><br/></div><div class='line' id='LC38'><span class="sd">/**</span></div><div class='line' id='LC39'><span class="sd"> * PHP RFC821 SMTP client</span></div><div class='line' id='LC40'><span class="sd"> *</span></div><div class='line' id='LC41'><span class="sd"> * Implements all the RFC 821 SMTP commands except TURN which will always return a not implemented error.</span></div><div class='line' id='LC42'><span class="sd"> * SMTP also provides some utility methods for sending mail to an SMTP server.</span></div><div class='line' id='LC43'><span class="sd"> * @author Chris Ryan</span></div><div class='line' id='LC44'><span class="sd"> * @package PHPMailer</span></div><div class='line' id='LC45'><span class="sd"> */</span></div><div class='line' id='LC46'><br/></div><div class='line' id='LC47'><span class="k">class</span> <span class="nc">SMTP</span> <span class="p">{</span></div><div class='line' id='LC48'>&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC49'><span class="sd">   *  SMTP server port</span></div><div class='line' id='LC50'><span class="sd">   *  @var int</span></div><div class='line' id='LC51'><span class="sd">   */</span></div><div class='line' id='LC52'>&nbsp;&nbsp;<span class="k">public</span> <span class="nv">$SMTP_PORT</span> <span class="o">=</span> <span class="mi">25</span><span class="p">;</span></div><div class='line' id='LC53'><br/></div><div class='line' id='LC54'>&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC55'><span class="sd">   *  SMTP reply line ending (don&#39;t change)</span></div><div class='line' id='LC56'><span class="sd">   *  @var string</span></div><div class='line' id='LC57'><span class="sd">   */</span></div><div class='line' id='LC58'>&nbsp;&nbsp;<span class="k">public</span> <span class="nv">$CRLF</span> <span class="o">=</span> <span class="s2">&quot;</span><span class="se">\r\n</span><span class="s2">&quot;</span><span class="p">;</span></div><div class='line' id='LC59'><br/></div><div class='line' id='LC60'>&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC61'><span class="sd">   *  Debug output level; 0 for no output</span></div><div class='line' id='LC62'><span class="sd">   *  @var int</span></div><div class='line' id='LC63'><span class="sd">   */</span></div><div class='line' id='LC64'>&nbsp;&nbsp;<span class="k">public</span> <span class="nv">$do_debug</span> <span class="o">=</span> <span class="mi">0</span><span class="p">;</span></div><div class='line' id='LC65'><br/></div><div class='line' id='LC66'>&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC67'><span class="sd">   * Sets the function/method to use for debugging output.</span></div><div class='line' id='LC68'><span class="sd">   * Right now we only honor &#39;echo&#39;, &#39;html&#39; or &#39;error_log&#39;</span></div><div class='line' id='LC69'><span class="sd">   * @var string</span></div><div class='line' id='LC70'><span class="sd">   */</span></div><div class='line' id='LC71'>&nbsp;&nbsp;<span class="k">public</span> <span class="nv">$Debugoutput</span>     <span class="o">=</span> <span class="s1">&#39;echo&#39;</span><span class="p">;</span></div><div class='line' id='LC72'><br/></div><div class='line' id='LC73'>&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC74'><span class="sd">   *  Sets VERP use on/off (default is off)</span></div><div class='line' id='LC75'><span class="sd">   *  @var bool</span></div><div class='line' id='LC76'><span class="sd">   */</span></div><div class='line' id='LC77'>&nbsp;&nbsp;<span class="k">public</span> <span class="nv">$do_verp</span> <span class="o">=</span> <span class="k">false</span><span class="p">;</span></div><div class='line' id='LC78'><br/></div><div class='line' id='LC79'>&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC80'><span class="sd">   * Sets the SMTP timeout value for reads, in seconds</span></div><div class='line' id='LC81'><span class="sd">   * @var int</span></div><div class='line' id='LC82'><span class="sd">   */</span></div><div class='line' id='LC83'>&nbsp;&nbsp;<span class="k">public</span> <span class="nv">$Timeout</span>         <span class="o">=</span> <span class="mi">15</span><span class="p">;</span></div><div class='line' id='LC84'><br/></div><div class='line' id='LC85'>&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC86'><span class="sd">   * Sets the SMTP timelimit value for reads, in seconds</span></div><div class='line' id='LC87'><span class="sd">   * @var int</span></div><div class='line' id='LC88'><span class="sd">   */</span></div><div class='line' id='LC89'>&nbsp;&nbsp;<span class="k">public</span> <span class="nv">$Timelimit</span>       <span class="o">=</span> <span class="mi">30</span><span class="p">;</span></div><div class='line' id='LC90'><br/></div><div class='line' id='LC91'>&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC92'><span class="sd">   * Sets the SMTP PHPMailer Version number</span></div><div class='line' id='LC93'><span class="sd">   * @var string</span></div><div class='line' id='LC94'><span class="sd">   */</span></div><div class='line' id='LC95'>&nbsp;&nbsp;<span class="k">public</span> <span class="nv">$Version</span>         <span class="o">=</span> <span class="s1">&#39;5.2.6&#39;</span><span class="p">;</span></div><div class='line' id='LC96'><br/></div><div class='line' id='LC97'>&nbsp;&nbsp;<span class="c1">/////////////////////////////////////////////////</span></div><div class='line' id='LC98'>&nbsp;&nbsp;<span class="c1">// PROPERTIES, PRIVATE AND PROTECTED</span></div><div class='line' id='LC99'>&nbsp;&nbsp;<span class="c1">/////////////////////////////////////////////////</span></div><div class='line' id='LC100'><br/></div><div class='line' id='LC101'>&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC102'><span class="sd">   * @var resource The socket to the server</span></div><div class='line' id='LC103'><span class="sd">   */</span></div><div class='line' id='LC104'>&nbsp;&nbsp;<span class="k">protected</span> <span class="nv">$smtp_conn</span><span class="p">;</span></div><div class='line' id='LC105'>&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC106'><span class="sd">   * @var string Error message, if any, for the last call</span></div><div class='line' id='LC107'><span class="sd">   */</span></div><div class='line' id='LC108'>&nbsp;&nbsp;<span class="k">protected</span> <span class="nv">$error</span><span class="p">;</span></div><div class='line' id='LC109'>&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC110'><span class="sd">   * @var string The reply the server sent to us for HELO</span></div><div class='line' id='LC111'><span class="sd">   */</span></div><div class='line' id='LC112'>&nbsp;&nbsp;<span class="k">protected</span> <span class="nv">$helo_rply</span><span class="p">;</span></div><div class='line' id='LC113'><br/></div><div class='line' id='LC114'>&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC115'><span class="sd">   * Outputs debugging info via user-defined method</span></div><div class='line' id='LC116'><span class="sd">   * @param string $str</span></div><div class='line' id='LC117'><span class="sd">   */</span></div><div class='line' id='LC118'>&nbsp;&nbsp;<span class="k">protected</span> <span class="k">function</span> <span class="nf">edebug</span><span class="p">(</span><span class="nv">$str</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC119'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">switch</span> <span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">Debugoutput</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC120'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">case</span> <span class="s1">&#39;error_log&#39;</span><span class="o">:</span></div><div class='line' id='LC121'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nb">error_log</span><span class="p">(</span><span class="nv">$str</span><span class="p">);</span></div><div class='line' id='LC122'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">break</span><span class="p">;</span></div><div class='line' id='LC123'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">case</span> <span class="s1">&#39;html&#39;</span><span class="o">:</span></div><div class='line' id='LC124'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">//Cleans up output a bit for a better looking display that&#39;s HTML-safe</span></div><div class='line' id='LC125'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">echo</span> <span class="nb">htmlentities</span><span class="p">(</span><span class="nb">preg_replace</span><span class="p">(</span><span class="s1">&#39;/[\r\n]+/&#39;</span><span class="p">,</span> <span class="s1">&#39;&#39;</span><span class="p">,</span> <span class="nv">$str</span><span class="p">),</span> <span class="nx">ENT_QUOTES</span><span class="p">,</span> <span class="s1">&#39;UTF-8&#39;</span><span class="p">)</span><span class="o">.</span><span class="s2">&quot;&lt;br&gt;</span><span class="se">\n</span><span class="s2">&quot;</span><span class="p">;</span></div><div class='line' id='LC126'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">break</span><span class="p">;</span></div><div class='line' id='LC127'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">case</span> <span class="s1">&#39;echo&#39;</span><span class="o">:</span></div><div class='line' id='LC128'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">default</span><span class="o">:</span></div><div class='line' id='LC129'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">//Just echoes exactly what was received</span></div><div class='line' id='LC130'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">echo</span> <span class="nv">$str</span><span class="p">;</span></div><div class='line' id='LC131'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC132'>&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC133'><br/></div><div class='line' id='LC134'>&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC135'><span class="sd">   * Initialize the class so that the data is in a known state.</span></div><div class='line' id='LC136'><span class="sd">   * @access public</span></div><div class='line' id='LC137'><span class="sd">   * @return SMTP</span></div><div class='line' id='LC138'><span class="sd">   */</span></div><div class='line' id='LC139'>&nbsp;&nbsp;<span class="k">public</span> <span class="k">function</span> <span class="nf">__construct</span><span class="p">()</span> <span class="p">{</span></div><div class='line' id='LC140'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">smtp_conn</span> <span class="o">=</span> <span class="mi">0</span><span class="p">;</span></div><div class='line' id='LC141'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">error</span> <span class="o">=</span> <span class="k">null</span><span class="p">;</span></div><div class='line' id='LC142'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">helo_rply</span> <span class="o">=</span> <span class="k">null</span><span class="p">;</span></div><div class='line' id='LC143'><br/></div><div class='line' id='LC144'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">do_debug</span> <span class="o">=</span> <span class="mi">0</span><span class="p">;</span></div><div class='line' id='LC145'>&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC146'><br/></div><div class='line' id='LC147'>&nbsp;&nbsp;<span class="c1">/////////////////////////////////////////////////</span></div><div class='line' id='LC148'>&nbsp;&nbsp;<span class="c1">// CONNECTION FUNCTIONS</span></div><div class='line' id='LC149'>&nbsp;&nbsp;<span class="c1">/////////////////////////////////////////////////</span></div><div class='line' id='LC150'><br/></div><div class='line' id='LC151'>&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC152'><span class="sd">   * Connect to an SMTP server</span></div><div class='line' id='LC153'><span class="sd">   *</span></div><div class='line' id='LC154'><span class="sd">   * SMTP CODE SUCCESS: 220</span></div><div class='line' id='LC155'><span class="sd">   * SMTP CODE FAILURE: 421</span></div><div class='line' id='LC156'><span class="sd">   * @access public</span></div><div class='line' id='LC157'><span class="sd">   * @param string $host SMTP server IP or host name</span></div><div class='line' id='LC158'><span class="sd">   * @param int $port The port number to connect to, or use the default port if not specified</span></div><div class='line' id='LC159'><span class="sd">   * @param int $timeout How long to wait for the connection to open</span></div><div class='line' id='LC160'><span class="sd">   * @param array $options An array of options compatible with stream_context_create()</span></div><div class='line' id='LC161'><span class="sd">   * @return bool</span></div><div class='line' id='LC162'><span class="sd">   */</span></div><div class='line' id='LC163'>&nbsp;&nbsp;<span class="k">public</span> <span class="k">function</span> <span class="nf">Connect</span><span class="p">(</span><span class="nv">$host</span><span class="p">,</span> <span class="nv">$port</span> <span class="o">=</span> <span class="mi">0</span><span class="p">,</span> <span class="nv">$timeout</span> <span class="o">=</span> <span class="mi">30</span><span class="p">,</span> <span class="nv">$options</span> <span class="o">=</span> <span class="k">array</span><span class="p">())</span> <span class="p">{</span></div><div class='line' id='LC164'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// Clear errors to avoid confusion</span></div><div class='line' id='LC165'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">error</span> <span class="o">=</span> <span class="k">null</span><span class="p">;</span></div><div class='line' id='LC166'><br/></div><div class='line' id='LC167'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// Make sure we are __not__ connected</span></div><div class='line' id='LC168'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span><span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">connected</span><span class="p">())</span> <span class="p">{</span></div><div class='line' id='LC169'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// Already connected, generate error</span></div><div class='line' id='LC170'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">error</span> <span class="o">=</span> <span class="k">array</span><span class="p">(</span><span class="s1">&#39;error&#39;</span> <span class="o">=&gt;</span> <span class="s1">&#39;Already connected to a server&#39;</span><span class="p">);</span></div><div class='line' id='LC171'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">return</span> <span class="k">false</span><span class="p">;</span></div><div class='line' id='LC172'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC173'><br/></div><div class='line' id='LC174'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span><span class="p">(</span><span class="k">empty</span><span class="p">(</span><span class="nv">$port</span><span class="p">))</span> <span class="p">{</span></div><div class='line' id='LC175'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$port</span> <span class="o">=</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">SMTP_PORT</span><span class="p">;</span></div><div class='line' id='LC176'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC177'><br/></div><div class='line' id='LC178'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// Connect to the SMTP server</span></div><div class='line' id='LC179'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$errno</span> <span class="o">=</span> <span class="mi">0</span><span class="p">;</span></div><div class='line' id='LC180'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$errstr</span> <span class="o">=</span> <span class="s1">&#39;&#39;</span><span class="p">;</span></div><div class='line' id='LC181'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$socket_context</span> <span class="o">=</span> <span class="nb">stream_context_create</span><span class="p">(</span><span class="nv">$options</span><span class="p">);</span></div><div class='line' id='LC182'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">//Need to suppress errors here as connection failures can be handled at a higher level</span></div><div class='line' id='LC183'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">smtp_conn</span> <span class="o">=</span> <span class="o">@</span><span class="nx">stream_socket_client</span><span class="p">(</span><span class="nv">$host</span><span class="o">.</span><span class="s2">&quot;:&quot;</span><span class="o">.</span><span class="nv">$port</span><span class="p">,</span> <span class="nv">$errno</span><span class="p">,</span> <span class="nv">$errstr</span><span class="p">,</span> <span class="nv">$timeout</span><span class="p">,</span> <span class="nx">STREAM_CLIENT_CONNECT</span><span class="p">,</span> <span class="nv">$socket_context</span><span class="p">);</span></div><div class='line' id='LC184'><br/></div><div class='line' id='LC185'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// Verify we connected properly</span></div><div class='line' id='LC186'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span><span class="p">(</span><span class="k">empty</span><span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">smtp_conn</span><span class="p">))</span> <span class="p">{</span></div><div class='line' id='LC187'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">error</span> <span class="o">=</span> <span class="k">array</span><span class="p">(</span><span class="s1">&#39;error&#39;</span> <span class="o">=&gt;</span> <span class="s1">&#39;Failed to connect to server&#39;</span><span class="p">,</span></div><div class='line' id='LC188'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="s1">&#39;errno&#39;</span> <span class="o">=&gt;</span> <span class="nv">$errno</span><span class="p">,</span></div><div class='line' id='LC189'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="s1">&#39;errstr&#39;</span> <span class="o">=&gt;</span> <span class="nv">$errstr</span><span class="p">);</span></div><div class='line' id='LC190'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span><span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">do_debug</span> <span class="o">&gt;=</span> <span class="mi">1</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC191'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">edebug</span><span class="p">(</span><span class="s1">&#39;SMTP -&gt; ERROR: &#39;</span> <span class="o">.</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">error</span><span class="p">[</span><span class="s1">&#39;error&#39;</span><span class="p">]</span> <span class="o">.</span> <span class="s2">&quot;: </span><span class="si">$errstr</span><span class="s2"> (</span><span class="si">$errno</span><span class="s2">)&quot;</span><span class="p">);</span></div><div class='line' id='LC192'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC193'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">return</span> <span class="k">false</span><span class="p">;</span></div><div class='line' id='LC194'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC195'><br/></div><div class='line' id='LC196'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// SMTP server can take longer to respond, give longer timeout for first read</span></div><div class='line' id='LC197'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// Windows does not have support for this timeout function</span></div><div class='line' id='LC198'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span><span class="p">(</span><span class="nx">substr</span><span class="p">(</span><span class="k">PHP_OS</span><span class="p">,</span> <span class="mi">0</span><span class="p">,</span> <span class="mi">3</span><span class="p">)</span> <span class="o">!=</span> <span class="s1">&#39;WIN&#39;</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC199'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$max</span> <span class="o">=</span> <span class="nb">ini_get</span><span class="p">(</span><span class="s1">&#39;max_execution_time&#39;</span><span class="p">);</span></div><div class='line' id='LC200'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span> <span class="p">(</span><span class="nv">$max</span> <span class="o">!=</span> <span class="mi">0</span> <span class="o">&amp;&amp;</span> <span class="nv">$timeout</span> <span class="o">&gt;</span> <span class="nv">$max</span><span class="p">)</span> <span class="p">{</span> <span class="c1">// Don&#39;t bother if unlimited</span></div><div class='line' id='LC201'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="o">@</span><span class="nb">set_time_limit</span><span class="p">(</span><span class="nv">$timeout</span><span class="p">);</span></div><div class='line' id='LC202'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC203'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nx">stream_set_timeout</span><span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">smtp_conn</span><span class="p">,</span> <span class="nv">$timeout</span><span class="p">,</span> <span class="mi">0</span><span class="p">);</span></div><div class='line' id='LC204'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC205'><br/></div><div class='line' id='LC206'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// get any announcement</span></div><div class='line' id='LC207'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$announce</span> <span class="o">=</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">get_lines</span><span class="p">();</span></div><div class='line' id='LC208'><br/></div><div class='line' id='LC209'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span><span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">do_debug</span> <span class="o">&gt;=</span> <span class="mi">2</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC210'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">edebug</span><span class="p">(</span><span class="s1">&#39;SMTP -&gt; FROM SERVER:&#39;</span> <span class="o">.</span> <span class="nv">$announce</span><span class="p">);</span></div><div class='line' id='LC211'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC212'><br/></div><div class='line' id='LC213'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">return</span> <span class="k">true</span><span class="p">;</span></div><div class='line' id='LC214'>&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC215'><br/></div><div class='line' id='LC216'>&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC217'><span class="sd">   * Initiate a TLS communication with the server.</span></div><div class='line' id='LC218'><span class="sd">   *</span></div><div class='line' id='LC219'><span class="sd">   * SMTP CODE 220 Ready to start TLS</span></div><div class='line' id='LC220'><span class="sd">   * SMTP CODE 501 Syntax error (no parameters allowed)</span></div><div class='line' id='LC221'><span class="sd">   * SMTP CODE 454 TLS not available due to temporary reason</span></div><div class='line' id='LC222'><span class="sd">   * @access public</span></div><div class='line' id='LC223'><span class="sd">   * @return bool success</span></div><div class='line' id='LC224'><span class="sd">   */</span></div><div class='line' id='LC225'>&nbsp;&nbsp;<span class="k">public</span> <span class="k">function</span> <span class="nf">StartTLS</span><span class="p">()</span> <span class="p">{</span></div><div class='line' id='LC226'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">error</span> <span class="o">=</span> <span class="k">null</span><span class="p">;</span> <span class="c1"># to avoid confusion</span></div><div class='line' id='LC227'><br/></div><div class='line' id='LC228'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span><span class="p">(</span><span class="o">!</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">connected</span><span class="p">())</span> <span class="p">{</span></div><div class='line' id='LC229'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">error</span> <span class="o">=</span> <span class="k">array</span><span class="p">(</span><span class="s1">&#39;error&#39;</span> <span class="o">=&gt;</span> <span class="s1">&#39;Called StartTLS() without being connected&#39;</span><span class="p">);</span></div><div class='line' id='LC230'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">return</span> <span class="k">false</span><span class="p">;</span></div><div class='line' id='LC231'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC232'><br/></div><div class='line' id='LC233'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">client_send</span><span class="p">(</span><span class="s1">&#39;STARTTLS&#39;</span> <span class="o">.</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">CRLF</span><span class="p">);</span></div><div class='line' id='LC234'><br/></div><div class='line' id='LC235'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$rply</span> <span class="o">=</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">get_lines</span><span class="p">();</span></div><div class='line' id='LC236'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$code</span> <span class="o">=</span> <span class="nx">substr</span><span class="p">(</span><span class="nv">$rply</span><span class="p">,</span> <span class="mi">0</span><span class="p">,</span> <span class="mi">3</span><span class="p">);</span></div><div class='line' id='LC237'><br/></div><div class='line' id='LC238'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span><span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">do_debug</span> <span class="o">&gt;=</span> <span class="mi">2</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC239'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">edebug</span><span class="p">(</span><span class="s1">&#39;SMTP -&gt; FROM SERVER:&#39;</span> <span class="o">.</span> <span class="nv">$rply</span><span class="p">);</span></div><div class='line' id='LC240'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC241'><br/></div><div class='line' id='LC242'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span><span class="p">(</span><span class="nv">$code</span> <span class="o">!=</span> <span class="mi">220</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC243'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">error</span> <span class="o">=</span></div><div class='line' id='LC244'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">array</span><span class="p">(</span><span class="s1">&#39;error&#39;</span>     <span class="o">=&gt;</span> <span class="s1">&#39;STARTTLS not accepted from server&#39;</span><span class="p">,</span></div><div class='line' id='LC245'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="s1">&#39;smtp_code&#39;</span> <span class="o">=&gt;</span> <span class="nv">$code</span><span class="p">,</span></div><div class='line' id='LC246'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="s1">&#39;smtp_msg&#39;</span>  <span class="o">=&gt;</span> <span class="nx">substr</span><span class="p">(</span><span class="nv">$rply</span><span class="p">,</span> <span class="mi">4</span><span class="p">));</span></div><div class='line' id='LC247'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span><span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">do_debug</span> <span class="o">&gt;=</span> <span class="mi">1</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC248'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">edebug</span><span class="p">(</span><span class="s1">&#39;SMTP -&gt; ERROR: &#39;</span> <span class="o">.</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">error</span><span class="p">[</span><span class="s1">&#39;error&#39;</span><span class="p">]</span> <span class="o">.</span> <span class="s1">&#39;: &#39;</span> <span class="o">.</span> <span class="nv">$rply</span><span class="p">);</span></div><div class='line' id='LC249'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC250'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">return</span> <span class="k">false</span><span class="p">;</span></div><div class='line' id='LC251'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC252'><br/></div><div class='line' id='LC253'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// Begin encrypted connection</span></div><div class='line' id='LC254'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span><span class="p">(</span><span class="o">!</span><span class="nx">stream_socket_enable_crypto</span><span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">smtp_conn</span><span class="p">,</span> <span class="k">true</span><span class="p">,</span> <span class="nx">STREAM_CRYPTO_METHOD_TLS_CLIENT</span><span class="p">))</span> <span class="p">{</span></div><div class='line' id='LC255'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">return</span> <span class="k">false</span><span class="p">;</span></div><div class='line' id='LC256'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC257'><br/></div><div class='line' id='LC258'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">return</span> <span class="k">true</span><span class="p">;</span></div><div class='line' id='LC259'>&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC260'><br/></div><div class='line' id='LC261'>&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC262'><span class="sd">   * Performs SMTP authentication.  Must be run after running the</span></div><div class='line' id='LC263'><span class="sd">   * Hello() method.  Returns true if successfully authenticated.</span></div><div class='line' id='LC264'><span class="sd">   * @access public</span></div><div class='line' id='LC265'><span class="sd">   * @param string $username</span></div><div class='line' id='LC266'><span class="sd">   * @param string $password</span></div><div class='line' id='LC267'><span class="sd">   * @param string $authtype</span></div><div class='line' id='LC268'><span class="sd">   * @param string $realm</span></div><div class='line' id='LC269'><span class="sd">   * @param string $workstation</span></div><div class='line' id='LC270'><span class="sd">   * @return bool</span></div><div class='line' id='LC271'><span class="sd">   */</span></div><div class='line' id='LC272'>&nbsp;&nbsp;<span class="k">public</span> <span class="k">function</span> <span class="nf">Authenticate</span><span class="p">(</span><span class="nv">$username</span><span class="p">,</span> <span class="nv">$password</span><span class="p">,</span> <span class="nv">$authtype</span><span class="o">=</span><span class="s1">&#39;LOGIN&#39;</span><span class="p">,</span> <span class="nv">$realm</span><span class="o">=</span><span class="s1">&#39;&#39;</span><span class="p">,</span> <span class="nv">$workstation</span><span class="o">=</span><span class="s1">&#39;&#39;</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC273'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span> <span class="p">(</span><span class="k">empty</span><span class="p">(</span><span class="nv">$authtype</span><span class="p">))</span> <span class="p">{</span></div><div class='line' id='LC274'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$authtype</span> <span class="o">=</span> <span class="s1">&#39;LOGIN&#39;</span><span class="p">;</span></div><div class='line' id='LC275'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC276'><br/></div><div class='line' id='LC277'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">switch</span> <span class="p">(</span><span class="nv">$authtype</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC278'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">case</span> <span class="s1">&#39;PLAIN&#39;</span><span class="o">:</span></div><div class='line' id='LC279'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// Start authentication</span></div><div class='line' id='LC280'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">client_send</span><span class="p">(</span><span class="s1">&#39;AUTH PLAIN&#39;</span> <span class="o">.</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">CRLF</span><span class="p">);</span></div><div class='line' id='LC281'><br/></div><div class='line' id='LC282'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$rply</span> <span class="o">=</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">get_lines</span><span class="p">();</span></div><div class='line' id='LC283'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$code</span> <span class="o">=</span> <span class="nx">substr</span><span class="p">(</span><span class="nv">$rply</span><span class="p">,</span> <span class="mi">0</span><span class="p">,</span> <span class="mi">3</span><span class="p">);</span></div><div class='line' id='LC284'><br/></div><div class='line' id='LC285'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span><span class="p">(</span><span class="nv">$code</span> <span class="o">!=</span> <span class="mi">334</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC286'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">error</span> <span class="o">=</span></div><div class='line' id='LC287'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">array</span><span class="p">(</span><span class="s1">&#39;error&#39;</span> <span class="o">=&gt;</span> <span class="s1">&#39;AUTH not accepted from server&#39;</span><span class="p">,</span></div><div class='line' id='LC288'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="s1">&#39;smtp_code&#39;</span> <span class="o">=&gt;</span> <span class="nv">$code</span><span class="p">,</span></div><div class='line' id='LC289'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="s1">&#39;smtp_msg&#39;</span> <span class="o">=&gt;</span> <span class="nx">substr</span><span class="p">(</span><span class="nv">$rply</span><span class="p">,</span> <span class="mi">4</span><span class="p">));</span></div><div class='line' id='LC290'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span><span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">do_debug</span> <span class="o">&gt;=</span> <span class="mi">1</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC291'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">edebug</span><span class="p">(</span><span class="s1">&#39;SMTP -&gt; ERROR: &#39;</span> <span class="o">.</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">error</span><span class="p">[</span><span class="s1">&#39;error&#39;</span><span class="p">]</span> <span class="o">.</span> <span class="s1">&#39;: &#39;</span> <span class="o">.</span> <span class="nv">$rply</span><span class="p">);</span></div><div class='line' id='LC292'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC293'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">return</span> <span class="k">false</span><span class="p">;</span></div><div class='line' id='LC294'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC295'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// Send encoded username and password</span></div><div class='line' id='LC296'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">client_send</span><span class="p">(</span><span class="nb">base64_encode</span><span class="p">(</span><span class="s2">&quot;</span><span class="se">\0</span><span class="s2">&quot;</span><span class="o">.</span><span class="nv">$username</span><span class="o">.</span><span class="s2">&quot;</span><span class="se">\0</span><span class="s2">&quot;</span><span class="o">.</span><span class="nv">$password</span><span class="p">)</span> <span class="o">.</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">CRLF</span><span class="p">);</span></div><div class='line' id='LC297'><br/></div><div class='line' id='LC298'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$rply</span> <span class="o">=</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">get_lines</span><span class="p">();</span></div><div class='line' id='LC299'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$code</span> <span class="o">=</span> <span class="nx">substr</span><span class="p">(</span><span class="nv">$rply</span><span class="p">,</span> <span class="mi">0</span><span class="p">,</span> <span class="mi">3</span><span class="p">);</span></div><div class='line' id='LC300'><br/></div><div class='line' id='LC301'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span><span class="p">(</span><span class="nv">$code</span> <span class="o">!=</span> <span class="mi">235</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC302'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">error</span> <span class="o">=</span></div><div class='line' id='LC303'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">array</span><span class="p">(</span><span class="s1">&#39;error&#39;</span> <span class="o">=&gt;</span> <span class="s1">&#39;Authentication not accepted from server&#39;</span><span class="p">,</span></div><div class='line' id='LC304'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="s1">&#39;smtp_code&#39;</span> <span class="o">=&gt;</span> <span class="nv">$code</span><span class="p">,</span></div><div class='line' id='LC305'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="s1">&#39;smtp_msg&#39;</span> <span class="o">=&gt;</span> <span class="nx">substr</span><span class="p">(</span><span class="nv">$rply</span><span class="p">,</span> <span class="mi">4</span><span class="p">));</span></div><div class='line' id='LC306'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span><span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">do_debug</span> <span class="o">&gt;=</span> <span class="mi">1</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC307'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">edebug</span><span class="p">(</span><span class="s1">&#39;SMTP -&gt; ERROR: &#39;</span> <span class="o">.</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">error</span><span class="p">[</span><span class="s1">&#39;error&#39;</span><span class="p">]</span> <span class="o">.</span> <span class="s1">&#39;: &#39;</span> <span class="o">.</span> <span class="nv">$rply</span><span class="p">);</span></div><div class='line' id='LC308'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC309'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">return</span> <span class="k">false</span><span class="p">;</span></div><div class='line' id='LC310'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC311'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">break</span><span class="p">;</span></div><div class='line' id='LC312'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">case</span> <span class="s1">&#39;LOGIN&#39;</span><span class="o">:</span></div><div class='line' id='LC313'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// Start authentication</span></div><div class='line' id='LC314'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">client_send</span><span class="p">(</span><span class="s1">&#39;AUTH LOGIN&#39;</span> <span class="o">.</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">CRLF</span><span class="p">);</span></div><div class='line' id='LC315'><br/></div><div class='line' id='LC316'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$rply</span> <span class="o">=</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">get_lines</span><span class="p">();</span></div><div class='line' id='LC317'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$code</span> <span class="o">=</span> <span class="nx">substr</span><span class="p">(</span><span class="nv">$rply</span><span class="p">,</span> <span class="mi">0</span><span class="p">,</span> <span class="mi">3</span><span class="p">);</span></div><div class='line' id='LC318'><br/></div><div class='line' id='LC319'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span><span class="p">(</span><span class="nv">$code</span> <span class="o">!=</span> <span class="mi">334</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC320'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">error</span> <span class="o">=</span></div><div class='line' id='LC321'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">array</span><span class="p">(</span><span class="s1">&#39;error&#39;</span> <span class="o">=&gt;</span> <span class="s1">&#39;AUTH not accepted from server&#39;</span><span class="p">,</span></div><div class='line' id='LC322'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="s1">&#39;smtp_code&#39;</span> <span class="o">=&gt;</span> <span class="nv">$code</span><span class="p">,</span></div><div class='line' id='LC323'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="s1">&#39;smtp_msg&#39;</span> <span class="o">=&gt;</span> <span class="nx">substr</span><span class="p">(</span><span class="nv">$rply</span><span class="p">,</span> <span class="mi">4</span><span class="p">));</span></div><div class='line' id='LC324'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span><span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">do_debug</span> <span class="o">&gt;=</span> <span class="mi">1</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC325'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">edebug</span><span class="p">(</span><span class="s1">&#39;SMTP -&gt; ERROR: &#39;</span> <span class="o">.</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">error</span><span class="p">[</span><span class="s1">&#39;error&#39;</span><span class="p">]</span> <span class="o">.</span> <span class="s1">&#39;: &#39;</span> <span class="o">.</span> <span class="nv">$rply</span><span class="p">);</span></div><div class='line' id='LC326'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC327'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">return</span> <span class="k">false</span><span class="p">;</span></div><div class='line' id='LC328'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC329'><br/></div><div class='line' id='LC330'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// Send encoded username</span></div><div class='line' id='LC331'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">client_send</span><span class="p">(</span><span class="nb">base64_encode</span><span class="p">(</span><span class="nv">$username</span><span class="p">)</span> <span class="o">.</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">CRLF</span><span class="p">);</span></div><div class='line' id='LC332'><br/></div><div class='line' id='LC333'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$rply</span> <span class="o">=</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">get_lines</span><span class="p">();</span></div><div class='line' id='LC334'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$code</span> <span class="o">=</span> <span class="nx">substr</span><span class="p">(</span><span class="nv">$rply</span><span class="p">,</span> <span class="mi">0</span><span class="p">,</span> <span class="mi">3</span><span class="p">);</span></div><div class='line' id='LC335'><br/></div><div class='line' id='LC336'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span><span class="p">(</span><span class="nv">$code</span> <span class="o">!=</span> <span class="mi">334</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC337'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">error</span> <span class="o">=</span></div><div class='line' id='LC338'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">array</span><span class="p">(</span><span class="s1">&#39;error&#39;</span> <span class="o">=&gt;</span> <span class="s1">&#39;Username not accepted from server&#39;</span><span class="p">,</span></div><div class='line' id='LC339'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="s1">&#39;smtp_code&#39;</span> <span class="o">=&gt;</span> <span class="nv">$code</span><span class="p">,</span></div><div class='line' id='LC340'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="s1">&#39;smtp_msg&#39;</span> <span class="o">=&gt;</span> <span class="nx">substr</span><span class="p">(</span><span class="nv">$rply</span><span class="p">,</span> <span class="mi">4</span><span class="p">));</span></div><div class='line' id='LC341'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span><span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">do_debug</span> <span class="o">&gt;=</span> <span class="mi">1</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC342'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">edebug</span><span class="p">(</span><span class="s1">&#39;SMTP -&gt; ERROR: &#39;</span> <span class="o">.</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">error</span><span class="p">[</span><span class="s1">&#39;error&#39;</span><span class="p">]</span> <span class="o">.</span> <span class="s1">&#39;: &#39;</span> <span class="o">.</span> <span class="nv">$rply</span><span class="p">);</span></div><div class='line' id='LC343'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC344'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">return</span> <span class="k">false</span><span class="p">;</span></div><div class='line' id='LC345'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC346'><br/></div><div class='line' id='LC347'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// Send encoded password</span></div><div class='line' id='LC348'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">client_send</span><span class="p">(</span><span class="nb">base64_encode</span><span class="p">(</span><span class="nv">$password</span><span class="p">)</span> <span class="o">.</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">CRLF</span><span class="p">);</span></div><div class='line' id='LC349'><br/></div><div class='line' id='LC350'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$rply</span> <span class="o">=</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">get_lines</span><span class="p">();</span></div><div class='line' id='LC351'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$code</span> <span class="o">=</span> <span class="nx">substr</span><span class="p">(</span><span class="nv">$rply</span><span class="p">,</span> <span class="mi">0</span><span class="p">,</span> <span class="mi">3</span><span class="p">);</span></div><div class='line' id='LC352'><br/></div><div class='line' id='LC353'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span><span class="p">(</span><span class="nv">$code</span> <span class="o">!=</span> <span class="mi">235</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC354'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">error</span> <span class="o">=</span></div><div class='line' id='LC355'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">array</span><span class="p">(</span><span class="s1">&#39;error&#39;</span> <span class="o">=&gt;</span> <span class="s1">&#39;Password not accepted from server&#39;</span><span class="p">,</span></div><div class='line' id='LC356'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="s1">&#39;smtp_code&#39;</span> <span class="o">=&gt;</span> <span class="nv">$code</span><span class="p">,</span></div><div class='line' id='LC357'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="s1">&#39;smtp_msg&#39;</span> <span class="o">=&gt;</span> <span class="nx">substr</span><span class="p">(</span><span class="nv">$rply</span><span class="p">,</span> <span class="mi">4</span><span class="p">));</span></div><div class='line' id='LC358'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span><span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">do_debug</span> <span class="o">&gt;=</span> <span class="mi">1</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC359'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">edebug</span><span class="p">(</span><span class="s1">&#39;SMTP -&gt; ERROR: &#39;</span> <span class="o">.</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">error</span><span class="p">[</span><span class="s1">&#39;error&#39;</span><span class="p">]</span> <span class="o">.</span> <span class="s1">&#39;: &#39;</span> <span class="o">.</span> <span class="nv">$rply</span><span class="p">);</span></div><div class='line' id='LC360'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC361'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">return</span> <span class="k">false</span><span class="p">;</span></div><div class='line' id='LC362'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC363'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">break</span><span class="p">;</span></div><div class='line' id='LC364'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">case</span> <span class="s1">&#39;NTLM&#39;</span><span class="o">:</span></div><div class='line' id='LC365'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="cm">/*</span></div><div class='line' id='LC366'><span class="cm">         * ntlm_sasl_client.php</span></div><div class='line' id='LC367'><span class="cm">         ** Bundled with Permission</span></div><div class='line' id='LC368'><span class="cm">         **</span></div><div class='line' id='LC369'><span class="cm">         ** How to telnet in windows: http://technet.microsoft.com/en-us/library/aa995718%28EXCHG.65%29.aspx</span></div><div class='line' id='LC370'><span class="cm">         ** PROTOCOL Documentation http://curl.haxx.se/rfc/ntlm.html#ntlmSmtpAuthentication</span></div><div class='line' id='LC371'><span class="cm">         */</span></div><div class='line' id='LC372'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">require_once</span> <span class="s1">&#39;extras/ntlm_sasl_client.php&#39;</span><span class="p">;</span></div><div class='line' id='LC373'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$temp</span> <span class="o">=</span> <span class="k">new</span> <span class="k">stdClass</span><span class="p">();</span></div><div class='line' id='LC374'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$ntlm_client</span> <span class="o">=</span> <span class="k">new</span> <span class="nx">ntlm_sasl_client_class</span><span class="p">;</span></div><div class='line' id='LC375'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span><span class="p">(</span><span class="o">!</span> <span class="nv">$ntlm_client</span><span class="o">-&gt;</span><span class="na">Initialize</span><span class="p">(</span><span class="nv">$temp</span><span class="p">)){</span><span class="c1">//let&#39;s test if every function its available</span></div><div class='line' id='LC376'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">error</span> <span class="o">=</span> <span class="k">array</span><span class="p">(</span><span class="s1">&#39;error&#39;</span> <span class="o">=&gt;</span> <span class="nv">$temp</span><span class="o">-&gt;</span><span class="na">error</span><span class="p">);</span></div><div class='line' id='LC377'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span><span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">do_debug</span> <span class="o">&gt;=</span> <span class="mi">1</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC378'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">edebug</span><span class="p">(</span><span class="s1">&#39;You need to enable some modules in your php.ini file: &#39;</span> <span class="o">.</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">error</span><span class="p">[</span><span class="s1">&#39;error&#39;</span><span class="p">]);</span></div><div class='line' id='LC379'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC380'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">return</span> <span class="k">false</span><span class="p">;</span></div><div class='line' id='LC381'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC382'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$msg1</span> <span class="o">=</span> <span class="nv">$ntlm_client</span><span class="o">-&gt;</span><span class="na">TypeMsg1</span><span class="p">(</span><span class="nv">$realm</span><span class="p">,</span> <span class="nv">$workstation</span><span class="p">);</span><span class="c1">//msg1</span></div><div class='line' id='LC383'><br/></div><div class='line' id='LC384'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">client_send</span><span class="p">(</span><span class="s1">&#39;AUTH NTLM &#39;</span> <span class="o">.</span> <span class="nb">base64_encode</span><span class="p">(</span><span class="nv">$msg1</span><span class="p">)</span> <span class="o">.</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">CRLF</span><span class="p">);</span></div><div class='line' id='LC385'><br/></div><div class='line' id='LC386'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$rply</span> <span class="o">=</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">get_lines</span><span class="p">();</span></div><div class='line' id='LC387'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$code</span> <span class="o">=</span> <span class="nx">substr</span><span class="p">(</span><span class="nv">$rply</span><span class="p">,</span> <span class="mi">0</span><span class="p">,</span> <span class="mi">3</span><span class="p">);</span></div><div class='line' id='LC388'><br/></div><div class='line' id='LC389'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span><span class="p">(</span><span class="nv">$code</span> <span class="o">!=</span> <span class="mi">334</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC390'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">error</span> <span class="o">=</span></div><div class='line' id='LC391'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">array</span><span class="p">(</span><span class="s1">&#39;error&#39;</span> <span class="o">=&gt;</span> <span class="s1">&#39;AUTH not accepted from server&#39;</span><span class="p">,</span></div><div class='line' id='LC392'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="s1">&#39;smtp_code&#39;</span> <span class="o">=&gt;</span> <span class="nv">$code</span><span class="p">,</span></div><div class='line' id='LC393'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="s1">&#39;smtp_msg&#39;</span> <span class="o">=&gt;</span> <span class="nx">substr</span><span class="p">(</span><span class="nv">$rply</span><span class="p">,</span> <span class="mi">4</span><span class="p">));</span></div><div class='line' id='LC394'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span><span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">do_debug</span> <span class="o">&gt;=</span> <span class="mi">1</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC395'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">edebug</span><span class="p">(</span><span class="s1">&#39;SMTP -&gt; ERROR: &#39;</span> <span class="o">.</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">error</span><span class="p">[</span><span class="s1">&#39;error&#39;</span><span class="p">]</span> <span class="o">.</span> <span class="s1">&#39;: &#39;</span> <span class="o">.</span> <span class="nv">$rply</span><span class="p">);</span></div><div class='line' id='LC396'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC397'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">return</span> <span class="k">false</span><span class="p">;</span></div><div class='line' id='LC398'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC399'><br/></div><div class='line' id='LC400'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$challenge</span> <span class="o">=</span> <span class="nx">substr</span><span class="p">(</span><span class="nv">$rply</span><span class="p">,</span> <span class="mi">3</span><span class="p">);</span><span class="c1">//though 0 based, there is a white space after the 3 digit number....//msg2</span></div><div class='line' id='LC401'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$challenge</span> <span class="o">=</span> <span class="nb">base64_decode</span><span class="p">(</span><span class="nv">$challenge</span><span class="p">);</span></div><div class='line' id='LC402'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$ntlm_res</span> <span class="o">=</span> <span class="nv">$ntlm_client</span><span class="o">-&gt;</span><span class="na">NTLMResponse</span><span class="p">(</span><span class="nx">substr</span><span class="p">(</span><span class="nv">$challenge</span><span class="p">,</span> <span class="mi">24</span><span class="p">,</span> <span class="mi">8</span><span class="p">),</span> <span class="nv">$password</span><span class="p">);</span></div><div class='line' id='LC403'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$msg3</span> <span class="o">=</span> <span class="nv">$ntlm_client</span><span class="o">-&gt;</span><span class="na">TypeMsg3</span><span class="p">(</span><span class="nv">$ntlm_res</span><span class="p">,</span> <span class="nv">$username</span><span class="p">,</span> <span class="nv">$realm</span><span class="p">,</span> <span class="nv">$workstation</span><span class="p">);</span><span class="c1">//msg3</span></div><div class='line' id='LC404'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// Send encoded username</span></div><div class='line' id='LC405'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">client_send</span><span class="p">(</span><span class="nb">base64_encode</span><span class="p">(</span><span class="nv">$msg3</span><span class="p">)</span> <span class="o">.</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">CRLF</span><span class="p">);</span></div><div class='line' id='LC406'><br/></div><div class='line' id='LC407'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$rply</span> <span class="o">=</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">get_lines</span><span class="p">();</span></div><div class='line' id='LC408'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$code</span> <span class="o">=</span> <span class="nx">substr</span><span class="p">(</span><span class="nv">$rply</span><span class="p">,</span> <span class="mi">0</span><span class="p">,</span> <span class="mi">3</span><span class="p">);</span></div><div class='line' id='LC409'><br/></div><div class='line' id='LC410'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span><span class="p">(</span><span class="nv">$code</span> <span class="o">!=</span> <span class="mi">235</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC411'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">error</span> <span class="o">=</span></div><div class='line' id='LC412'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">array</span><span class="p">(</span><span class="s1">&#39;error&#39;</span> <span class="o">=&gt;</span> <span class="s1">&#39;Could not authenticate&#39;</span><span class="p">,</span></div><div class='line' id='LC413'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="s1">&#39;smtp_code&#39;</span> <span class="o">=&gt;</span> <span class="nv">$code</span><span class="p">,</span></div><div class='line' id='LC414'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="s1">&#39;smtp_msg&#39;</span> <span class="o">=&gt;</span> <span class="nx">substr</span><span class="p">(</span><span class="nv">$rply</span><span class="p">,</span> <span class="mi">4</span><span class="p">));</span></div><div class='line' id='LC415'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span><span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">do_debug</span> <span class="o">&gt;=</span> <span class="mi">1</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC416'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">edebug</span><span class="p">(</span><span class="s1">&#39;SMTP -&gt; ERROR: &#39;</span> <span class="o">.</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">error</span><span class="p">[</span><span class="s1">&#39;error&#39;</span><span class="p">]</span> <span class="o">.</span> <span class="s1">&#39;: &#39;</span> <span class="o">.</span> <span class="nv">$rply</span><span class="p">);</span></div><div class='line' id='LC417'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC418'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">return</span> <span class="k">false</span><span class="p">;</span></div><div class='line' id='LC419'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC420'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">break</span><span class="p">;</span></div><div class='line' id='LC421'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">case</span> <span class="s1">&#39;CRAM-MD5&#39;</span><span class="o">:</span></div><div class='line' id='LC422'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// Start authentication</span></div><div class='line' id='LC423'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">client_send</span><span class="p">(</span><span class="s1">&#39;AUTH CRAM-MD5&#39;</span> <span class="o">.</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">CRLF</span><span class="p">);</span></div><div class='line' id='LC424'><br/></div><div class='line' id='LC425'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$rply</span> <span class="o">=</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">get_lines</span><span class="p">();</span></div><div class='line' id='LC426'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$code</span> <span class="o">=</span> <span class="nx">substr</span><span class="p">(</span><span class="nv">$rply</span><span class="p">,</span> <span class="mi">0</span><span class="p">,</span> <span class="mi">3</span><span class="p">);</span></div><div class='line' id='LC427'><br/></div><div class='line' id='LC428'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span><span class="p">(</span><span class="nv">$code</span> <span class="o">!=</span> <span class="mi">334</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC429'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">error</span> <span class="o">=</span></div><div class='line' id='LC430'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">array</span><span class="p">(</span><span class="s1">&#39;error&#39;</span> <span class="o">=&gt;</span> <span class="s1">&#39;AUTH not accepted from server&#39;</span><span class="p">,</span></div><div class='line' id='LC431'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="s1">&#39;smtp_code&#39;</span> <span class="o">=&gt;</span> <span class="nv">$code</span><span class="p">,</span></div><div class='line' id='LC432'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="s1">&#39;smtp_msg&#39;</span> <span class="o">=&gt;</span> <span class="nx">substr</span><span class="p">(</span><span class="nv">$rply</span><span class="p">,</span> <span class="mi">4</span><span class="p">));</span></div><div class='line' id='LC433'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span><span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">do_debug</span> <span class="o">&gt;=</span> <span class="mi">1</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC434'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">edebug</span><span class="p">(</span><span class="s1">&#39;SMTP -&gt; ERROR: &#39;</span> <span class="o">.</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">error</span><span class="p">[</span><span class="s1">&#39;error&#39;</span><span class="p">]</span> <span class="o">.</span> <span class="s1">&#39;: &#39;</span> <span class="o">.</span> <span class="nv">$rply</span><span class="p">);</span></div><div class='line' id='LC435'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC436'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">return</span> <span class="k">false</span><span class="p">;</span></div><div class='line' id='LC437'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC438'><br/></div><div class='line' id='LC439'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// Get the challenge</span></div><div class='line' id='LC440'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$challenge</span> <span class="o">=</span> <span class="nb">base64_decode</span><span class="p">(</span><span class="nx">substr</span><span class="p">(</span><span class="nv">$rply</span><span class="p">,</span> <span class="mi">4</span><span class="p">));</span></div><div class='line' id='LC441'><br/></div><div class='line' id='LC442'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// Build the response</span></div><div class='line' id='LC443'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$response</span> <span class="o">=</span> <span class="nv">$username</span> <span class="o">.</span> <span class="s1">&#39; &#39;</span> <span class="o">.</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">hmac</span><span class="p">(</span><span class="nv">$challenge</span><span class="p">,</span> <span class="nv">$password</span><span class="p">);</span></div><div class='line' id='LC444'><br/></div><div class='line' id='LC445'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// Send encoded credentials</span></div><div class='line' id='LC446'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">client_send</span><span class="p">(</span><span class="nb">base64_encode</span><span class="p">(</span><span class="nv">$response</span><span class="p">)</span> <span class="o">.</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">CRLF</span><span class="p">);</span></div><div class='line' id='LC447'><br/></div><div class='line' id='LC448'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$rply</span> <span class="o">=</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">get_lines</span><span class="p">();</span></div><div class='line' id='LC449'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$code</span> <span class="o">=</span> <span class="nx">substr</span><span class="p">(</span><span class="nv">$rply</span><span class="p">,</span> <span class="mi">0</span><span class="p">,</span> <span class="mi">3</span><span class="p">);</span></div><div class='line' id='LC450'><br/></div><div class='line' id='LC451'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span><span class="p">(</span><span class="nv">$code</span> <span class="o">!=</span> <span class="mi">235</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC452'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">error</span> <span class="o">=</span></div><div class='line' id='LC453'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">array</span><span class="p">(</span><span class="s1">&#39;error&#39;</span> <span class="o">=&gt;</span> <span class="s1">&#39;Credentials not accepted from server&#39;</span><span class="p">,</span></div><div class='line' id='LC454'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="s1">&#39;smtp_code&#39;</span> <span class="o">=&gt;</span> <span class="nv">$code</span><span class="p">,</span></div><div class='line' id='LC455'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="s1">&#39;smtp_msg&#39;</span> <span class="o">=&gt;</span> <span class="nx">substr</span><span class="p">(</span><span class="nv">$rply</span><span class="p">,</span> <span class="mi">4</span><span class="p">));</span></div><div class='line' id='LC456'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span><span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">do_debug</span> <span class="o">&gt;=</span> <span class="mi">1</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC457'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">edebug</span><span class="p">(</span><span class="s1">&#39;SMTP -&gt; ERROR: &#39;</span> <span class="o">.</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">error</span><span class="p">[</span><span class="s1">&#39;error&#39;</span><span class="p">]</span> <span class="o">.</span> <span class="s1">&#39;: &#39;</span> <span class="o">.</span> <span class="nv">$rply</span><span class="p">);</span></div><div class='line' id='LC458'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC459'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">return</span> <span class="k">false</span><span class="p">;</span></div><div class='line' id='LC460'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC461'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">break</span><span class="p">;</span></div><div class='line' id='LC462'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC463'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">return</span> <span class="k">true</span><span class="p">;</span></div><div class='line' id='LC464'>&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC465'><br/></div><div class='line' id='LC466'>&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC467'><span class="sd">   * Works like hash_hmac(&#39;md5&#39;, $data, $key) in case that function is not available</span></div><div class='line' id='LC468'><span class="sd">   * @access protected</span></div><div class='line' id='LC469'><span class="sd">   * @param string $data</span></div><div class='line' id='LC470'><span class="sd">   * @param string $key</span></div><div class='line' id='LC471'><span class="sd">   * @return string</span></div><div class='line' id='LC472'><span class="sd">   */</span></div><div class='line' id='LC473'>&nbsp;&nbsp;<span class="k">protected</span> <span class="k">function</span> <span class="nf">hmac</span><span class="p">(</span><span class="nv">$data</span><span class="p">,</span> <span class="nv">$key</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC474'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span> <span class="p">(</span><span class="nb">function_exists</span><span class="p">(</span><span class="s1">&#39;hash_hmac&#39;</span><span class="p">))</span> <span class="p">{</span></div><div class='line' id='LC475'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">return</span> <span class="nb">hash_hmac</span><span class="p">(</span><span class="s1">&#39;md5&#39;</span><span class="p">,</span> <span class="nv">$data</span><span class="p">,</span> <span class="nv">$key</span><span class="p">);</span></div><div class='line' id='LC476'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC477'><br/></div><div class='line' id='LC478'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// The following borrowed from http://php.net/manual/en/function.mhash.php#27225</span></div><div class='line' id='LC479'><br/></div><div class='line' id='LC480'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// RFC 2104 HMAC implementation for php.</span></div><div class='line' id='LC481'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// Creates an md5 HMAC.</span></div><div class='line' id='LC482'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// Eliminates the need to install mhash to compute a HMAC</span></div><div class='line' id='LC483'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// Hacked by Lance Rushing</span></div><div class='line' id='LC484'><br/></div><div class='line' id='LC485'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$b</span> <span class="o">=</span> <span class="mi">64</span><span class="p">;</span> <span class="c1">// byte length for md5</span></div><div class='line' id='LC486'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span> <span class="p">(</span><span class="nb">strlen</span><span class="p">(</span><span class="nv">$key</span><span class="p">)</span> <span class="o">&gt;</span> <span class="nv">$b</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC487'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$key</span> <span class="o">=</span> <span class="nb">pack</span><span class="p">(</span><span class="s1">&#39;H*&#39;</span><span class="p">,</span> <span class="nb">md5</span><span class="p">(</span><span class="nv">$key</span><span class="p">));</span></div><div class='line' id='LC488'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC489'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$key</span>  <span class="o">=</span> <span class="nb">str_pad</span><span class="p">(</span><span class="nv">$key</span><span class="p">,</span> <span class="nv">$b</span><span class="p">,</span> <span class="nb">chr</span><span class="p">(</span><span class="mh">0x00</span><span class="p">));</span></div><div class='line' id='LC490'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$ipad</span> <span class="o">=</span> <span class="nb">str_pad</span><span class="p">(</span><span class="s1">&#39;&#39;</span><span class="p">,</span> <span class="nv">$b</span><span class="p">,</span> <span class="nb">chr</span><span class="p">(</span><span class="mh">0x36</span><span class="p">));</span></div><div class='line' id='LC491'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$opad</span> <span class="o">=</span> <span class="nb">str_pad</span><span class="p">(</span><span class="s1">&#39;&#39;</span><span class="p">,</span> <span class="nv">$b</span><span class="p">,</span> <span class="nb">chr</span><span class="p">(</span><span class="mh">0x5c</span><span class="p">));</span></div><div class='line' id='LC492'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$k_ipad</span> <span class="o">=</span> <span class="nv">$key</span> <span class="o">^</span> <span class="nv">$ipad</span> <span class="p">;</span></div><div class='line' id='LC493'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$k_opad</span> <span class="o">=</span> <span class="nv">$key</span> <span class="o">^</span> <span class="nv">$opad</span><span class="p">;</span></div><div class='line' id='LC494'><br/></div><div class='line' id='LC495'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">return</span> <span class="nb">md5</span><span class="p">(</span><span class="nv">$k_opad</span>  <span class="o">.</span> <span class="nb">pack</span><span class="p">(</span><span class="s1">&#39;H*&#39;</span><span class="p">,</span> <span class="nb">md5</span><span class="p">(</span><span class="nv">$k_ipad</span> <span class="o">.</span> <span class="nv">$data</span><span class="p">)));</span></div><div class='line' id='LC496'>&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC497'><br/></div><div class='line' id='LC498'>&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC499'><span class="sd">   * Returns true if connected to a server otherwise false</span></div><div class='line' id='LC500'><span class="sd">   * @access public</span></div><div class='line' id='LC501'><span class="sd">   * @return bool</span></div><div class='line' id='LC502'><span class="sd">   */</span></div><div class='line' id='LC503'>&nbsp;&nbsp;<span class="k">public</span> <span class="k">function</span> <span class="nf">Connected</span><span class="p">()</span> <span class="p">{</span></div><div class='line' id='LC504'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span><span class="p">(</span><span class="o">!</span><span class="k">empty</span><span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">smtp_conn</span><span class="p">))</span> <span class="p">{</span></div><div class='line' id='LC505'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$sock_status</span> <span class="o">=</span> <span class="nb">stream_get_meta_data</span><span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">smtp_conn</span><span class="p">);</span></div><div class='line' id='LC506'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span><span class="p">(</span><span class="nv">$sock_status</span><span class="p">[</span><span class="s1">&#39;eof&#39;</span><span class="p">])</span> <span class="p">{</span></div><div class='line' id='LC507'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// the socket is valid but we are not connected</span></div><div class='line' id='LC508'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span><span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">do_debug</span> <span class="o">&gt;=</span> <span class="mi">1</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC509'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">edebug</span><span class="p">(</span><span class="s1">&#39;SMTP -&gt; NOTICE: EOF caught while checking if connected&#39;</span><span class="p">);</span></div><div class='line' id='LC510'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC511'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">Close</span><span class="p">();</span></div><div class='line' id='LC512'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">return</span> <span class="k">false</span><span class="p">;</span></div><div class='line' id='LC513'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC514'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">return</span> <span class="k">true</span><span class="p">;</span> <span class="c1">// everything looks good</span></div><div class='line' id='LC515'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC516'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">return</span> <span class="k">false</span><span class="p">;</span></div><div class='line' id='LC517'>&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC518'><br/></div><div class='line' id='LC519'>&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC520'><span class="sd">   * Closes the socket and cleans up the state of the class.</span></div><div class='line' id='LC521'><span class="sd">   * It is not considered good to use this function without</span></div><div class='line' id='LC522'><span class="sd">   * first trying to use QUIT.</span></div><div class='line' id='LC523'><span class="sd">   * @access public</span></div><div class='line' id='LC524'><span class="sd">   * @return void</span></div><div class='line' id='LC525'><span class="sd">   */</span></div><div class='line' id='LC526'>&nbsp;&nbsp;<span class="k">public</span> <span class="k">function</span> <span class="nf">Close</span><span class="p">()</span> <span class="p">{</span></div><div class='line' id='LC527'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">error</span> <span class="o">=</span> <span class="k">null</span><span class="p">;</span> <span class="c1">// so there is no confusion</span></div><div class='line' id='LC528'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">helo_rply</span> <span class="o">=</span> <span class="k">null</span><span class="p">;</span></div><div class='line' id='LC529'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span><span class="p">(</span><span class="o">!</span><span class="k">empty</span><span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">smtp_conn</span><span class="p">))</span> <span class="p">{</span></div><div class='line' id='LC530'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// close the connection and cleanup</span></div><div class='line' id='LC531'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nb">fclose</span><span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">smtp_conn</span><span class="p">);</span></div><div class='line' id='LC532'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">smtp_conn</span> <span class="o">=</span> <span class="mi">0</span><span class="p">;</span></div><div class='line' id='LC533'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC534'>&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC535'><br/></div><div class='line' id='LC536'>&nbsp;&nbsp;<span class="c1">/////////////////////////////////////////////////</span></div><div class='line' id='LC537'>&nbsp;&nbsp;<span class="c1">// SMTP COMMANDS</span></div><div class='line' id='LC538'>&nbsp;&nbsp;<span class="c1">/////////////////////////////////////////////////</span></div><div class='line' id='LC539'><br/></div><div class='line' id='LC540'>&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC541'><span class="sd">   * Issues a data command and sends the msg_data to the server</span></div><div class='line' id='LC542'><span class="sd">   * finializing the mail transaction. $msg_data is the message</span></div><div class='line' id='LC543'><span class="sd">   * that is to be send with the headers. Each header needs to be</span></div><div class='line' id='LC544'><span class="sd">   * on a single line followed by a &lt;CRLF&gt; with the message headers</span></div><div class='line' id='LC545'><span class="sd">   * and the message body being seperated by and additional &lt;CRLF&gt;.</span></div><div class='line' id='LC546'><span class="sd">   *</span></div><div class='line' id='LC547'><span class="sd">   * Implements rfc 821: DATA &lt;CRLF&gt;</span></div><div class='line' id='LC548'><span class="sd">   *</span></div><div class='line' id='LC549'><span class="sd">   * SMTP CODE INTERMEDIATE: 354</span></div><div class='line' id='LC550'><span class="sd">   *     [data]</span></div><div class='line' id='LC551'><span class="sd">   *     &lt;CRLF&gt;.&lt;CRLF&gt;</span></div><div class='line' id='LC552'><span class="sd">   *     SMTP CODE SUCCESS: 250</span></div><div class='line' id='LC553'><span class="sd">   *     SMTP CODE FAILURE: 552, 554, 451, 452</span></div><div class='line' id='LC554'><span class="sd">   * SMTP CODE FAILURE: 451, 554</span></div><div class='line' id='LC555'><span class="sd">   * SMTP CODE ERROR  : 500, 501, 503, 421</span></div><div class='line' id='LC556'><span class="sd">   * @access public</span></div><div class='line' id='LC557'><span class="sd">   * @param string $msg_data</span></div><div class='line' id='LC558'><span class="sd">   * @return bool</span></div><div class='line' id='LC559'><span class="sd">   */</span></div><div class='line' id='LC560'>&nbsp;&nbsp;<span class="k">public</span> <span class="k">function</span> <span class="nf">Data</span><span class="p">(</span><span class="nv">$msg_data</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC561'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">error</span> <span class="o">=</span> <span class="k">null</span><span class="p">;</span> <span class="c1">// so no confusion is caused</span></div><div class='line' id='LC562'><br/></div><div class='line' id='LC563'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span><span class="p">(</span><span class="o">!</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">connected</span><span class="p">())</span> <span class="p">{</span></div><div class='line' id='LC564'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">error</span> <span class="o">=</span> <span class="k">array</span><span class="p">(</span></div><div class='line' id='LC565'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="s1">&#39;error&#39;</span> <span class="o">=&gt;</span> <span class="s1">&#39;Called Data() without being connected&#39;</span><span class="p">);</span></div><div class='line' id='LC566'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">return</span> <span class="k">false</span><span class="p">;</span></div><div class='line' id='LC567'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC568'><br/></div><div class='line' id='LC569'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">client_send</span><span class="p">(</span><span class="s1">&#39;DATA&#39;</span> <span class="o">.</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">CRLF</span><span class="p">);</span></div><div class='line' id='LC570'><br/></div><div class='line' id='LC571'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$rply</span> <span class="o">=</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">get_lines</span><span class="p">();</span></div><div class='line' id='LC572'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$code</span> <span class="o">=</span> <span class="nx">substr</span><span class="p">(</span><span class="nv">$rply</span><span class="p">,</span> <span class="mi">0</span><span class="p">,</span> <span class="mi">3</span><span class="p">);</span></div><div class='line' id='LC573'><br/></div><div class='line' id='LC574'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span><span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">do_debug</span> <span class="o">&gt;=</span> <span class="mi">2</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC575'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">edebug</span><span class="p">(</span><span class="s1">&#39;SMTP -&gt; FROM SERVER:&#39;</span> <span class="o">.</span> <span class="nv">$rply</span><span class="p">);</span></div><div class='line' id='LC576'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC577'><br/></div><div class='line' id='LC578'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span><span class="p">(</span><span class="nv">$code</span> <span class="o">!=</span> <span class="mi">354</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC579'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">error</span> <span class="o">=</span></div><div class='line' id='LC580'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">array</span><span class="p">(</span><span class="s1">&#39;error&#39;</span> <span class="o">=&gt;</span> <span class="s1">&#39;DATA command not accepted from server&#39;</span><span class="p">,</span></div><div class='line' id='LC581'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="s1">&#39;smtp_code&#39;</span> <span class="o">=&gt;</span> <span class="nv">$code</span><span class="p">,</span></div><div class='line' id='LC582'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="s1">&#39;smtp_msg&#39;</span> <span class="o">=&gt;</span> <span class="nx">substr</span><span class="p">(</span><span class="nv">$rply</span><span class="p">,</span> <span class="mi">4</span><span class="p">));</span></div><div class='line' id='LC583'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span><span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">do_debug</span> <span class="o">&gt;=</span> <span class="mi">1</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC584'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">edebug</span><span class="p">(</span><span class="s1">&#39;SMTP -&gt; ERROR: &#39;</span> <span class="o">.</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">error</span><span class="p">[</span><span class="s1">&#39;error&#39;</span><span class="p">]</span> <span class="o">.</span> <span class="s1">&#39;: &#39;</span> <span class="o">.</span> <span class="nv">$rply</span><span class="p">);</span></div><div class='line' id='LC585'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC586'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">return</span> <span class="k">false</span><span class="p">;</span></div><div class='line' id='LC587'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC588'><br/></div><div class='line' id='LC589'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="cm">/* the server is ready to accept data!</span></div><div class='line' id='LC590'><span class="cm">     * according to rfc 821 we should not send more than 1000</span></div><div class='line' id='LC591'><span class="cm">     * including the CRLF</span></div><div class='line' id='LC592'><span class="cm">     * characters on a single line so we will break the data up</span></div><div class='line' id='LC593'><span class="cm">     * into lines by \r and/or \n then if needed we will break</span></div><div class='line' id='LC594'><span class="cm">     * each of those into smaller lines to fit within the limit.</span></div><div class='line' id='LC595'><span class="cm">     * in addition we will be looking for lines that start with</span></div><div class='line' id='LC596'><span class="cm">     * a period &#39;.&#39; and append and additional period &#39;.&#39; to that</span></div><div class='line' id='LC597'><span class="cm">     * line. NOTE: this does not count towards limit.</span></div><div class='line' id='LC598'><span class="cm">     */</span></div><div class='line' id='LC599'><br/></div><div class='line' id='LC600'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// normalize the line breaks so we know the explode works</span></div><div class='line' id='LC601'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$msg_data</span> <span class="o">=</span> <span class="nb">str_replace</span><span class="p">(</span><span class="s2">&quot;</span><span class="se">\r\n</span><span class="s2">&quot;</span><span class="p">,</span> <span class="s2">&quot;</span><span class="se">\n</span><span class="s2">&quot;</span><span class="p">,</span> <span class="nv">$msg_data</span><span class="p">);</span></div><div class='line' id='LC602'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$msg_data</span> <span class="o">=</span> <span class="nb">str_replace</span><span class="p">(</span><span class="s2">&quot;</span><span class="se">\r</span><span class="s2">&quot;</span><span class="p">,</span> <span class="s2">&quot;</span><span class="se">\n</span><span class="s2">&quot;</span><span class="p">,</span> <span class="nv">$msg_data</span><span class="p">);</span></div><div class='line' id='LC603'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$lines</span> <span class="o">=</span> <span class="nb">explode</span><span class="p">(</span><span class="s2">&quot;</span><span class="se">\n</span><span class="s2">&quot;</span><span class="p">,</span> <span class="nv">$msg_data</span><span class="p">);</span></div><div class='line' id='LC604'><br/></div><div class='line' id='LC605'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="cm">/* we need to find a good way to determine is headers are</span></div><div class='line' id='LC606'><span class="cm">     * in the msg_data or if it is a straight msg body</span></div><div class='line' id='LC607'><span class="cm">     * currently I am assuming rfc 822 definitions of msg headers</span></div><div class='line' id='LC608'><span class="cm">     * and if the first field of the first line (&#39;:&#39; sperated)</span></div><div class='line' id='LC609'><span class="cm">     * does not contain a space then it _should_ be a header</span></div><div class='line' id='LC610'><span class="cm">     * and we can process all lines before a blank &quot;&quot; line as</span></div><div class='line' id='LC611'><span class="cm">     * headers.</span></div><div class='line' id='LC612'><span class="cm">     */</span></div><div class='line' id='LC613'><br/></div><div class='line' id='LC614'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$field</span> <span class="o">=</span> <span class="nx">substr</span><span class="p">(</span><span class="nv">$lines</span><span class="p">[</span><span class="mi">0</span><span class="p">],</span> <span class="mi">0</span><span class="p">,</span> <span class="nb">strpos</span><span class="p">(</span><span class="nv">$lines</span><span class="p">[</span><span class="mi">0</span><span class="p">],</span> <span class="s1">&#39;:&#39;</span><span class="p">));</span></div><div class='line' id='LC615'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$in_headers</span> <span class="o">=</span> <span class="k">false</span><span class="p">;</span></div><div class='line' id='LC616'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span><span class="p">(</span><span class="o">!</span><span class="k">empty</span><span class="p">(</span><span class="nv">$field</span><span class="p">)</span> <span class="o">&amp;&amp;</span> <span class="o">!</span><span class="nx">strstr</span><span class="p">(</span><span class="nv">$field</span><span class="p">,</span> <span class="s1">&#39; &#39;</span><span class="p">))</span> <span class="p">{</span></div><div class='line' id='LC617'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$in_headers</span> <span class="o">=</span> <span class="k">true</span><span class="p">;</span></div><div class='line' id='LC618'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC619'><br/></div><div class='line' id='LC620'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$max_line_length</span> <span class="o">=</span> <span class="mi">998</span><span class="p">;</span> <span class="c1">// used below; set here for ease in change</span></div><div class='line' id='LC621'><br/></div><div class='line' id='LC622'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">while</span><span class="p">(</span><span class="k">list</span><span class="p">(,</span> <span class="nv">$line</span><span class="p">)</span> <span class="o">=</span> <span class="o">@</span><span class="nb">each</span><span class="p">(</span><span class="nv">$lines</span><span class="p">))</span> <span class="p">{</span></div><div class='line' id='LC623'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$lines_out</span> <span class="o">=</span> <span class="k">null</span><span class="p">;</span></div><div class='line' id='LC624'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span><span class="p">(</span><span class="nv">$line</span> <span class="o">==</span> <span class="s1">&#39;&#39;</span> <span class="o">&amp;&amp;</span> <span class="nv">$in_headers</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC625'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$in_headers</span> <span class="o">=</span> <span class="k">false</span><span class="p">;</span></div><div class='line' id='LC626'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC627'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// ok we need to break this line up into several smaller lines</span></div><div class='line' id='LC628'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">while</span><span class="p">(</span><span class="nb">strlen</span><span class="p">(</span><span class="nv">$line</span><span class="p">)</span> <span class="o">&gt;</span> <span class="nv">$max_line_length</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC629'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$pos</span> <span class="o">=</span> <span class="nb">strrpos</span><span class="p">(</span><span class="nx">substr</span><span class="p">(</span><span class="nv">$line</span><span class="p">,</span> <span class="mi">0</span><span class="p">,</span> <span class="nv">$max_line_length</span><span class="p">),</span> <span class="s1">&#39; &#39;</span><span class="p">);</span></div><div class='line' id='LC630'><br/></div><div class='line' id='LC631'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// Patch to fix DOS attack</span></div><div class='line' id='LC632'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span><span class="p">(</span><span class="o">!</span><span class="nv">$pos</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC633'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$pos</span> <span class="o">=</span> <span class="nv">$max_line_length</span> <span class="o">-</span> <span class="mi">1</span><span class="p">;</span></div><div class='line' id='LC634'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$lines_out</span><span class="p">[]</span> <span class="o">=</span> <span class="nx">substr</span><span class="p">(</span><span class="nv">$line</span><span class="p">,</span> <span class="mi">0</span><span class="p">,</span> <span class="nv">$pos</span><span class="p">);</span></div><div class='line' id='LC635'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$line</span> <span class="o">=</span> <span class="nx">substr</span><span class="p">(</span><span class="nv">$line</span><span class="p">,</span> <span class="nv">$pos</span><span class="p">);</span></div><div class='line' id='LC636'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span> <span class="k">else</span> <span class="p">{</span></div><div class='line' id='LC637'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$lines_out</span><span class="p">[]</span> <span class="o">=</span> <span class="nx">substr</span><span class="p">(</span><span class="nv">$line</span><span class="p">,</span> <span class="mi">0</span><span class="p">,</span> <span class="nv">$pos</span><span class="p">);</span></div><div class='line' id='LC638'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$line</span> <span class="o">=</span> <span class="nx">substr</span><span class="p">(</span><span class="nv">$line</span><span class="p">,</span> <span class="nv">$pos</span> <span class="o">+</span> <span class="mi">1</span><span class="p">);</span></div><div class='line' id='LC639'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC640'><br/></div><div class='line' id='LC641'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="cm">/* if processing headers add a LWSP-char to the front of new line</span></div><div class='line' id='LC642'><span class="cm">         * rfc 822 on long msg headers</span></div><div class='line' id='LC643'><span class="cm">         */</span></div><div class='line' id='LC644'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span><span class="p">(</span><span class="nv">$in_headers</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC645'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$line</span> <span class="o">=</span> <span class="s2">&quot;</span><span class="se">\t</span><span class="s2">&quot;</span> <span class="o">.</span> <span class="nv">$line</span><span class="p">;</span></div><div class='line' id='LC646'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC647'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC648'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$lines_out</span><span class="p">[]</span> <span class="o">=</span> <span class="nv">$line</span><span class="p">;</span></div><div class='line' id='LC649'><br/></div><div class='line' id='LC650'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// send the lines to the server</span></div><div class='line' id='LC651'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">while</span><span class="p">(</span><span class="k">list</span><span class="p">(,</span> <span class="nv">$line_out</span><span class="p">)</span> <span class="o">=</span> <span class="o">@</span><span class="nb">each</span><span class="p">(</span><span class="nv">$lines_out</span><span class="p">))</span> <span class="p">{</span></div><div class='line' id='LC652'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span><span class="p">(</span><span class="nb">strlen</span><span class="p">(</span><span class="nv">$line_out</span><span class="p">)</span> <span class="o">&gt;</span> <span class="mi">0</span><span class="p">)</span></div><div class='line' id='LC653'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">{</span></div><div class='line' id='LC654'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span><span class="p">(</span><span class="nx">substr</span><span class="p">(</span><span class="nv">$line_out</span><span class="p">,</span> <span class="mi">0</span><span class="p">,</span> <span class="mi">1</span><span class="p">)</span> <span class="o">==</span> <span class="s1">&#39;.&#39;</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC655'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$line_out</span> <span class="o">=</span> <span class="s1">&#39;.&#39;</span> <span class="o">.</span> <span class="nv">$line_out</span><span class="p">;</span></div><div class='line' id='LC656'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC657'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC658'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">client_send</span><span class="p">(</span><span class="nv">$line_out</span> <span class="o">.</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">CRLF</span><span class="p">);</span></div><div class='line' id='LC659'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC660'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC661'><br/></div><div class='line' id='LC662'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// message data has been sent</span></div><div class='line' id='LC663'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">client_send</span><span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">CRLF</span> <span class="o">.</span> <span class="s1">&#39;.&#39;</span> <span class="o">.</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">CRLF</span><span class="p">);</span></div><div class='line' id='LC664'><br/></div><div class='line' id='LC665'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$rply</span> <span class="o">=</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">get_lines</span><span class="p">();</span></div><div class='line' id='LC666'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$code</span> <span class="o">=</span> <span class="nx">substr</span><span class="p">(</span><span class="nv">$rply</span><span class="p">,</span> <span class="mi">0</span><span class="p">,</span> <span class="mi">3</span><span class="p">);</span></div><div class='line' id='LC667'><br/></div><div class='line' id='LC668'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span><span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">do_debug</span> <span class="o">&gt;=</span> <span class="mi">2</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC669'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">edebug</span><span class="p">(</span><span class="s1">&#39;SMTP -&gt; FROM SERVER:&#39;</span> <span class="o">.</span> <span class="nv">$rply</span><span class="p">);</span></div><div class='line' id='LC670'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC671'><br/></div><div class='line' id='LC672'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span><span class="p">(</span><span class="nv">$code</span> <span class="o">!=</span> <span class="mi">250</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC673'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">error</span> <span class="o">=</span></div><div class='line' id='LC674'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">array</span><span class="p">(</span><span class="s1">&#39;error&#39;</span> <span class="o">=&gt;</span> <span class="s1">&#39;DATA not accepted from server&#39;</span><span class="p">,</span></div><div class='line' id='LC675'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="s1">&#39;smtp_code&#39;</span> <span class="o">=&gt;</span> <span class="nv">$code</span><span class="p">,</span></div><div class='line' id='LC676'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="s1">&#39;smtp_msg&#39;</span> <span class="o">=&gt;</span> <span class="nx">substr</span><span class="p">(</span><span class="nv">$rply</span><span class="p">,</span> <span class="mi">4</span><span class="p">));</span></div><div class='line' id='LC677'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span><span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">do_debug</span> <span class="o">&gt;=</span> <span class="mi">1</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC678'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">edebug</span><span class="p">(</span><span class="s1">&#39;SMTP -&gt; ERROR: &#39;</span> <span class="o">.</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">error</span><span class="p">[</span><span class="s1">&#39;error&#39;</span><span class="p">]</span> <span class="o">.</span> <span class="s1">&#39;: &#39;</span> <span class="o">.</span> <span class="nv">$rply</span><span class="p">);</span></div><div class='line' id='LC679'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC680'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">return</span> <span class="k">false</span><span class="p">;</span></div><div class='line' id='LC681'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC682'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">return</span> <span class="k">true</span><span class="p">;</span></div><div class='line' id='LC683'>&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC684'><br/></div><div class='line' id='LC685'>&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC686'><span class="sd">   * Sends the HELO command to the smtp server.</span></div><div class='line' id='LC687'><span class="sd">   * This makes sure that we and the server are in</span></div><div class='line' id='LC688'><span class="sd">   * the same known state.</span></div><div class='line' id='LC689'><span class="sd">   *</span></div><div class='line' id='LC690'><span class="sd">   * Implements from rfc 821: HELO &lt;SP&gt; &lt;domain&gt; &lt;CRLF&gt;</span></div><div class='line' id='LC691'><span class="sd">   *</span></div><div class='line' id='LC692'><span class="sd">   * SMTP CODE SUCCESS: 250</span></div><div class='line' id='LC693'><span class="sd">   * SMTP CODE ERROR  : 500, 501, 504, 421</span></div><div class='line' id='LC694'><span class="sd">   * @access public</span></div><div class='line' id='LC695'><span class="sd">   * @param string $host</span></div><div class='line' id='LC696'><span class="sd">   * @return bool</span></div><div class='line' id='LC697'><span class="sd">   */</span></div><div class='line' id='LC698'>&nbsp;&nbsp;<span class="k">public</span> <span class="k">function</span> <span class="nf">Hello</span><span class="p">(</span><span class="nv">$host</span> <span class="o">=</span> <span class="s1">&#39;&#39;</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC699'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">error</span> <span class="o">=</span> <span class="k">null</span><span class="p">;</span> <span class="c1">// so no confusion is caused</span></div><div class='line' id='LC700'><br/></div><div class='line' id='LC701'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span><span class="p">(</span><span class="o">!</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">connected</span><span class="p">())</span> <span class="p">{</span></div><div class='line' id='LC702'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">error</span> <span class="o">=</span> <span class="k">array</span><span class="p">(</span></div><div class='line' id='LC703'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="s1">&#39;error&#39;</span> <span class="o">=&gt;</span> <span class="s1">&#39;Called Hello() without being connected&#39;</span><span class="p">);</span></div><div class='line' id='LC704'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">return</span> <span class="k">false</span><span class="p">;</span></div><div class='line' id='LC705'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC706'><br/></div><div class='line' id='LC707'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// if hostname for HELO was not specified send default</span></div><div class='line' id='LC708'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span><span class="p">(</span><span class="k">empty</span><span class="p">(</span><span class="nv">$host</span><span class="p">))</span> <span class="p">{</span></div><div class='line' id='LC709'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// determine appropriate default to send to server</span></div><div class='line' id='LC710'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$host</span> <span class="o">=</span> <span class="s1">&#39;localhost&#39;</span><span class="p">;</span></div><div class='line' id='LC711'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC712'><br/></div><div class='line' id='LC713'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// Send extended hello first (RFC 2821)</span></div><div class='line' id='LC714'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span><span class="p">(</span><span class="o">!</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">SendHello</span><span class="p">(</span><span class="s1">&#39;EHLO&#39;</span><span class="p">,</span> <span class="nv">$host</span><span class="p">))</span> <span class="p">{</span></div><div class='line' id='LC715'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span><span class="p">(</span><span class="o">!</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">SendHello</span><span class="p">(</span><span class="s1">&#39;HELO&#39;</span><span class="p">,</span> <span class="nv">$host</span><span class="p">))</span> <span class="p">{</span></div><div class='line' id='LC716'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">return</span> <span class="k">false</span><span class="p">;</span></div><div class='line' id='LC717'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC718'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC719'><br/></div><div class='line' id='LC720'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">return</span> <span class="k">true</span><span class="p">;</span></div><div class='line' id='LC721'>&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC722'><br/></div><div class='line' id='LC723'>&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC724'><span class="sd">   * Sends a HELO/EHLO command.</span></div><div class='line' id='LC725'><span class="sd">   * @access protected</span></div><div class='line' id='LC726'><span class="sd">   * @param string $hello</span></div><div class='line' id='LC727'><span class="sd">   * @param string $host</span></div><div class='line' id='LC728'><span class="sd">   * @return bool</span></div><div class='line' id='LC729'><span class="sd">   */</span></div><div class='line' id='LC730'>&nbsp;&nbsp;<span class="k">protected</span> <span class="k">function</span> <span class="nf">SendHello</span><span class="p">(</span><span class="nv">$hello</span><span class="p">,</span> <span class="nv">$host</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC731'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">client_send</span><span class="p">(</span><span class="nv">$hello</span> <span class="o">.</span> <span class="s1">&#39; &#39;</span> <span class="o">.</span> <span class="nv">$host</span> <span class="o">.</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">CRLF</span><span class="p">);</span></div><div class='line' id='LC732'><br/></div><div class='line' id='LC733'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$rply</span> <span class="o">=</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">get_lines</span><span class="p">();</span></div><div class='line' id='LC734'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$code</span> <span class="o">=</span> <span class="nx">substr</span><span class="p">(</span><span class="nv">$rply</span><span class="p">,</span> <span class="mi">0</span><span class="p">,</span> <span class="mi">3</span><span class="p">);</span></div><div class='line' id='LC735'><br/></div><div class='line' id='LC736'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span><span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">do_debug</span> <span class="o">&gt;=</span> <span class="mi">2</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC737'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">edebug</span><span class="p">(</span><span class="s1">&#39;SMTP -&gt; FROM SERVER: &#39;</span> <span class="o">.</span> <span class="nv">$rply</span><span class="p">);</span></div><div class='line' id='LC738'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC739'><br/></div><div class='line' id='LC740'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span><span class="p">(</span><span class="nv">$code</span> <span class="o">!=</span> <span class="mi">250</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC741'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">error</span> <span class="o">=</span></div><div class='line' id='LC742'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">array</span><span class="p">(</span><span class="s1">&#39;error&#39;</span> <span class="o">=&gt;</span> <span class="nv">$hello</span> <span class="o">.</span> <span class="s1">&#39; not accepted from server&#39;</span><span class="p">,</span></div><div class='line' id='LC743'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="s1">&#39;smtp_code&#39;</span> <span class="o">=&gt;</span> <span class="nv">$code</span><span class="p">,</span></div><div class='line' id='LC744'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="s1">&#39;smtp_msg&#39;</span> <span class="o">=&gt;</span> <span class="nx">substr</span><span class="p">(</span><span class="nv">$rply</span><span class="p">,</span> <span class="mi">4</span><span class="p">));</span></div><div class='line' id='LC745'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span><span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">do_debug</span> <span class="o">&gt;=</span> <span class="mi">1</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC746'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">edebug</span><span class="p">(</span><span class="s1">&#39;SMTP -&gt; ERROR: &#39;</span> <span class="o">.</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">error</span><span class="p">[</span><span class="s1">&#39;error&#39;</span><span class="p">]</span> <span class="o">.</span> <span class="s1">&#39;: &#39;</span> <span class="o">.</span> <span class="nv">$rply</span><span class="p">);</span></div><div class='line' id='LC747'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC748'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">return</span> <span class="k">false</span><span class="p">;</span></div><div class='line' id='LC749'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC750'><br/></div><div class='line' id='LC751'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">helo_rply</span> <span class="o">=</span> <span class="nv">$rply</span><span class="p">;</span></div><div class='line' id='LC752'><br/></div><div class='line' id='LC753'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">return</span> <span class="k">true</span><span class="p">;</span></div><div class='line' id='LC754'>&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC755'><br/></div><div class='line' id='LC756'>&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC757'><span class="sd">   * Starts a mail transaction from the email address specified in</span></div><div class='line' id='LC758'><span class="sd">   * $from. Returns true if successful or false otherwise. If True</span></div><div class='line' id='LC759'><span class="sd">   * the mail transaction is started and then one or more Recipient</span></div><div class='line' id='LC760'><span class="sd">   * commands may be called followed by a Data command.</span></div><div class='line' id='LC761'><span class="sd">   *</span></div><div class='line' id='LC762'><span class="sd">   * Implements rfc 821: MAIL &lt;SP&gt; FROM:&lt;reverse-path&gt; &lt;CRLF&gt;</span></div><div class='line' id='LC763'><span class="sd">   *</span></div><div class='line' id='LC764'><span class="sd">   * SMTP CODE SUCCESS: 250</span></div><div class='line' id='LC765'><span class="sd">   * SMTP CODE SUCCESS: 552, 451, 452</span></div><div class='line' id='LC766'><span class="sd">   * SMTP CODE SUCCESS: 500, 501, 421</span></div><div class='line' id='LC767'><span class="sd">   * @access public</span></div><div class='line' id='LC768'><span class="sd">   * @param string $from</span></div><div class='line' id='LC769'><span class="sd">   * @return bool</span></div><div class='line' id='LC770'><span class="sd">   */</span></div><div class='line' id='LC771'>&nbsp;&nbsp;<span class="k">public</span> <span class="k">function</span> <span class="nf">Mail</span><span class="p">(</span><span class="nv">$from</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC772'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">error</span> <span class="o">=</span> <span class="k">null</span><span class="p">;</span> <span class="c1">// so no confusion is caused</span></div><div class='line' id='LC773'><br/></div><div class='line' id='LC774'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span><span class="p">(</span><span class="o">!</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">connected</span><span class="p">())</span> <span class="p">{</span></div><div class='line' id='LC775'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">error</span> <span class="o">=</span> <span class="k">array</span><span class="p">(</span></div><div class='line' id='LC776'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="s1">&#39;error&#39;</span> <span class="o">=&gt;</span> <span class="s1">&#39;Called Mail() without being connected&#39;</span><span class="p">);</span></div><div class='line' id='LC777'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">return</span> <span class="k">false</span><span class="p">;</span></div><div class='line' id='LC778'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC779'><br/></div><div class='line' id='LC780'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$useVerp</span> <span class="o">=</span> <span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">do_verp</span> <span class="o">?</span> <span class="s1">&#39; XVERP&#39;</span> <span class="o">:</span> <span class="s1">&#39;&#39;</span><span class="p">);</span></div><div class='line' id='LC781'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">client_send</span><span class="p">(</span><span class="s1">&#39;MAIL FROM:&lt;&#39;</span> <span class="o">.</span> <span class="nv">$from</span> <span class="o">.</span> <span class="s1">&#39;&gt;&#39;</span> <span class="o">.</span> <span class="nv">$useVerp</span> <span class="o">.</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">CRLF</span><span class="p">);</span></div><div class='line' id='LC782'><br/></div><div class='line' id='LC783'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$rply</span> <span class="o">=</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">get_lines</span><span class="p">();</span></div><div class='line' id='LC784'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$code</span> <span class="o">=</span> <span class="nx">substr</span><span class="p">(</span><span class="nv">$rply</span><span class="p">,</span> <span class="mi">0</span><span class="p">,</span> <span class="mi">3</span><span class="p">);</span></div><div class='line' id='LC785'><br/></div><div class='line' id='LC786'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span><span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">do_debug</span> <span class="o">&gt;=</span> <span class="mi">2</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC787'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">edebug</span><span class="p">(</span><span class="s1">&#39;SMTP -&gt; FROM SERVER:&#39;</span> <span class="o">.</span> <span class="nv">$rply</span><span class="p">);</span></div><div class='line' id='LC788'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC789'><br/></div><div class='line' id='LC790'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span><span class="p">(</span><span class="nv">$code</span> <span class="o">!=</span> <span class="mi">250</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC791'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">error</span> <span class="o">=</span></div><div class='line' id='LC792'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">array</span><span class="p">(</span><span class="s1">&#39;error&#39;</span> <span class="o">=&gt;</span> <span class="s1">&#39;MAIL not accepted from server&#39;</span><span class="p">,</span></div><div class='line' id='LC793'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="s1">&#39;smtp_code&#39;</span> <span class="o">=&gt;</span> <span class="nv">$code</span><span class="p">,</span></div><div class='line' id='LC794'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="s1">&#39;smtp_msg&#39;</span> <span class="o">=&gt;</span> <span class="nx">substr</span><span class="p">(</span><span class="nv">$rply</span><span class="p">,</span> <span class="mi">4</span><span class="p">));</span></div><div class='line' id='LC795'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span><span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">do_debug</span> <span class="o">&gt;=</span> <span class="mi">1</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC796'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">edebug</span><span class="p">(</span><span class="s1">&#39;SMTP -&gt; ERROR: &#39;</span> <span class="o">.</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">error</span><span class="p">[</span><span class="s1">&#39;error&#39;</span><span class="p">]</span> <span class="o">.</span> <span class="s1">&#39;: &#39;</span> <span class="o">.</span> <span class="nv">$rply</span><span class="p">);</span></div><div class='line' id='LC797'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC798'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">return</span> <span class="k">false</span><span class="p">;</span></div><div class='line' id='LC799'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC800'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">return</span> <span class="k">true</span><span class="p">;</span></div><div class='line' id='LC801'>&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC802'><br/></div><div class='line' id='LC803'>&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC804'><span class="sd">   * Sends the quit command to the server and then closes the socket</span></div><div class='line' id='LC805'><span class="sd">   * if there is no error or the $close_on_error argument is true.</span></div><div class='line' id='LC806'><span class="sd">   *</span></div><div class='line' id='LC807'><span class="sd">   * Implements from rfc 821: QUIT &lt;CRLF&gt;</span></div><div class='line' id='LC808'><span class="sd">   *</span></div><div class='line' id='LC809'><span class="sd">   * SMTP CODE SUCCESS: 221</span></div><div class='line' id='LC810'><span class="sd">   * SMTP CODE ERROR  : 500</span></div><div class='line' id='LC811'><span class="sd">   * @access public</span></div><div class='line' id='LC812'><span class="sd">   * @param bool $close_on_error</span></div><div class='line' id='LC813'><span class="sd">   * @return bool</span></div><div class='line' id='LC814'><span class="sd">   */</span></div><div class='line' id='LC815'>&nbsp;&nbsp;<span class="k">public</span> <span class="k">function</span> <span class="nf">Quit</span><span class="p">(</span><span class="nv">$close_on_error</span> <span class="o">=</span> <span class="k">true</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC816'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">error</span> <span class="o">=</span> <span class="k">null</span><span class="p">;</span> <span class="c1">// so there is no confusion</span></div><div class='line' id='LC817'><br/></div><div class='line' id='LC818'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span><span class="p">(</span><span class="o">!</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">connected</span><span class="p">())</span> <span class="p">{</span></div><div class='line' id='LC819'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">error</span> <span class="o">=</span> <span class="k">array</span><span class="p">(</span></div><div class='line' id='LC820'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="s1">&#39;error&#39;</span> <span class="o">=&gt;</span> <span class="s1">&#39;Called Quit() without being connected&#39;</span><span class="p">);</span></div><div class='line' id='LC821'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">return</span> <span class="k">false</span><span class="p">;</span></div><div class='line' id='LC822'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC823'><br/></div><div class='line' id='LC824'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// send the quit command to the server</span></div><div class='line' id='LC825'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">client_send</span><span class="p">(</span><span class="s1">&#39;quit&#39;</span> <span class="o">.</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">CRLF</span><span class="p">);</span></div><div class='line' id='LC826'><br/></div><div class='line' id='LC827'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// get any good-bye messages</span></div><div class='line' id='LC828'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$byemsg</span> <span class="o">=</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">get_lines</span><span class="p">();</span></div><div class='line' id='LC829'><br/></div><div class='line' id='LC830'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span><span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">do_debug</span> <span class="o">&gt;=</span> <span class="mi">2</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC831'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">edebug</span><span class="p">(</span><span class="s1">&#39;SMTP -&gt; FROM SERVER:&#39;</span> <span class="o">.</span> <span class="nv">$byemsg</span><span class="p">);</span></div><div class='line' id='LC832'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC833'><br/></div><div class='line' id='LC834'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$rval</span> <span class="o">=</span> <span class="k">true</span><span class="p">;</span></div><div class='line' id='LC835'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$e</span> <span class="o">=</span> <span class="k">null</span><span class="p">;</span></div><div class='line' id='LC836'><br/></div><div class='line' id='LC837'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$code</span> <span class="o">=</span> <span class="nx">substr</span><span class="p">(</span><span class="nv">$byemsg</span><span class="p">,</span> <span class="mi">0</span><span class="p">,</span> <span class="mi">3</span><span class="p">);</span></div><div class='line' id='LC838'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span><span class="p">(</span><span class="nv">$code</span> <span class="o">!=</span> <span class="mi">221</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC839'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// use e as a tmp var cause Close will overwrite $this-&gt;error</span></div><div class='line' id='LC840'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$e</span> <span class="o">=</span> <span class="k">array</span><span class="p">(</span><span class="s1">&#39;error&#39;</span> <span class="o">=&gt;</span> <span class="s1">&#39;SMTP server rejected quit command&#39;</span><span class="p">,</span></div><div class='line' id='LC841'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="s1">&#39;smtp_code&#39;</span> <span class="o">=&gt;</span> <span class="nv">$code</span><span class="p">,</span></div><div class='line' id='LC842'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="s1">&#39;smtp_rply&#39;</span> <span class="o">=&gt;</span> <span class="nx">substr</span><span class="p">(</span><span class="nv">$byemsg</span><span class="p">,</span> <span class="mi">4</span><span class="p">));</span></div><div class='line' id='LC843'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$rval</span> <span class="o">=</span> <span class="k">false</span><span class="p">;</span></div><div class='line' id='LC844'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span><span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">do_debug</span> <span class="o">&gt;=</span> <span class="mi">1</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC845'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">edebug</span><span class="p">(</span><span class="s1">&#39;SMTP -&gt; ERROR: &#39;</span> <span class="o">.</span> <span class="nv">$e</span><span class="p">[</span><span class="s1">&#39;error&#39;</span><span class="p">]</span> <span class="o">.</span> <span class="s1">&#39;: &#39;</span> <span class="o">.</span> <span class="nv">$byemsg</span><span class="p">);</span></div><div class='line' id='LC846'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC847'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC848'><br/></div><div class='line' id='LC849'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span><span class="p">(</span><span class="k">empty</span><span class="p">(</span><span class="nv">$e</span><span class="p">)</span> <span class="o">||</span> <span class="nv">$close_on_error</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC850'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">Close</span><span class="p">();</span></div><div class='line' id='LC851'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC852'><br/></div><div class='line' id='LC853'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">return</span> <span class="nv">$rval</span><span class="p">;</span></div><div class='line' id='LC854'>&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC855'><br/></div><div class='line' id='LC856'>&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC857'><span class="sd">   * Sends the command RCPT to the SMTP server with the TO: argument of $to.</span></div><div class='line' id='LC858'><span class="sd">   * Returns true if the recipient was accepted false if it was rejected.</span></div><div class='line' id='LC859'><span class="sd">   *</span></div><div class='line' id='LC860'><span class="sd">   * Implements from rfc 821: RCPT &lt;SP&gt; TO:&lt;forward-path&gt; &lt;CRLF&gt;</span></div><div class='line' id='LC861'><span class="sd">   *</span></div><div class='line' id='LC862'><span class="sd">   * SMTP CODE SUCCESS: 250, 251</span></div><div class='line' id='LC863'><span class="sd">   * SMTP CODE FAILURE: 550, 551, 552, 553, 450, 451, 452</span></div><div class='line' id='LC864'><span class="sd">   * SMTP CODE ERROR  : 500, 501, 503, 421</span></div><div class='line' id='LC865'><span class="sd">   * @access public</span></div><div class='line' id='LC866'><span class="sd">   * @param string $to</span></div><div class='line' id='LC867'><span class="sd">   * @return bool</span></div><div class='line' id='LC868'><span class="sd">   */</span></div><div class='line' id='LC869'>&nbsp;&nbsp;<span class="k">public</span> <span class="k">function</span> <span class="nf">Recipient</span><span class="p">(</span><span class="nv">$to</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC870'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">error</span> <span class="o">=</span> <span class="k">null</span><span class="p">;</span> <span class="c1">// so no confusion is caused</span></div><div class='line' id='LC871'><br/></div><div class='line' id='LC872'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span><span class="p">(</span><span class="o">!</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">connected</span><span class="p">())</span> <span class="p">{</span></div><div class='line' id='LC873'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">error</span> <span class="o">=</span> <span class="k">array</span><span class="p">(</span></div><div class='line' id='LC874'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="s1">&#39;error&#39;</span> <span class="o">=&gt;</span> <span class="s1">&#39;Called Recipient() without being connected&#39;</span><span class="p">);</span></div><div class='line' id='LC875'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">return</span> <span class="k">false</span><span class="p">;</span></div><div class='line' id='LC876'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC877'><br/></div><div class='line' id='LC878'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">client_send</span><span class="p">(</span><span class="s1">&#39;RCPT TO:&lt;&#39;</span> <span class="o">.</span> <span class="nv">$to</span> <span class="o">.</span> <span class="s1">&#39;&gt;&#39;</span> <span class="o">.</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">CRLF</span><span class="p">);</span></div><div class='line' id='LC879'><br/></div><div class='line' id='LC880'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$rply</span> <span class="o">=</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">get_lines</span><span class="p">();</span></div><div class='line' id='LC881'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$code</span> <span class="o">=</span> <span class="nx">substr</span><span class="p">(</span><span class="nv">$rply</span><span class="p">,</span> <span class="mi">0</span><span class="p">,</span> <span class="mi">3</span><span class="p">);</span></div><div class='line' id='LC882'><br/></div><div class='line' id='LC883'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span><span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">do_debug</span> <span class="o">&gt;=</span> <span class="mi">2</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC884'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">edebug</span><span class="p">(</span><span class="s1">&#39;SMTP -&gt; FROM SERVER:&#39;</span> <span class="o">.</span> <span class="nv">$rply</span><span class="p">);</span></div><div class='line' id='LC885'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC886'><br/></div><div class='line' id='LC887'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span><span class="p">(</span><span class="nv">$code</span> <span class="o">!=</span> <span class="mi">250</span> <span class="o">&amp;&amp;</span> <span class="nv">$code</span> <span class="o">!=</span> <span class="mi">251</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC888'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">error</span> <span class="o">=</span></div><div class='line' id='LC889'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">array</span><span class="p">(</span><span class="s1">&#39;error&#39;</span> <span class="o">=&gt;</span> <span class="s1">&#39;RCPT not accepted from server&#39;</span><span class="p">,</span></div><div class='line' id='LC890'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="s1">&#39;smtp_code&#39;</span> <span class="o">=&gt;</span> <span class="nv">$code</span><span class="p">,</span></div><div class='line' id='LC891'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="s1">&#39;smtp_msg&#39;</span> <span class="o">=&gt;</span> <span class="nx">substr</span><span class="p">(</span><span class="nv">$rply</span><span class="p">,</span> <span class="mi">4</span><span class="p">));</span></div><div class='line' id='LC892'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span><span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">do_debug</span> <span class="o">&gt;=</span> <span class="mi">1</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC893'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">edebug</span><span class="p">(</span><span class="s1">&#39;SMTP -&gt; ERROR: &#39;</span> <span class="o">.</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">error</span><span class="p">[</span><span class="s1">&#39;error&#39;</span><span class="p">]</span> <span class="o">.</span> <span class="s1">&#39;: &#39;</span> <span class="o">.</span> <span class="nv">$rply</span><span class="p">);</span></div><div class='line' id='LC894'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC895'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">return</span> <span class="k">false</span><span class="p">;</span></div><div class='line' id='LC896'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC897'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">return</span> <span class="k">true</span><span class="p">;</span></div><div class='line' id='LC898'>&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC899'><br/></div><div class='line' id='LC900'>&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC901'><span class="sd">   * Sends the RSET command to abort and transaction that is</span></div><div class='line' id='LC902'><span class="sd">   * currently in progress. Returns true if successful false</span></div><div class='line' id='LC903'><span class="sd">   * otherwise.</span></div><div class='line' id='LC904'><span class="sd">   *</span></div><div class='line' id='LC905'><span class="sd">   * Implements rfc 821: RSET &lt;CRLF&gt;</span></div><div class='line' id='LC906'><span class="sd">   *</span></div><div class='line' id='LC907'><span class="sd">   * SMTP CODE SUCCESS: 250</span></div><div class='line' id='LC908'><span class="sd">   * SMTP CODE ERROR  : 500, 501, 504, 421</span></div><div class='line' id='LC909'><span class="sd">   * @access public</span></div><div class='line' id='LC910'><span class="sd">   * @return bool</span></div><div class='line' id='LC911'><span class="sd">   */</span></div><div class='line' id='LC912'>&nbsp;&nbsp;<span class="k">public</span> <span class="k">function</span> <span class="nf">Reset</span><span class="p">()</span> <span class="p">{</span></div><div class='line' id='LC913'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">error</span> <span class="o">=</span> <span class="k">null</span><span class="p">;</span> <span class="c1">// so no confusion is caused</span></div><div class='line' id='LC914'><br/></div><div class='line' id='LC915'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span><span class="p">(</span><span class="o">!</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">connected</span><span class="p">())</span> <span class="p">{</span></div><div class='line' id='LC916'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">error</span> <span class="o">=</span> <span class="k">array</span><span class="p">(</span><span class="s1">&#39;error&#39;</span> <span class="o">=&gt;</span> <span class="s1">&#39;Called Reset() without being connected&#39;</span><span class="p">);</span></div><div class='line' id='LC917'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">return</span> <span class="k">false</span><span class="p">;</span></div><div class='line' id='LC918'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC919'><br/></div><div class='line' id='LC920'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">client_send</span><span class="p">(</span><span class="s1">&#39;RSET&#39;</span> <span class="o">.</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">CRLF</span><span class="p">);</span></div><div class='line' id='LC921'><br/></div><div class='line' id='LC922'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$rply</span> <span class="o">=</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">get_lines</span><span class="p">();</span></div><div class='line' id='LC923'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$code</span> <span class="o">=</span> <span class="nx">substr</span><span class="p">(</span><span class="nv">$rply</span><span class="p">,</span> <span class="mi">0</span><span class="p">,</span> <span class="mi">3</span><span class="p">);</span></div><div class='line' id='LC924'><br/></div><div class='line' id='LC925'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span><span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">do_debug</span> <span class="o">&gt;=</span> <span class="mi">2</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC926'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">edebug</span><span class="p">(</span><span class="s1">&#39;SMTP -&gt; FROM SERVER:&#39;</span> <span class="o">.</span> <span class="nv">$rply</span><span class="p">);</span></div><div class='line' id='LC927'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC928'><br/></div><div class='line' id='LC929'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span><span class="p">(</span><span class="nv">$code</span> <span class="o">!=</span> <span class="mi">250</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC930'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">error</span> <span class="o">=</span></div><div class='line' id='LC931'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">array</span><span class="p">(</span><span class="s1">&#39;error&#39;</span> <span class="o">=&gt;</span> <span class="s1">&#39;RSET failed&#39;</span><span class="p">,</span></div><div class='line' id='LC932'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="s1">&#39;smtp_code&#39;</span> <span class="o">=&gt;</span> <span class="nv">$code</span><span class="p">,</span></div><div class='line' id='LC933'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="s1">&#39;smtp_msg&#39;</span> <span class="o">=&gt;</span> <span class="nx">substr</span><span class="p">(</span><span class="nv">$rply</span><span class="p">,</span> <span class="mi">4</span><span class="p">));</span></div><div class='line' id='LC934'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span><span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">do_debug</span> <span class="o">&gt;=</span> <span class="mi">1</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC935'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">edebug</span><span class="p">(</span><span class="s1">&#39;SMTP -&gt; ERROR: &#39;</span> <span class="o">.</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">error</span><span class="p">[</span><span class="s1">&#39;error&#39;</span><span class="p">]</span> <span class="o">.</span> <span class="s1">&#39;: &#39;</span> <span class="o">.</span> <span class="nv">$rply</span><span class="p">);</span></div><div class='line' id='LC936'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC937'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">return</span> <span class="k">false</span><span class="p">;</span></div><div class='line' id='LC938'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC939'><br/></div><div class='line' id='LC940'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">return</span> <span class="k">true</span><span class="p">;</span></div><div class='line' id='LC941'>&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC942'><br/></div><div class='line' id='LC943'>&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC944'><span class="sd">   * Starts a mail transaction from the email address specified in</span></div><div class='line' id='LC945'><span class="sd">   * $from. Returns true if successful or false otherwise. If True</span></div><div class='line' id='LC946'><span class="sd">   * the mail transaction is started and then one or more Recipient</span></div><div class='line' id='LC947'><span class="sd">   * commands may be called followed by a Data command. This command</span></div><div class='line' id='LC948'><span class="sd">   * will send the message to the users terminal if they are logged</span></div><div class='line' id='LC949'><span class="sd">   * in and send them an email.</span></div><div class='line' id='LC950'><span class="sd">   *</span></div><div class='line' id='LC951'><span class="sd">   * Implements rfc 821: SAML &lt;SP&gt; FROM:&lt;reverse-path&gt; &lt;CRLF&gt;</span></div><div class='line' id='LC952'><span class="sd">   *</span></div><div class='line' id='LC953'><span class="sd">   * SMTP CODE SUCCESS: 250</span></div><div class='line' id='LC954'><span class="sd">   * SMTP CODE SUCCESS: 552, 451, 452</span></div><div class='line' id='LC955'><span class="sd">   * SMTP CODE SUCCESS: 500, 501, 502, 421</span></div><div class='line' id='LC956'><span class="sd">   * @access public</span></div><div class='line' id='LC957'><span class="sd">   * @param string $from</span></div><div class='line' id='LC958'><span class="sd">   * @return bool</span></div><div class='line' id='LC959'><span class="sd">   */</span></div><div class='line' id='LC960'>&nbsp;&nbsp;<span class="k">public</span> <span class="k">function</span> <span class="nf">SendAndMail</span><span class="p">(</span><span class="nv">$from</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC961'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">error</span> <span class="o">=</span> <span class="k">null</span><span class="p">;</span> <span class="c1">// so no confusion is caused</span></div><div class='line' id='LC962'><br/></div><div class='line' id='LC963'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span><span class="p">(</span><span class="o">!</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">connected</span><span class="p">())</span> <span class="p">{</span></div><div class='line' id='LC964'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">error</span> <span class="o">=</span> <span class="k">array</span><span class="p">(</span></div><div class='line' id='LC965'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="s1">&#39;error&#39;</span> <span class="o">=&gt;</span> <span class="s1">&#39;Called SendAndMail() without being connected&#39;</span><span class="p">);</span></div><div class='line' id='LC966'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">return</span> <span class="k">false</span><span class="p">;</span></div><div class='line' id='LC967'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC968'><br/></div><div class='line' id='LC969'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">client_send</span><span class="p">(</span><span class="s1">&#39;SAML FROM:&#39;</span> <span class="o">.</span> <span class="nv">$from</span> <span class="o">.</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">CRLF</span><span class="p">);</span></div><div class='line' id='LC970'><br/></div><div class='line' id='LC971'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$rply</span> <span class="o">=</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">get_lines</span><span class="p">();</span></div><div class='line' id='LC972'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$code</span> <span class="o">=</span> <span class="nx">substr</span><span class="p">(</span><span class="nv">$rply</span><span class="p">,</span> <span class="mi">0</span><span class="p">,</span> <span class="mi">3</span><span class="p">);</span></div><div class='line' id='LC973'><br/></div><div class='line' id='LC974'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span><span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">do_debug</span> <span class="o">&gt;=</span> <span class="mi">2</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC975'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">edebug</span><span class="p">(</span><span class="s1">&#39;SMTP -&gt; FROM SERVER:&#39;</span> <span class="o">.</span> <span class="nv">$rply</span><span class="p">);</span></div><div class='line' id='LC976'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC977'><br/></div><div class='line' id='LC978'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span><span class="p">(</span><span class="nv">$code</span> <span class="o">!=</span> <span class="mi">250</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC979'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">error</span> <span class="o">=</span></div><div class='line' id='LC980'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">array</span><span class="p">(</span><span class="s1">&#39;error&#39;</span> <span class="o">=&gt;</span> <span class="s1">&#39;SAML not accepted from server&#39;</span><span class="p">,</span></div><div class='line' id='LC981'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="s1">&#39;smtp_code&#39;</span> <span class="o">=&gt;</span> <span class="nv">$code</span><span class="p">,</span></div><div class='line' id='LC982'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="s1">&#39;smtp_msg&#39;</span> <span class="o">=&gt;</span> <span class="nx">substr</span><span class="p">(</span><span class="nv">$rply</span><span class="p">,</span> <span class="mi">4</span><span class="p">));</span></div><div class='line' id='LC983'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span><span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">do_debug</span> <span class="o">&gt;=</span> <span class="mi">1</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC984'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">edebug</span><span class="p">(</span><span class="s1">&#39;SMTP -&gt; ERROR: &#39;</span> <span class="o">.</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">error</span><span class="p">[</span><span class="s1">&#39;error&#39;</span><span class="p">]</span> <span class="o">.</span> <span class="s1">&#39;: &#39;</span> <span class="o">.</span> <span class="nv">$rply</span><span class="p">);</span></div><div class='line' id='LC985'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC986'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">return</span> <span class="k">false</span><span class="p">;</span></div><div class='line' id='LC987'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC988'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">return</span> <span class="k">true</span><span class="p">;</span></div><div class='line' id='LC989'>&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC990'><br/></div><div class='line' id='LC991'>&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC992'><span class="sd">   * This is an optional command for SMTP that this class does not</span></div><div class='line' id='LC993'><span class="sd">   * support. This method is here to make the RFC821 Definition</span></div><div class='line' id='LC994'><span class="sd">   * complete for this class and __may__ be implimented in the future</span></div><div class='line' id='LC995'><span class="sd">   *</span></div><div class='line' id='LC996'><span class="sd">   * Implements from rfc 821: TURN &lt;CRLF&gt;</span></div><div class='line' id='LC997'><span class="sd">   *</span></div><div class='line' id='LC998'><span class="sd">   * SMTP CODE SUCCESS: 250</span></div><div class='line' id='LC999'><span class="sd">   * SMTP CODE FAILURE: 502</span></div><div class='line' id='LC1000'><span class="sd">   * SMTP CODE ERROR  : 500, 503</span></div><div class='line' id='LC1001'><span class="sd">   * @access public</span></div><div class='line' id='LC1002'><span class="sd">   * @return bool</span></div><div class='line' id='LC1003'><span class="sd">   */</span></div><div class='line' id='LC1004'>&nbsp;&nbsp;<span class="k">public</span> <span class="k">function</span> <span class="nf">Turn</span><span class="p">()</span> <span class="p">{</span></div><div class='line' id='LC1005'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">error</span> <span class="o">=</span> <span class="k">array</span><span class="p">(</span><span class="s1">&#39;error&#39;</span> <span class="o">=&gt;</span> <span class="s1">&#39;This method, TURN, of the SMTP &#39;</span><span class="o">.</span></div><div class='line' id='LC1006'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="s1">&#39;is not implemented&#39;</span><span class="p">);</span></div><div class='line' id='LC1007'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span><span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">do_debug</span> <span class="o">&gt;=</span> <span class="mi">1</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC1008'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">edebug</span><span class="p">(</span><span class="s1">&#39;SMTP -&gt; NOTICE: &#39;</span> <span class="o">.</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">error</span><span class="p">[</span><span class="s1">&#39;error&#39;</span><span class="p">]);</span></div><div class='line' id='LC1009'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC1010'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">return</span> <span class="k">false</span><span class="p">;</span></div><div class='line' id='LC1011'>&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC1012'><br/></div><div class='line' id='LC1013'>&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC1014'><span class="sd">  * Sends data to the server</span></div><div class='line' id='LC1015'><span class="sd">  * @param string $data</span></div><div class='line' id='LC1016'><span class="sd">  * @access public</span></div><div class='line' id='LC1017'><span class="sd">  * @return Integer number of bytes sent to the server or FALSE on error</span></div><div class='line' id='LC1018'><span class="sd">  */</span></div><div class='line' id='LC1019'>&nbsp;&nbsp;<span class="k">public</span> <span class="k">function</span> <span class="nf">client_send</span><span class="p">(</span><span class="nv">$data</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC1020'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span> <span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">do_debug</span> <span class="o">&gt;=</span> <span class="mi">1</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC1021'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">edebug</span><span class="p">(</span><span class="s2">&quot;CLIENT -&gt; SMTP: </span><span class="si">$data</span><span class="s2">&quot;</span><span class="p">);</span></div><div class='line' id='LC1022'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC1023'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">return</span> <span class="nb">fwrite</span><span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">smtp_conn</span><span class="p">,</span> <span class="nv">$data</span><span class="p">);</span></div><div class='line' id='LC1024'>&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC1025'><br/></div><div class='line' id='LC1026'>&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC1027'><span class="sd">  * Get the current error</span></div><div class='line' id='LC1028'><span class="sd">  * @access public</span></div><div class='line' id='LC1029'><span class="sd">  * @return array</span></div><div class='line' id='LC1030'><span class="sd">  */</span></div><div class='line' id='LC1031'>&nbsp;&nbsp;<span class="k">public</span> <span class="k">function</span> <span class="nf">getError</span><span class="p">()</span> <span class="p">{</span></div><div class='line' id='LC1032'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">return</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">error</span><span class="p">;</span></div><div class='line' id='LC1033'>&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC1034'><br/></div><div class='line' id='LC1035'>&nbsp;&nbsp;<span class="c1">/////////////////////////////////////////////////</span></div><div class='line' id='LC1036'>&nbsp;&nbsp;<span class="c1">// INTERNAL FUNCTIONS</span></div><div class='line' id='LC1037'>&nbsp;&nbsp;<span class="c1">/////////////////////////////////////////////////</span></div><div class='line' id='LC1038'><br/></div><div class='line' id='LC1039'>&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC1040'><span class="sd">   * Read in as many lines as possible</span></div><div class='line' id='LC1041'><span class="sd">   * either before eof or socket timeout occurs on the operation.</span></div><div class='line' id='LC1042'><span class="sd">   * With SMTP we can tell if we have more lines to read if the</span></div><div class='line' id='LC1043'><span class="sd">   * 4th character is &#39;-&#39; symbol. If it is a space then we don&#39;t</span></div><div class='line' id='LC1044'><span class="sd">   * need to read anything else.</span></div><div class='line' id='LC1045'><span class="sd">   * @access protected</span></div><div class='line' id='LC1046'><span class="sd">   * @return string</span></div><div class='line' id='LC1047'><span class="sd">   */</span></div><div class='line' id='LC1048'>&nbsp;&nbsp;<span class="k">protected</span> <span class="k">function</span> <span class="nf">get_lines</span><span class="p">()</span> <span class="p">{</span></div><div class='line' id='LC1049'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$data</span> <span class="o">=</span> <span class="s1">&#39;&#39;</span><span class="p">;</span></div><div class='line' id='LC1050'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$endtime</span> <span class="o">=</span> <span class="mi">0</span><span class="p">;</span></div><div class='line' id='LC1051'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="cm">/* If for some reason the fp is bad, don&#39;t inf loop */</span></div><div class='line' id='LC1052'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span> <span class="p">(</span><span class="o">!</span><span class="nb">is_resource</span><span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">smtp_conn</span><span class="p">))</span> <span class="p">{</span></div><div class='line' id='LC1053'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">return</span> <span class="nv">$data</span><span class="p">;</span></div><div class='line' id='LC1054'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC1055'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="nx">stream_set_timeout</span><span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">smtp_conn</span><span class="p">,</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">Timeout</span><span class="p">);</span></div><div class='line' id='LC1056'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span> <span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">Timelimit</span> <span class="o">&gt;</span> <span class="mi">0</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC1057'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$endtime</span> <span class="o">=</span> <span class="nb">time</span><span class="p">()</span> <span class="o">+</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">Timelimit</span><span class="p">;</span></div><div class='line' id='LC1058'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC1059'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">while</span><span class="p">(</span><span class="nb">is_resource</span><span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">smtp_conn</span><span class="p">)</span> <span class="o">&amp;&amp;</span> <span class="o">!</span><span class="nb">feof</span><span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">smtp_conn</span><span class="p">))</span> <span class="p">{</span></div><div class='line' id='LC1060'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$str</span> <span class="o">=</span> <span class="o">@</span><span class="nb">fgets</span><span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">smtp_conn</span><span class="p">,</span> <span class="mi">515</span><span class="p">);</span></div><div class='line' id='LC1061'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span><span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">do_debug</span> <span class="o">&gt;=</span> <span class="mi">4</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC1062'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">edebug</span><span class="p">(</span><span class="s2">&quot;SMTP -&gt; get_lines(): </span><span class="se">\$</span><span class="s2">data was </span><span class="se">\&quot;</span><span class="si">$data</span><span class="se">\&quot;</span><span class="s2">&quot;</span><span class="p">);</span></div><div class='line' id='LC1063'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">edebug</span><span class="p">(</span><span class="s2">&quot;SMTP -&gt; get_lines(): </span><span class="se">\$</span><span class="s2">str is </span><span class="se">\&quot;</span><span class="si">$str</span><span class="se">\&quot;</span><span class="s2">&quot;</span><span class="p">);</span></div><div class='line' id='LC1064'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC1065'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$data</span> <span class="o">.=</span> <span class="nv">$str</span><span class="p">;</span></div><div class='line' id='LC1066'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span><span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">do_debug</span> <span class="o">&gt;=</span> <span class="mi">4</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC1067'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">edebug</span><span class="p">(</span><span class="s2">&quot;SMTP -&gt; get_lines(): </span><span class="se">\$</span><span class="s2">data is </span><span class="se">\&quot;</span><span class="si">$data</span><span class="se">\&quot;</span><span class="s2">&quot;</span><span class="p">);</span></div><div class='line' id='LC1068'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC1069'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// if 4th character is a space, we are done reading, break the loop</span></div><div class='line' id='LC1070'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span><span class="p">(</span><span class="nx">substr</span><span class="p">(</span><span class="nv">$str</span><span class="p">,</span> <span class="mi">3</span><span class="p">,</span> <span class="mi">1</span><span class="p">)</span> <span class="o">==</span> <span class="s1">&#39; &#39;</span><span class="p">)</span> <span class="p">{</span> <span class="k">break</span><span class="p">;</span> <span class="p">}</span></div><div class='line' id='LC1071'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// Timed-out? Log and break</span></div><div class='line' id='LC1072'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$info</span> <span class="o">=</span> <span class="nb">stream_get_meta_data</span><span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">smtp_conn</span><span class="p">);</span></div><div class='line' id='LC1073'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span> <span class="p">(</span><span class="nv">$info</span><span class="p">[</span><span class="s1">&#39;timed_out&#39;</span><span class="p">])</span> <span class="p">{</span></div><div class='line' id='LC1074'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span><span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">do_debug</span> <span class="o">&gt;=</span> <span class="mi">4</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC1075'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">edebug</span><span class="p">(</span><span class="s1">&#39;SMTP -&gt; get_lines(): timed-out (&#39;</span> <span class="o">.</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">Timeout</span> <span class="o">.</span> <span class="s1">&#39; seconds)&#39;</span><span class="p">);</span></div><div class='line' id='LC1076'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC1077'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">break</span><span class="p">;</span></div><div class='line' id='LC1078'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC1079'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// Now check if reads took too long</span></div><div class='line' id='LC1080'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span> <span class="p">(</span><span class="nv">$endtime</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC1081'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span> <span class="p">(</span><span class="nb">time</span><span class="p">()</span> <span class="o">&gt;</span> <span class="nv">$endtime</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC1082'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span><span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">do_debug</span> <span class="o">&gt;=</span> <span class="mi">4</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC1083'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">edebug</span><span class="p">(</span><span class="s1">&#39;SMTP -&gt; get_lines(): timelimit reached (&#39;</span> <span class="o">.</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">Timelimit</span> <span class="o">.</span> <span class="s1">&#39; seconds)&#39;</span><span class="p">);</span></div><div class='line' id='LC1084'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC1085'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">break</span><span class="p">;</span></div><div class='line' id='LC1086'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC1087'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC1088'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC1089'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">return</span> <span class="nv">$data</span><span class="p">;</span></div><div class='line' id='LC1090'>&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC1091'><br/></div><div class='line' id='LC1092'><span class="p">}</span></div></pre></div>
          </td>
        </tr>
      </table>
  </div>

          </div>
        </div>

        <a href="#jump-to-line" rel="facebox" data-hotkey="l" class="js-jump-to-line" style="display:none">Jump to Line</a>
        <div id="jump-to-line" style="display:none">
          <h2>Jump to Line</h2>
          <form accept-charset="UTF-8" class="js-jump-to-line-form">
            <input class="textfield js-jump-to-line-field" type="text">
            <div class="full-button">
              <button type="submit" class="button">Go</button>
            </div>
          </form>
        </div>

      </div>
    </div>
</div>

<div id="js-frame-loading-template" class="frame frame-loading large-loading-area" style="display:none;">
  <img class="js-frame-loading-spinner" src="https://a248.e.akamai.net/assets.github.com/images/spinners/octocat-spinner-128.gif?1360648847" height="64" width="64">
</div>


        </div>
      </div>
      <div class="modal-backdrop"></div>
    </div>

      <div id="footer-push"></div><!-- hack for sticky footer -->
    </div><!-- end of wrapper - hack for sticky footer -->

      <!-- footer -->
      <div id="footer">
  <div class="container clearfix">

      <dl class="footer_nav">
        <dt>GitHub</dt>
        <dd><a href="/about">About us</a></dd>
        <dd><a href="/blog">Blog</a></dd>
        <dd><a href="/contact">Contact &amp; support</a></dd>
        <dd><a href="http://enterprise.github.com/">GitHub Enterprise</a></dd>
        <dd><a href="http://status.github.com/">Site status</a></dd>
      </dl>

      <dl class="footer_nav">
        <dt>Applications</dt>
        <dd><a href="http://mac.github.com/">GitHub for Mac</a></dd>
        <dd><a href="http://windows.github.com/">GitHub for Windows</a></dd>
        <dd><a href="http://eclipse.github.com/">GitHub for Eclipse</a></dd>
        <dd><a href="http://mobile.github.com/">GitHub mobile apps</a></dd>
      </dl>

      <dl class="footer_nav">
        <dt>Services</dt>
        <dd><a href="http://get.gaug.es/">Gauges: Web analytics</a></dd>
        <dd><a href="http://speakerdeck.com">Speaker Deck: Presentations</a></dd>
        <dd><a href="https://gist.github.com">Gist: Code snippets</a></dd>
        <dd><a href="http://jobs.github.com/">Job board</a></dd>
      </dl>

      <dl class="footer_nav">
        <dt>Documentation</dt>
        <dd><a href="http://help.github.com/">GitHub Help</a></dd>
        <dd><a href="http://developer.github.com/">Developer API</a></dd>
        <dd><a href="http://github.github.com/github-flavored-markdown/">GitHub Flavored Markdown</a></dd>
        <dd><a href="http://pages.github.com/">GitHub Pages</a></dd>
      </dl>

      <dl class="footer_nav">
        <dt>More</dt>
        <dd><a href="http://training.github.com/">Training</a></dd>
        <dd><a href="/edu">Students &amp; teachers</a></dd>
        <dd><a href="http://shop.github.com">The Shop</a></dd>
        <dd><a href="/plans">Plans &amp; pricing</a></dd>
        <dd><a href="http://octodex.github.com/">The Octodex</a></dd>
      </dl>

      <hr class="footer-divider">


    <p class="right">&copy; 2013 <span title="0.07402s from fe4.rs.github.com">GitHub</span>, Inc. All rights reserved.</p>
    <a class="left" href="/">
      <span class="mega-octicon octicon-mark-github"></span>
    </a>
    <ul id="legal">
        <li><a href="/site/terms">Terms of Service</a></li>
        <li><a href="/site/privacy">Privacy</a></li>
        <li><a href="/security">Security</a></li>
    </ul>

  </div><!-- /.container -->

</div><!-- /.#footer -->


    <div class="fullscreen-overlay js-fullscreen-overlay" id="fullscreen_overlay">
  <div class="fullscreen-container js-fullscreen-container">
    <div class="textarea-wrap">
      <textarea name="fullscreen-contents" id="fullscreen-contents" class="js-fullscreen-contents" placeholder="" data-suggester="fullscreen_suggester"></textarea>
          <div class="suggester-container">
              <div class="suggester fullscreen-suggester js-navigation-container" id="fullscreen_suggester"
                 data-url="/Synchro/PHPMailer/suggestions/commit">
              </div>
          </div>
    </div>
  </div>
  <div class="fullscreen-sidebar">
    <a href="#" class="exit-fullscreen js-exit-fullscreen tooltipped leftwards" title="Exit Zen Mode">
      <span class="mega-octicon octicon-screen-normal"></span>
    </a>
    <a href="#" class="theme-switcher js-theme-switcher tooltipped leftwards"
      title="Switch themes">
      <span class="octicon octicon-color-mode"></span>
    </a>
  </div>
</div>



    <div id="ajax-error-message" class="flash flash-error">
      <span class="octicon octicon-alert"></span>
      Something went wrong with that request. Please try again.
      <a href="#" class="octicon octicon-remove-close ajax-error-dismiss"></a>
    </div>

    
    <span id='server_response_time' data-time='0.07457' data-host='fe4'></span>
    
  </body>
</html>

