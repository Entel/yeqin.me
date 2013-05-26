  


<!DOCTYPE html>
<html>
  <head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# githubog: http://ogp.me/ns/fb/githubog#">
    <meta charset='utf-8'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>PHPMailer/class.phpmailer.php at master · Synchro/PHPMailer</title>
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

        <link data-pjax-transient rel='permalink' href='/Synchro/PHPMailer/blob/7f39eff84baa35f17e271968cd3340dd3721483e/class.phpmailer.php'>
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
                  <a href="/Synchro/PHPMailer/blob/5.0-dev/class.phpmailer.php" class="js-navigation-open select-menu-item-text js-select-button-text css-truncate-target" data-name="5.0-dev" rel="nofollow" title="5.0-dev">5.0-dev</a>
                </div> <!-- /.select-menu-item -->
                <div class="select-menu-item js-navigation-item ">
                  <span class="select-menu-item-icon octicon octicon-check"></span>
                  <a href="/Synchro/PHPMailer/blob/5.0-phpdocs/class.phpmailer.php" class="js-navigation-open select-menu-item-text js-select-button-text css-truncate-target" data-name="5.0-phpdocs" rel="nofollow" title="5.0-phpdocs">5.0-phpdocs</a>
                </div> <!-- /.select-menu-item -->
                <div class="select-menu-item js-navigation-item selected">
                  <span class="select-menu-item-icon octicon octicon-check"></span>
                  <a href="/Synchro/PHPMailer/blob/master/class.phpmailer.php" class="js-navigation-open select-menu-item-text js-select-button-text css-truncate-target" data-name="master" rel="nofollow" title="master">master</a>
                </div> <!-- /.select-menu-item -->
                <div class="select-menu-item js-navigation-item ">
                  <span class="select-menu-item-icon octicon octicon-check"></span>
                  <a href="/Synchro/PHPMailer/blob/phpmailer-2.0/class.phpmailer.php" class="js-navigation-open select-menu-item-text js-select-button-text css-truncate-target" data-name="phpmailer-2.0" rel="nofollow" title="phpmailer-2.0">phpmailer-2.0</a>
                </div> <!-- /.select-menu-item -->
                <div class="select-menu-item js-navigation-item ">
                  <span class="select-menu-item-icon octicon octicon-check"></span>
                  <a href="/Synchro/PHPMailer/blob/phpmailer-2.3.0-msg-limit-patch/class.phpmailer.php" class="js-navigation-open select-menu-item-text js-select-button-text css-truncate-target" data-name="phpmailer-2.3.0-msg-limit-patch" rel="nofollow" title="phpmailer-2.3.0-msg-limit-patch">phpmailer-2.3.0-msg-limit-patch</a>
                </div> <!-- /.select-menu-item -->
                <div class="select-menu-item js-navigation-item ">
                  <span class="select-menu-item-icon octicon octicon-check"></span>
                  <a href="/Synchro/PHPMailer/blob/phpmailer-5.2.0/class.phpmailer.php" class="js-navigation-open select-menu-item-text js-select-button-text css-truncate-target" data-name="phpmailer-5.2.0" rel="nofollow" title="phpmailer-5.2.0">phpmailer-5.2.0</a>
                </div> <!-- /.select-menu-item -->
                <div class="select-menu-item js-navigation-item ">
                  <span class="select-menu-item-icon octicon octicon-check"></span>
                  <a href="/Synchro/PHPMailer/blob/qmail/class.phpmailer.php" class="js-navigation-open select-menu-item-text js-select-button-text css-truncate-target" data-name="qmail" rel="nofollow" title="qmail">qmail</a>
                </div> <!-- /.select-menu-item -->
                <div class="select-menu-item js-navigation-item ">
                  <span class="select-menu-item-icon octicon octicon-check"></span>
                  <a href="/Synchro/PHPMailer/blob/vendor/class.phpmailer.php" class="js-navigation-open select-menu-item-text js-select-button-text css-truncate-target" data-name="vendor" rel="nofollow" title="vendor">vendor</a>
                </div> <!-- /.select-menu-item -->
            </div>

              <div class="select-menu-no-results">Nothing to show</div>
          </div> <!-- /.select-menu-list -->


          <div class="select-menu-list select-menu-tab-bucket js-select-menu-tab-bucket css-truncate" data-tab-filter="tags">
            <div data-filterable-for="commitish-filter-field" data-filterable-type="substring">

                <div class="select-menu-item js-navigation-item ">
                  <span class="select-menu-item-icon octicon octicon-check"></span>
                  <a href="/Synchro/PHPMailer/blob/v5.2.6/class.phpmailer.php" class="js-navigation-open select-menu-item-text js-select-button-text css-truncate-target" data-name="v5.2.6" rel="nofollow" title="v5.2.6">v5.2.6</a>
                </div> <!-- /.select-menu-item -->
                <div class="select-menu-item js-navigation-item ">
                  <span class="select-menu-item-icon octicon octicon-check"></span>
                  <a href="/Synchro/PHPMailer/blob/v5.2.5/class.phpmailer.php" class="js-navigation-open select-menu-item-text js-select-button-text css-truncate-target" data-name="v5.2.5" rel="nofollow" title="v5.2.5">v5.2.5</a>
                </div> <!-- /.select-menu-item -->
                <div class="select-menu-item js-navigation-item ">
                  <span class="select-menu-item-icon octicon octicon-check"></span>
                  <a href="/Synchro/PHPMailer/blob/phpmailer-5.1/class.phpmailer.php" class="js-navigation-open select-menu-item-text js-select-button-text css-truncate-target" data-name="phpmailer-5.1" rel="nofollow" title="phpmailer-5.1">phpmailer-5.1</a>
                </div> <!-- /.select-menu-item -->
                <div class="select-menu-item js-navigation-item ">
                  <span class="select-menu-item-icon octicon octicon-check"></span>
                  <a href="/Synchro/PHPMailer/blob/phpmailer-5.0.2/class.phpmailer.php" class="js-navigation-open select-menu-item-text js-select-button-text css-truncate-target" data-name="phpmailer-5.0.2" rel="nofollow" title="phpmailer-5.0.2">phpmailer-5.0.2</a>
                </div> <!-- /.select-menu-item -->
                <div class="select-menu-item js-navigation-item ">
                  <span class="select-menu-item-icon octicon octicon-check"></span>
                  <a href="/Synchro/PHPMailer/blob/phpmailer-5.0.0/class.phpmailer.php" class="js-navigation-open select-menu-item-text js-select-button-text css-truncate-target" data-name="phpmailer-5.0.0" rel="nofollow" title="phpmailer-5.0.0">phpmailer-5.0.0</a>
                </div> <!-- /.select-menu-item -->
                <div class="select-menu-item js-navigation-item ">
                  <span class="select-menu-item-icon octicon octicon-check"></span>
                  <a href="/Synchro/PHPMailer/blob/phpmailer-2.3.0%40186/class.phpmailer.php" class="js-navigation-open select-menu-item-text js-select-button-text css-truncate-target" data-name="phpmailer-2.3.0@186" rel="nofollow" title="phpmailer-2.3.0@186">phpmailer-2.3.0@186</a>
                </div> <!-- /.select-menu-item -->
                <div class="select-menu-item js-navigation-item ">
                  <span class="select-menu-item-icon octicon octicon-check"></span>
                  <a href="/Synchro/PHPMailer/blob/phpmailer-2.3.0/class.phpmailer.php" class="js-navigation-open select-menu-item-text js-select-button-text css-truncate-target" data-name="phpmailer-2.3.0" rel="nofollow" title="phpmailer-2.3.0">phpmailer-2.3.0</a>
                </div> <!-- /.select-menu-item -->
                <div class="select-menu-item js-navigation-item ">
                  <span class="select-menu-item-icon octicon octicon-check"></span>
                  <a href="/Synchro/PHPMailer/blob/phpmailer-2.0.3/class.phpmailer.php" class="js-navigation-open select-menu-item-text js-select-button-text css-truncate-target" data-name="phpmailer-2.0.3" rel="nofollow" title="phpmailer-2.0.3">phpmailer-2.0.3</a>
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
          


<!-- blob contrib key: blob_contributors:v21:160fb888b0c165a1be1a194c9f9bd7ea -->
<!-- blob contrib frag key: views10/v8/blob_contributors:v21:160fb888b0c165a1be1a194c9f9bd7ea -->


<div id="slider">
    <div class="frame-meta">

      <p title="This is a placeholder element" class="js-history-link-replace hidden"></p>

        <div class="breadcrumb">
          <span class='bold'><span itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb"><a href="/Synchro/PHPMailer" class="js-slide-to" data-branch="master" data-direction="back" itemscope="url"><span itemprop="title">PHPMailer</span></a></span></span><span class="separator"> / </span><strong class="final-path">class.phpmailer.php</strong> <span class="js-zeroclipboard zeroclipboard-button" data-clipboard-text="class.phpmailer.php" data-copied-hint="copied!" title="copy to clipboard"><span class="octicon octicon-clippy"></span></span>
        </div>

      <a href="/Synchro/PHPMailer/find/master" class="js-slide-to" data-hotkey="t" style="display:none">Show File Finder</a>


        
  <div class="commit file-history-tease">
    <img class="main-avatar" height="24" src="https://secure.gravatar.com/avatar/b4814d6790e91f01c77cac9d25db12b6?s=140&amp;d=https://a248.e.akamai.net/assets.github.com%2Fimages%2Fgravatars%2Fgravatar-user-420.png" width="24" />
    <span class="author"><a href="/Synchro" rel="author">Synchro</a></span>
    <time class="js-relative-date" datetime="2013-05-16T02:44:09-07:00" title="2013-05-16 02:44:09">May 16, 2013</time>
    <div class="commit-title">
        <a href="/Synchro/PHPMailer/commit/85136af8b63d7b48f5c23e9b85730529eadc2db3" class="message">Use new support for stream options on SMTP connect, add tests for it</a>
    </div>

    <div class="participation">
      <p class="quickstat"><a href="#blob_contributors_box" rel="facebox"><strong>4</strong> contributors</a></p>
          <a class="avatar tooltipped downwards" title="Synchro" href="/Synchro/PHPMailer/commits/master/class.phpmailer.php?author=Synchro"><img height="20" src="https://secure.gravatar.com/avatar/b4814d6790e91f01c77cac9d25db12b6?s=140&amp;d=https://a248.e.akamai.net/assets.github.com%2Fimages%2Fgravatars%2Fgravatar-user-420.png" width="20" /></a>
    <a class="avatar tooltipped downwards" title="bluemooninc" href="/Synchro/PHPMailer/commits/master/class.phpmailer.php?author=bluemooninc"><img height="20" src="https://secure.gravatar.com/avatar/90a05646427efe5b799b96d57c9282ae?s=140&amp;d=https://a248.e.akamai.net/assets.github.com%2Fimages%2Fgravatars%2Fgravatar-user-420.png" width="20" /></a>
    <a class="avatar tooltipped downwards" title="revaxarts" href="/Synchro/PHPMailer/commits/master/class.phpmailer.php?author=revaxarts"><img height="20" src="https://secure.gravatar.com/avatar/a61c061bd30eea2432b44d2d46eaaf6c?s=140&amp;d=https://a248.e.akamai.net/assets.github.com%2Fimages%2Fgravatars%2Fgravatar-user-420.png" width="20" /></a>
    <a class="avatar tooltipped downwards" title="jimjag" href="/Synchro/PHPMailer/commits/master/class.phpmailer.php?author=jimjag"><img height="20" src="https://secure.gravatar.com/avatar/a86203bd1e538f2a4e58eb8850fb66ef?s=140&amp;d=https://a248.e.akamai.net/assets.github.com%2Fimages%2Fgravatars%2Fgravatar-user-420.png" width="20" /></a>


    </div>
    <div id="blob_contributors_box" style="display:none">
      <h2>Users on GitHub who have contributed to this file</h2>
      <ul class="facebox-user-list">
        <li>
          <img height="24" src="https://secure.gravatar.com/avatar/b4814d6790e91f01c77cac9d25db12b6?s=140&amp;d=https://a248.e.akamai.net/assets.github.com%2Fimages%2Fgravatars%2Fgravatar-user-420.png" width="24" />
          <a href="/Synchro">Synchro</a>
        </li>
        <li>
          <img height="24" src="https://secure.gravatar.com/avatar/90a05646427efe5b799b96d57c9282ae?s=140&amp;d=https://a248.e.akamai.net/assets.github.com%2Fimages%2Fgravatars%2Fgravatar-user-420.png" width="24" />
          <a href="/bluemooninc">bluemooninc</a>
        </li>
        <li>
          <img height="24" src="https://secure.gravatar.com/avatar/a61c061bd30eea2432b44d2d46eaaf6c?s=140&amp;d=https://a248.e.akamai.net/assets.github.com%2Fimages%2Fgravatars%2Fgravatar-user-420.png" width="24" />
          <a href="/revaxarts">revaxarts</a>
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
      <div class="frame" data-permalink-url="/Synchro/PHPMailer/blob/7f39eff84baa35f17e271968cd3340dd3721483e/class.phpmailer.php" data-title="PHPMailer/class.phpmailer.php at master · Synchro/PHPMailer · GitHub" data-type="blob">

        <div id="files" class="bubble">
          <div class="file">
            <div class="meta">
              <div class="info">
                <span class="icon"><b class="octicon octicon-file-text"></b></span>
                <span class="mode" title="File Mode">file</span>
                  <span>2935 lines (2700 sloc)</span>
                <span>95.557 kb</span>
              </div>
              <div class="actions">
                <div class="button-group">
                        <a class="minibutton tooltipped leftwards"
                           title="Clicking this button will automatically fork this project so you can edit the file"
                           href="/Synchro/PHPMailer/edit/master/class.phpmailer.php"
                           data-method="post" rel="nofollow">Edit</a>
                  <a href="/Synchro/PHPMailer/raw/master/class.phpmailer.php" class="button minibutton " id="raw-url">Raw</a>
                    <a href="/Synchro/PHPMailer/blame/master/class.phpmailer.php" class="button minibutton ">Blame</a>
                  <a href="/Synchro/PHPMailer/commits/master/class.phpmailer.php" class="button minibutton " rel="nofollow">History</a>
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
<span id="L1093" rel="#L1093">1093</span>
<span id="L1094" rel="#L1094">1094</span>
<span id="L1095" rel="#L1095">1095</span>
<span id="L1096" rel="#L1096">1096</span>
<span id="L1097" rel="#L1097">1097</span>
<span id="L1098" rel="#L1098">1098</span>
<span id="L1099" rel="#L1099">1099</span>
<span id="L1100" rel="#L1100">1100</span>
<span id="L1101" rel="#L1101">1101</span>
<span id="L1102" rel="#L1102">1102</span>
<span id="L1103" rel="#L1103">1103</span>
<span id="L1104" rel="#L1104">1104</span>
<span id="L1105" rel="#L1105">1105</span>
<span id="L1106" rel="#L1106">1106</span>
<span id="L1107" rel="#L1107">1107</span>
<span id="L1108" rel="#L1108">1108</span>
<span id="L1109" rel="#L1109">1109</span>
<span id="L1110" rel="#L1110">1110</span>
<span id="L1111" rel="#L1111">1111</span>
<span id="L1112" rel="#L1112">1112</span>
<span id="L1113" rel="#L1113">1113</span>
<span id="L1114" rel="#L1114">1114</span>
<span id="L1115" rel="#L1115">1115</span>
<span id="L1116" rel="#L1116">1116</span>
<span id="L1117" rel="#L1117">1117</span>
<span id="L1118" rel="#L1118">1118</span>
<span id="L1119" rel="#L1119">1119</span>
<span id="L1120" rel="#L1120">1120</span>
<span id="L1121" rel="#L1121">1121</span>
<span id="L1122" rel="#L1122">1122</span>
<span id="L1123" rel="#L1123">1123</span>
<span id="L1124" rel="#L1124">1124</span>
<span id="L1125" rel="#L1125">1125</span>
<span id="L1126" rel="#L1126">1126</span>
<span id="L1127" rel="#L1127">1127</span>
<span id="L1128" rel="#L1128">1128</span>
<span id="L1129" rel="#L1129">1129</span>
<span id="L1130" rel="#L1130">1130</span>
<span id="L1131" rel="#L1131">1131</span>
<span id="L1132" rel="#L1132">1132</span>
<span id="L1133" rel="#L1133">1133</span>
<span id="L1134" rel="#L1134">1134</span>
<span id="L1135" rel="#L1135">1135</span>
<span id="L1136" rel="#L1136">1136</span>
<span id="L1137" rel="#L1137">1137</span>
<span id="L1138" rel="#L1138">1138</span>
<span id="L1139" rel="#L1139">1139</span>
<span id="L1140" rel="#L1140">1140</span>
<span id="L1141" rel="#L1141">1141</span>
<span id="L1142" rel="#L1142">1142</span>
<span id="L1143" rel="#L1143">1143</span>
<span id="L1144" rel="#L1144">1144</span>
<span id="L1145" rel="#L1145">1145</span>
<span id="L1146" rel="#L1146">1146</span>
<span id="L1147" rel="#L1147">1147</span>
<span id="L1148" rel="#L1148">1148</span>
<span id="L1149" rel="#L1149">1149</span>
<span id="L1150" rel="#L1150">1150</span>
<span id="L1151" rel="#L1151">1151</span>
<span id="L1152" rel="#L1152">1152</span>
<span id="L1153" rel="#L1153">1153</span>
<span id="L1154" rel="#L1154">1154</span>
<span id="L1155" rel="#L1155">1155</span>
<span id="L1156" rel="#L1156">1156</span>
<span id="L1157" rel="#L1157">1157</span>
<span id="L1158" rel="#L1158">1158</span>
<span id="L1159" rel="#L1159">1159</span>
<span id="L1160" rel="#L1160">1160</span>
<span id="L1161" rel="#L1161">1161</span>
<span id="L1162" rel="#L1162">1162</span>
<span id="L1163" rel="#L1163">1163</span>
<span id="L1164" rel="#L1164">1164</span>
<span id="L1165" rel="#L1165">1165</span>
<span id="L1166" rel="#L1166">1166</span>
<span id="L1167" rel="#L1167">1167</span>
<span id="L1168" rel="#L1168">1168</span>
<span id="L1169" rel="#L1169">1169</span>
<span id="L1170" rel="#L1170">1170</span>
<span id="L1171" rel="#L1171">1171</span>
<span id="L1172" rel="#L1172">1172</span>
<span id="L1173" rel="#L1173">1173</span>
<span id="L1174" rel="#L1174">1174</span>
<span id="L1175" rel="#L1175">1175</span>
<span id="L1176" rel="#L1176">1176</span>
<span id="L1177" rel="#L1177">1177</span>
<span id="L1178" rel="#L1178">1178</span>
<span id="L1179" rel="#L1179">1179</span>
<span id="L1180" rel="#L1180">1180</span>
<span id="L1181" rel="#L1181">1181</span>
<span id="L1182" rel="#L1182">1182</span>
<span id="L1183" rel="#L1183">1183</span>
<span id="L1184" rel="#L1184">1184</span>
<span id="L1185" rel="#L1185">1185</span>
<span id="L1186" rel="#L1186">1186</span>
<span id="L1187" rel="#L1187">1187</span>
<span id="L1188" rel="#L1188">1188</span>
<span id="L1189" rel="#L1189">1189</span>
<span id="L1190" rel="#L1190">1190</span>
<span id="L1191" rel="#L1191">1191</span>
<span id="L1192" rel="#L1192">1192</span>
<span id="L1193" rel="#L1193">1193</span>
<span id="L1194" rel="#L1194">1194</span>
<span id="L1195" rel="#L1195">1195</span>
<span id="L1196" rel="#L1196">1196</span>
<span id="L1197" rel="#L1197">1197</span>
<span id="L1198" rel="#L1198">1198</span>
<span id="L1199" rel="#L1199">1199</span>
<span id="L1200" rel="#L1200">1200</span>
<span id="L1201" rel="#L1201">1201</span>
<span id="L1202" rel="#L1202">1202</span>
<span id="L1203" rel="#L1203">1203</span>
<span id="L1204" rel="#L1204">1204</span>
<span id="L1205" rel="#L1205">1205</span>
<span id="L1206" rel="#L1206">1206</span>
<span id="L1207" rel="#L1207">1207</span>
<span id="L1208" rel="#L1208">1208</span>
<span id="L1209" rel="#L1209">1209</span>
<span id="L1210" rel="#L1210">1210</span>
<span id="L1211" rel="#L1211">1211</span>
<span id="L1212" rel="#L1212">1212</span>
<span id="L1213" rel="#L1213">1213</span>
<span id="L1214" rel="#L1214">1214</span>
<span id="L1215" rel="#L1215">1215</span>
<span id="L1216" rel="#L1216">1216</span>
<span id="L1217" rel="#L1217">1217</span>
<span id="L1218" rel="#L1218">1218</span>
<span id="L1219" rel="#L1219">1219</span>
<span id="L1220" rel="#L1220">1220</span>
<span id="L1221" rel="#L1221">1221</span>
<span id="L1222" rel="#L1222">1222</span>
<span id="L1223" rel="#L1223">1223</span>
<span id="L1224" rel="#L1224">1224</span>
<span id="L1225" rel="#L1225">1225</span>
<span id="L1226" rel="#L1226">1226</span>
<span id="L1227" rel="#L1227">1227</span>
<span id="L1228" rel="#L1228">1228</span>
<span id="L1229" rel="#L1229">1229</span>
<span id="L1230" rel="#L1230">1230</span>
<span id="L1231" rel="#L1231">1231</span>
<span id="L1232" rel="#L1232">1232</span>
<span id="L1233" rel="#L1233">1233</span>
<span id="L1234" rel="#L1234">1234</span>
<span id="L1235" rel="#L1235">1235</span>
<span id="L1236" rel="#L1236">1236</span>
<span id="L1237" rel="#L1237">1237</span>
<span id="L1238" rel="#L1238">1238</span>
<span id="L1239" rel="#L1239">1239</span>
<span id="L1240" rel="#L1240">1240</span>
<span id="L1241" rel="#L1241">1241</span>
<span id="L1242" rel="#L1242">1242</span>
<span id="L1243" rel="#L1243">1243</span>
<span id="L1244" rel="#L1244">1244</span>
<span id="L1245" rel="#L1245">1245</span>
<span id="L1246" rel="#L1246">1246</span>
<span id="L1247" rel="#L1247">1247</span>
<span id="L1248" rel="#L1248">1248</span>
<span id="L1249" rel="#L1249">1249</span>
<span id="L1250" rel="#L1250">1250</span>
<span id="L1251" rel="#L1251">1251</span>
<span id="L1252" rel="#L1252">1252</span>
<span id="L1253" rel="#L1253">1253</span>
<span id="L1254" rel="#L1254">1254</span>
<span id="L1255" rel="#L1255">1255</span>
<span id="L1256" rel="#L1256">1256</span>
<span id="L1257" rel="#L1257">1257</span>
<span id="L1258" rel="#L1258">1258</span>
<span id="L1259" rel="#L1259">1259</span>
<span id="L1260" rel="#L1260">1260</span>
<span id="L1261" rel="#L1261">1261</span>
<span id="L1262" rel="#L1262">1262</span>
<span id="L1263" rel="#L1263">1263</span>
<span id="L1264" rel="#L1264">1264</span>
<span id="L1265" rel="#L1265">1265</span>
<span id="L1266" rel="#L1266">1266</span>
<span id="L1267" rel="#L1267">1267</span>
<span id="L1268" rel="#L1268">1268</span>
<span id="L1269" rel="#L1269">1269</span>
<span id="L1270" rel="#L1270">1270</span>
<span id="L1271" rel="#L1271">1271</span>
<span id="L1272" rel="#L1272">1272</span>
<span id="L1273" rel="#L1273">1273</span>
<span id="L1274" rel="#L1274">1274</span>
<span id="L1275" rel="#L1275">1275</span>
<span id="L1276" rel="#L1276">1276</span>
<span id="L1277" rel="#L1277">1277</span>
<span id="L1278" rel="#L1278">1278</span>
<span id="L1279" rel="#L1279">1279</span>
<span id="L1280" rel="#L1280">1280</span>
<span id="L1281" rel="#L1281">1281</span>
<span id="L1282" rel="#L1282">1282</span>
<span id="L1283" rel="#L1283">1283</span>
<span id="L1284" rel="#L1284">1284</span>
<span id="L1285" rel="#L1285">1285</span>
<span id="L1286" rel="#L1286">1286</span>
<span id="L1287" rel="#L1287">1287</span>
<span id="L1288" rel="#L1288">1288</span>
<span id="L1289" rel="#L1289">1289</span>
<span id="L1290" rel="#L1290">1290</span>
<span id="L1291" rel="#L1291">1291</span>
<span id="L1292" rel="#L1292">1292</span>
<span id="L1293" rel="#L1293">1293</span>
<span id="L1294" rel="#L1294">1294</span>
<span id="L1295" rel="#L1295">1295</span>
<span id="L1296" rel="#L1296">1296</span>
<span id="L1297" rel="#L1297">1297</span>
<span id="L1298" rel="#L1298">1298</span>
<span id="L1299" rel="#L1299">1299</span>
<span id="L1300" rel="#L1300">1300</span>
<span id="L1301" rel="#L1301">1301</span>
<span id="L1302" rel="#L1302">1302</span>
<span id="L1303" rel="#L1303">1303</span>
<span id="L1304" rel="#L1304">1304</span>
<span id="L1305" rel="#L1305">1305</span>
<span id="L1306" rel="#L1306">1306</span>
<span id="L1307" rel="#L1307">1307</span>
<span id="L1308" rel="#L1308">1308</span>
<span id="L1309" rel="#L1309">1309</span>
<span id="L1310" rel="#L1310">1310</span>
<span id="L1311" rel="#L1311">1311</span>
<span id="L1312" rel="#L1312">1312</span>
<span id="L1313" rel="#L1313">1313</span>
<span id="L1314" rel="#L1314">1314</span>
<span id="L1315" rel="#L1315">1315</span>
<span id="L1316" rel="#L1316">1316</span>
<span id="L1317" rel="#L1317">1317</span>
<span id="L1318" rel="#L1318">1318</span>
<span id="L1319" rel="#L1319">1319</span>
<span id="L1320" rel="#L1320">1320</span>
<span id="L1321" rel="#L1321">1321</span>
<span id="L1322" rel="#L1322">1322</span>
<span id="L1323" rel="#L1323">1323</span>
<span id="L1324" rel="#L1324">1324</span>
<span id="L1325" rel="#L1325">1325</span>
<span id="L1326" rel="#L1326">1326</span>
<span id="L1327" rel="#L1327">1327</span>
<span id="L1328" rel="#L1328">1328</span>
<span id="L1329" rel="#L1329">1329</span>
<span id="L1330" rel="#L1330">1330</span>
<span id="L1331" rel="#L1331">1331</span>
<span id="L1332" rel="#L1332">1332</span>
<span id="L1333" rel="#L1333">1333</span>
<span id="L1334" rel="#L1334">1334</span>
<span id="L1335" rel="#L1335">1335</span>
<span id="L1336" rel="#L1336">1336</span>
<span id="L1337" rel="#L1337">1337</span>
<span id="L1338" rel="#L1338">1338</span>
<span id="L1339" rel="#L1339">1339</span>
<span id="L1340" rel="#L1340">1340</span>
<span id="L1341" rel="#L1341">1341</span>
<span id="L1342" rel="#L1342">1342</span>
<span id="L1343" rel="#L1343">1343</span>
<span id="L1344" rel="#L1344">1344</span>
<span id="L1345" rel="#L1345">1345</span>
<span id="L1346" rel="#L1346">1346</span>
<span id="L1347" rel="#L1347">1347</span>
<span id="L1348" rel="#L1348">1348</span>
<span id="L1349" rel="#L1349">1349</span>
<span id="L1350" rel="#L1350">1350</span>
<span id="L1351" rel="#L1351">1351</span>
<span id="L1352" rel="#L1352">1352</span>
<span id="L1353" rel="#L1353">1353</span>
<span id="L1354" rel="#L1354">1354</span>
<span id="L1355" rel="#L1355">1355</span>
<span id="L1356" rel="#L1356">1356</span>
<span id="L1357" rel="#L1357">1357</span>
<span id="L1358" rel="#L1358">1358</span>
<span id="L1359" rel="#L1359">1359</span>
<span id="L1360" rel="#L1360">1360</span>
<span id="L1361" rel="#L1361">1361</span>
<span id="L1362" rel="#L1362">1362</span>
<span id="L1363" rel="#L1363">1363</span>
<span id="L1364" rel="#L1364">1364</span>
<span id="L1365" rel="#L1365">1365</span>
<span id="L1366" rel="#L1366">1366</span>
<span id="L1367" rel="#L1367">1367</span>
<span id="L1368" rel="#L1368">1368</span>
<span id="L1369" rel="#L1369">1369</span>
<span id="L1370" rel="#L1370">1370</span>
<span id="L1371" rel="#L1371">1371</span>
<span id="L1372" rel="#L1372">1372</span>
<span id="L1373" rel="#L1373">1373</span>
<span id="L1374" rel="#L1374">1374</span>
<span id="L1375" rel="#L1375">1375</span>
<span id="L1376" rel="#L1376">1376</span>
<span id="L1377" rel="#L1377">1377</span>
<span id="L1378" rel="#L1378">1378</span>
<span id="L1379" rel="#L1379">1379</span>
<span id="L1380" rel="#L1380">1380</span>
<span id="L1381" rel="#L1381">1381</span>
<span id="L1382" rel="#L1382">1382</span>
<span id="L1383" rel="#L1383">1383</span>
<span id="L1384" rel="#L1384">1384</span>
<span id="L1385" rel="#L1385">1385</span>
<span id="L1386" rel="#L1386">1386</span>
<span id="L1387" rel="#L1387">1387</span>
<span id="L1388" rel="#L1388">1388</span>
<span id="L1389" rel="#L1389">1389</span>
<span id="L1390" rel="#L1390">1390</span>
<span id="L1391" rel="#L1391">1391</span>
<span id="L1392" rel="#L1392">1392</span>
<span id="L1393" rel="#L1393">1393</span>
<span id="L1394" rel="#L1394">1394</span>
<span id="L1395" rel="#L1395">1395</span>
<span id="L1396" rel="#L1396">1396</span>
<span id="L1397" rel="#L1397">1397</span>
<span id="L1398" rel="#L1398">1398</span>
<span id="L1399" rel="#L1399">1399</span>
<span id="L1400" rel="#L1400">1400</span>
<span id="L1401" rel="#L1401">1401</span>
<span id="L1402" rel="#L1402">1402</span>
<span id="L1403" rel="#L1403">1403</span>
<span id="L1404" rel="#L1404">1404</span>
<span id="L1405" rel="#L1405">1405</span>
<span id="L1406" rel="#L1406">1406</span>
<span id="L1407" rel="#L1407">1407</span>
<span id="L1408" rel="#L1408">1408</span>
<span id="L1409" rel="#L1409">1409</span>
<span id="L1410" rel="#L1410">1410</span>
<span id="L1411" rel="#L1411">1411</span>
<span id="L1412" rel="#L1412">1412</span>
<span id="L1413" rel="#L1413">1413</span>
<span id="L1414" rel="#L1414">1414</span>
<span id="L1415" rel="#L1415">1415</span>
<span id="L1416" rel="#L1416">1416</span>
<span id="L1417" rel="#L1417">1417</span>
<span id="L1418" rel="#L1418">1418</span>
<span id="L1419" rel="#L1419">1419</span>
<span id="L1420" rel="#L1420">1420</span>
<span id="L1421" rel="#L1421">1421</span>
<span id="L1422" rel="#L1422">1422</span>
<span id="L1423" rel="#L1423">1423</span>
<span id="L1424" rel="#L1424">1424</span>
<span id="L1425" rel="#L1425">1425</span>
<span id="L1426" rel="#L1426">1426</span>
<span id="L1427" rel="#L1427">1427</span>
<span id="L1428" rel="#L1428">1428</span>
<span id="L1429" rel="#L1429">1429</span>
<span id="L1430" rel="#L1430">1430</span>
<span id="L1431" rel="#L1431">1431</span>
<span id="L1432" rel="#L1432">1432</span>
<span id="L1433" rel="#L1433">1433</span>
<span id="L1434" rel="#L1434">1434</span>
<span id="L1435" rel="#L1435">1435</span>
<span id="L1436" rel="#L1436">1436</span>
<span id="L1437" rel="#L1437">1437</span>
<span id="L1438" rel="#L1438">1438</span>
<span id="L1439" rel="#L1439">1439</span>
<span id="L1440" rel="#L1440">1440</span>
<span id="L1441" rel="#L1441">1441</span>
<span id="L1442" rel="#L1442">1442</span>
<span id="L1443" rel="#L1443">1443</span>
<span id="L1444" rel="#L1444">1444</span>
<span id="L1445" rel="#L1445">1445</span>
<span id="L1446" rel="#L1446">1446</span>
<span id="L1447" rel="#L1447">1447</span>
<span id="L1448" rel="#L1448">1448</span>
<span id="L1449" rel="#L1449">1449</span>
<span id="L1450" rel="#L1450">1450</span>
<span id="L1451" rel="#L1451">1451</span>
<span id="L1452" rel="#L1452">1452</span>
<span id="L1453" rel="#L1453">1453</span>
<span id="L1454" rel="#L1454">1454</span>
<span id="L1455" rel="#L1455">1455</span>
<span id="L1456" rel="#L1456">1456</span>
<span id="L1457" rel="#L1457">1457</span>
<span id="L1458" rel="#L1458">1458</span>
<span id="L1459" rel="#L1459">1459</span>
<span id="L1460" rel="#L1460">1460</span>
<span id="L1461" rel="#L1461">1461</span>
<span id="L1462" rel="#L1462">1462</span>
<span id="L1463" rel="#L1463">1463</span>
<span id="L1464" rel="#L1464">1464</span>
<span id="L1465" rel="#L1465">1465</span>
<span id="L1466" rel="#L1466">1466</span>
<span id="L1467" rel="#L1467">1467</span>
<span id="L1468" rel="#L1468">1468</span>
<span id="L1469" rel="#L1469">1469</span>
<span id="L1470" rel="#L1470">1470</span>
<span id="L1471" rel="#L1471">1471</span>
<span id="L1472" rel="#L1472">1472</span>
<span id="L1473" rel="#L1473">1473</span>
<span id="L1474" rel="#L1474">1474</span>
<span id="L1475" rel="#L1475">1475</span>
<span id="L1476" rel="#L1476">1476</span>
<span id="L1477" rel="#L1477">1477</span>
<span id="L1478" rel="#L1478">1478</span>
<span id="L1479" rel="#L1479">1479</span>
<span id="L1480" rel="#L1480">1480</span>
<span id="L1481" rel="#L1481">1481</span>
<span id="L1482" rel="#L1482">1482</span>
<span id="L1483" rel="#L1483">1483</span>
<span id="L1484" rel="#L1484">1484</span>
<span id="L1485" rel="#L1485">1485</span>
<span id="L1486" rel="#L1486">1486</span>
<span id="L1487" rel="#L1487">1487</span>
<span id="L1488" rel="#L1488">1488</span>
<span id="L1489" rel="#L1489">1489</span>
<span id="L1490" rel="#L1490">1490</span>
<span id="L1491" rel="#L1491">1491</span>
<span id="L1492" rel="#L1492">1492</span>
<span id="L1493" rel="#L1493">1493</span>
<span id="L1494" rel="#L1494">1494</span>
<span id="L1495" rel="#L1495">1495</span>
<span id="L1496" rel="#L1496">1496</span>
<span id="L1497" rel="#L1497">1497</span>
<span id="L1498" rel="#L1498">1498</span>
<span id="L1499" rel="#L1499">1499</span>
<span id="L1500" rel="#L1500">1500</span>
<span id="L1501" rel="#L1501">1501</span>
<span id="L1502" rel="#L1502">1502</span>
<span id="L1503" rel="#L1503">1503</span>
<span id="L1504" rel="#L1504">1504</span>
<span id="L1505" rel="#L1505">1505</span>
<span id="L1506" rel="#L1506">1506</span>
<span id="L1507" rel="#L1507">1507</span>
<span id="L1508" rel="#L1508">1508</span>
<span id="L1509" rel="#L1509">1509</span>
<span id="L1510" rel="#L1510">1510</span>
<span id="L1511" rel="#L1511">1511</span>
<span id="L1512" rel="#L1512">1512</span>
<span id="L1513" rel="#L1513">1513</span>
<span id="L1514" rel="#L1514">1514</span>
<span id="L1515" rel="#L1515">1515</span>
<span id="L1516" rel="#L1516">1516</span>
<span id="L1517" rel="#L1517">1517</span>
<span id="L1518" rel="#L1518">1518</span>
<span id="L1519" rel="#L1519">1519</span>
<span id="L1520" rel="#L1520">1520</span>
<span id="L1521" rel="#L1521">1521</span>
<span id="L1522" rel="#L1522">1522</span>
<span id="L1523" rel="#L1523">1523</span>
<span id="L1524" rel="#L1524">1524</span>
<span id="L1525" rel="#L1525">1525</span>
<span id="L1526" rel="#L1526">1526</span>
<span id="L1527" rel="#L1527">1527</span>
<span id="L1528" rel="#L1528">1528</span>
<span id="L1529" rel="#L1529">1529</span>
<span id="L1530" rel="#L1530">1530</span>
<span id="L1531" rel="#L1531">1531</span>
<span id="L1532" rel="#L1532">1532</span>
<span id="L1533" rel="#L1533">1533</span>
<span id="L1534" rel="#L1534">1534</span>
<span id="L1535" rel="#L1535">1535</span>
<span id="L1536" rel="#L1536">1536</span>
<span id="L1537" rel="#L1537">1537</span>
<span id="L1538" rel="#L1538">1538</span>
<span id="L1539" rel="#L1539">1539</span>
<span id="L1540" rel="#L1540">1540</span>
<span id="L1541" rel="#L1541">1541</span>
<span id="L1542" rel="#L1542">1542</span>
<span id="L1543" rel="#L1543">1543</span>
<span id="L1544" rel="#L1544">1544</span>
<span id="L1545" rel="#L1545">1545</span>
<span id="L1546" rel="#L1546">1546</span>
<span id="L1547" rel="#L1547">1547</span>
<span id="L1548" rel="#L1548">1548</span>
<span id="L1549" rel="#L1549">1549</span>
<span id="L1550" rel="#L1550">1550</span>
<span id="L1551" rel="#L1551">1551</span>
<span id="L1552" rel="#L1552">1552</span>
<span id="L1553" rel="#L1553">1553</span>
<span id="L1554" rel="#L1554">1554</span>
<span id="L1555" rel="#L1555">1555</span>
<span id="L1556" rel="#L1556">1556</span>
<span id="L1557" rel="#L1557">1557</span>
<span id="L1558" rel="#L1558">1558</span>
<span id="L1559" rel="#L1559">1559</span>
<span id="L1560" rel="#L1560">1560</span>
<span id="L1561" rel="#L1561">1561</span>
<span id="L1562" rel="#L1562">1562</span>
<span id="L1563" rel="#L1563">1563</span>
<span id="L1564" rel="#L1564">1564</span>
<span id="L1565" rel="#L1565">1565</span>
<span id="L1566" rel="#L1566">1566</span>
<span id="L1567" rel="#L1567">1567</span>
<span id="L1568" rel="#L1568">1568</span>
<span id="L1569" rel="#L1569">1569</span>
<span id="L1570" rel="#L1570">1570</span>
<span id="L1571" rel="#L1571">1571</span>
<span id="L1572" rel="#L1572">1572</span>
<span id="L1573" rel="#L1573">1573</span>
<span id="L1574" rel="#L1574">1574</span>
<span id="L1575" rel="#L1575">1575</span>
<span id="L1576" rel="#L1576">1576</span>
<span id="L1577" rel="#L1577">1577</span>
<span id="L1578" rel="#L1578">1578</span>
<span id="L1579" rel="#L1579">1579</span>
<span id="L1580" rel="#L1580">1580</span>
<span id="L1581" rel="#L1581">1581</span>
<span id="L1582" rel="#L1582">1582</span>
<span id="L1583" rel="#L1583">1583</span>
<span id="L1584" rel="#L1584">1584</span>
<span id="L1585" rel="#L1585">1585</span>
<span id="L1586" rel="#L1586">1586</span>
<span id="L1587" rel="#L1587">1587</span>
<span id="L1588" rel="#L1588">1588</span>
<span id="L1589" rel="#L1589">1589</span>
<span id="L1590" rel="#L1590">1590</span>
<span id="L1591" rel="#L1591">1591</span>
<span id="L1592" rel="#L1592">1592</span>
<span id="L1593" rel="#L1593">1593</span>
<span id="L1594" rel="#L1594">1594</span>
<span id="L1595" rel="#L1595">1595</span>
<span id="L1596" rel="#L1596">1596</span>
<span id="L1597" rel="#L1597">1597</span>
<span id="L1598" rel="#L1598">1598</span>
<span id="L1599" rel="#L1599">1599</span>
<span id="L1600" rel="#L1600">1600</span>
<span id="L1601" rel="#L1601">1601</span>
<span id="L1602" rel="#L1602">1602</span>
<span id="L1603" rel="#L1603">1603</span>
<span id="L1604" rel="#L1604">1604</span>
<span id="L1605" rel="#L1605">1605</span>
<span id="L1606" rel="#L1606">1606</span>
<span id="L1607" rel="#L1607">1607</span>
<span id="L1608" rel="#L1608">1608</span>
<span id="L1609" rel="#L1609">1609</span>
<span id="L1610" rel="#L1610">1610</span>
<span id="L1611" rel="#L1611">1611</span>
<span id="L1612" rel="#L1612">1612</span>
<span id="L1613" rel="#L1613">1613</span>
<span id="L1614" rel="#L1614">1614</span>
<span id="L1615" rel="#L1615">1615</span>
<span id="L1616" rel="#L1616">1616</span>
<span id="L1617" rel="#L1617">1617</span>
<span id="L1618" rel="#L1618">1618</span>
<span id="L1619" rel="#L1619">1619</span>
<span id="L1620" rel="#L1620">1620</span>
<span id="L1621" rel="#L1621">1621</span>
<span id="L1622" rel="#L1622">1622</span>
<span id="L1623" rel="#L1623">1623</span>
<span id="L1624" rel="#L1624">1624</span>
<span id="L1625" rel="#L1625">1625</span>
<span id="L1626" rel="#L1626">1626</span>
<span id="L1627" rel="#L1627">1627</span>
<span id="L1628" rel="#L1628">1628</span>
<span id="L1629" rel="#L1629">1629</span>
<span id="L1630" rel="#L1630">1630</span>
<span id="L1631" rel="#L1631">1631</span>
<span id="L1632" rel="#L1632">1632</span>
<span id="L1633" rel="#L1633">1633</span>
<span id="L1634" rel="#L1634">1634</span>
<span id="L1635" rel="#L1635">1635</span>
<span id="L1636" rel="#L1636">1636</span>
<span id="L1637" rel="#L1637">1637</span>
<span id="L1638" rel="#L1638">1638</span>
<span id="L1639" rel="#L1639">1639</span>
<span id="L1640" rel="#L1640">1640</span>
<span id="L1641" rel="#L1641">1641</span>
<span id="L1642" rel="#L1642">1642</span>
<span id="L1643" rel="#L1643">1643</span>
<span id="L1644" rel="#L1644">1644</span>
<span id="L1645" rel="#L1645">1645</span>
<span id="L1646" rel="#L1646">1646</span>
<span id="L1647" rel="#L1647">1647</span>
<span id="L1648" rel="#L1648">1648</span>
<span id="L1649" rel="#L1649">1649</span>
<span id="L1650" rel="#L1650">1650</span>
<span id="L1651" rel="#L1651">1651</span>
<span id="L1652" rel="#L1652">1652</span>
<span id="L1653" rel="#L1653">1653</span>
<span id="L1654" rel="#L1654">1654</span>
<span id="L1655" rel="#L1655">1655</span>
<span id="L1656" rel="#L1656">1656</span>
<span id="L1657" rel="#L1657">1657</span>
<span id="L1658" rel="#L1658">1658</span>
<span id="L1659" rel="#L1659">1659</span>
<span id="L1660" rel="#L1660">1660</span>
<span id="L1661" rel="#L1661">1661</span>
<span id="L1662" rel="#L1662">1662</span>
<span id="L1663" rel="#L1663">1663</span>
<span id="L1664" rel="#L1664">1664</span>
<span id="L1665" rel="#L1665">1665</span>
<span id="L1666" rel="#L1666">1666</span>
<span id="L1667" rel="#L1667">1667</span>
<span id="L1668" rel="#L1668">1668</span>
<span id="L1669" rel="#L1669">1669</span>
<span id="L1670" rel="#L1670">1670</span>
<span id="L1671" rel="#L1671">1671</span>
<span id="L1672" rel="#L1672">1672</span>
<span id="L1673" rel="#L1673">1673</span>
<span id="L1674" rel="#L1674">1674</span>
<span id="L1675" rel="#L1675">1675</span>
<span id="L1676" rel="#L1676">1676</span>
<span id="L1677" rel="#L1677">1677</span>
<span id="L1678" rel="#L1678">1678</span>
<span id="L1679" rel="#L1679">1679</span>
<span id="L1680" rel="#L1680">1680</span>
<span id="L1681" rel="#L1681">1681</span>
<span id="L1682" rel="#L1682">1682</span>
<span id="L1683" rel="#L1683">1683</span>
<span id="L1684" rel="#L1684">1684</span>
<span id="L1685" rel="#L1685">1685</span>
<span id="L1686" rel="#L1686">1686</span>
<span id="L1687" rel="#L1687">1687</span>
<span id="L1688" rel="#L1688">1688</span>
<span id="L1689" rel="#L1689">1689</span>
<span id="L1690" rel="#L1690">1690</span>
<span id="L1691" rel="#L1691">1691</span>
<span id="L1692" rel="#L1692">1692</span>
<span id="L1693" rel="#L1693">1693</span>
<span id="L1694" rel="#L1694">1694</span>
<span id="L1695" rel="#L1695">1695</span>
<span id="L1696" rel="#L1696">1696</span>
<span id="L1697" rel="#L1697">1697</span>
<span id="L1698" rel="#L1698">1698</span>
<span id="L1699" rel="#L1699">1699</span>
<span id="L1700" rel="#L1700">1700</span>
<span id="L1701" rel="#L1701">1701</span>
<span id="L1702" rel="#L1702">1702</span>
<span id="L1703" rel="#L1703">1703</span>
<span id="L1704" rel="#L1704">1704</span>
<span id="L1705" rel="#L1705">1705</span>
<span id="L1706" rel="#L1706">1706</span>
<span id="L1707" rel="#L1707">1707</span>
<span id="L1708" rel="#L1708">1708</span>
<span id="L1709" rel="#L1709">1709</span>
<span id="L1710" rel="#L1710">1710</span>
<span id="L1711" rel="#L1711">1711</span>
<span id="L1712" rel="#L1712">1712</span>
<span id="L1713" rel="#L1713">1713</span>
<span id="L1714" rel="#L1714">1714</span>
<span id="L1715" rel="#L1715">1715</span>
<span id="L1716" rel="#L1716">1716</span>
<span id="L1717" rel="#L1717">1717</span>
<span id="L1718" rel="#L1718">1718</span>
<span id="L1719" rel="#L1719">1719</span>
<span id="L1720" rel="#L1720">1720</span>
<span id="L1721" rel="#L1721">1721</span>
<span id="L1722" rel="#L1722">1722</span>
<span id="L1723" rel="#L1723">1723</span>
<span id="L1724" rel="#L1724">1724</span>
<span id="L1725" rel="#L1725">1725</span>
<span id="L1726" rel="#L1726">1726</span>
<span id="L1727" rel="#L1727">1727</span>
<span id="L1728" rel="#L1728">1728</span>
<span id="L1729" rel="#L1729">1729</span>
<span id="L1730" rel="#L1730">1730</span>
<span id="L1731" rel="#L1731">1731</span>
<span id="L1732" rel="#L1732">1732</span>
<span id="L1733" rel="#L1733">1733</span>
<span id="L1734" rel="#L1734">1734</span>
<span id="L1735" rel="#L1735">1735</span>
<span id="L1736" rel="#L1736">1736</span>
<span id="L1737" rel="#L1737">1737</span>
<span id="L1738" rel="#L1738">1738</span>
<span id="L1739" rel="#L1739">1739</span>
<span id="L1740" rel="#L1740">1740</span>
<span id="L1741" rel="#L1741">1741</span>
<span id="L1742" rel="#L1742">1742</span>
<span id="L1743" rel="#L1743">1743</span>
<span id="L1744" rel="#L1744">1744</span>
<span id="L1745" rel="#L1745">1745</span>
<span id="L1746" rel="#L1746">1746</span>
<span id="L1747" rel="#L1747">1747</span>
<span id="L1748" rel="#L1748">1748</span>
<span id="L1749" rel="#L1749">1749</span>
<span id="L1750" rel="#L1750">1750</span>
<span id="L1751" rel="#L1751">1751</span>
<span id="L1752" rel="#L1752">1752</span>
<span id="L1753" rel="#L1753">1753</span>
<span id="L1754" rel="#L1754">1754</span>
<span id="L1755" rel="#L1755">1755</span>
<span id="L1756" rel="#L1756">1756</span>
<span id="L1757" rel="#L1757">1757</span>
<span id="L1758" rel="#L1758">1758</span>
<span id="L1759" rel="#L1759">1759</span>
<span id="L1760" rel="#L1760">1760</span>
<span id="L1761" rel="#L1761">1761</span>
<span id="L1762" rel="#L1762">1762</span>
<span id="L1763" rel="#L1763">1763</span>
<span id="L1764" rel="#L1764">1764</span>
<span id="L1765" rel="#L1765">1765</span>
<span id="L1766" rel="#L1766">1766</span>
<span id="L1767" rel="#L1767">1767</span>
<span id="L1768" rel="#L1768">1768</span>
<span id="L1769" rel="#L1769">1769</span>
<span id="L1770" rel="#L1770">1770</span>
<span id="L1771" rel="#L1771">1771</span>
<span id="L1772" rel="#L1772">1772</span>
<span id="L1773" rel="#L1773">1773</span>
<span id="L1774" rel="#L1774">1774</span>
<span id="L1775" rel="#L1775">1775</span>
<span id="L1776" rel="#L1776">1776</span>
<span id="L1777" rel="#L1777">1777</span>
<span id="L1778" rel="#L1778">1778</span>
<span id="L1779" rel="#L1779">1779</span>
<span id="L1780" rel="#L1780">1780</span>
<span id="L1781" rel="#L1781">1781</span>
<span id="L1782" rel="#L1782">1782</span>
<span id="L1783" rel="#L1783">1783</span>
<span id="L1784" rel="#L1784">1784</span>
<span id="L1785" rel="#L1785">1785</span>
<span id="L1786" rel="#L1786">1786</span>
<span id="L1787" rel="#L1787">1787</span>
<span id="L1788" rel="#L1788">1788</span>
<span id="L1789" rel="#L1789">1789</span>
<span id="L1790" rel="#L1790">1790</span>
<span id="L1791" rel="#L1791">1791</span>
<span id="L1792" rel="#L1792">1792</span>
<span id="L1793" rel="#L1793">1793</span>
<span id="L1794" rel="#L1794">1794</span>
<span id="L1795" rel="#L1795">1795</span>
<span id="L1796" rel="#L1796">1796</span>
<span id="L1797" rel="#L1797">1797</span>
<span id="L1798" rel="#L1798">1798</span>
<span id="L1799" rel="#L1799">1799</span>
<span id="L1800" rel="#L1800">1800</span>
<span id="L1801" rel="#L1801">1801</span>
<span id="L1802" rel="#L1802">1802</span>
<span id="L1803" rel="#L1803">1803</span>
<span id="L1804" rel="#L1804">1804</span>
<span id="L1805" rel="#L1805">1805</span>
<span id="L1806" rel="#L1806">1806</span>
<span id="L1807" rel="#L1807">1807</span>
<span id="L1808" rel="#L1808">1808</span>
<span id="L1809" rel="#L1809">1809</span>
<span id="L1810" rel="#L1810">1810</span>
<span id="L1811" rel="#L1811">1811</span>
<span id="L1812" rel="#L1812">1812</span>
<span id="L1813" rel="#L1813">1813</span>
<span id="L1814" rel="#L1814">1814</span>
<span id="L1815" rel="#L1815">1815</span>
<span id="L1816" rel="#L1816">1816</span>
<span id="L1817" rel="#L1817">1817</span>
<span id="L1818" rel="#L1818">1818</span>
<span id="L1819" rel="#L1819">1819</span>
<span id="L1820" rel="#L1820">1820</span>
<span id="L1821" rel="#L1821">1821</span>
<span id="L1822" rel="#L1822">1822</span>
<span id="L1823" rel="#L1823">1823</span>
<span id="L1824" rel="#L1824">1824</span>
<span id="L1825" rel="#L1825">1825</span>
<span id="L1826" rel="#L1826">1826</span>
<span id="L1827" rel="#L1827">1827</span>
<span id="L1828" rel="#L1828">1828</span>
<span id="L1829" rel="#L1829">1829</span>
<span id="L1830" rel="#L1830">1830</span>
<span id="L1831" rel="#L1831">1831</span>
<span id="L1832" rel="#L1832">1832</span>
<span id="L1833" rel="#L1833">1833</span>
<span id="L1834" rel="#L1834">1834</span>
<span id="L1835" rel="#L1835">1835</span>
<span id="L1836" rel="#L1836">1836</span>
<span id="L1837" rel="#L1837">1837</span>
<span id="L1838" rel="#L1838">1838</span>
<span id="L1839" rel="#L1839">1839</span>
<span id="L1840" rel="#L1840">1840</span>
<span id="L1841" rel="#L1841">1841</span>
<span id="L1842" rel="#L1842">1842</span>
<span id="L1843" rel="#L1843">1843</span>
<span id="L1844" rel="#L1844">1844</span>
<span id="L1845" rel="#L1845">1845</span>
<span id="L1846" rel="#L1846">1846</span>
<span id="L1847" rel="#L1847">1847</span>
<span id="L1848" rel="#L1848">1848</span>
<span id="L1849" rel="#L1849">1849</span>
<span id="L1850" rel="#L1850">1850</span>
<span id="L1851" rel="#L1851">1851</span>
<span id="L1852" rel="#L1852">1852</span>
<span id="L1853" rel="#L1853">1853</span>
<span id="L1854" rel="#L1854">1854</span>
<span id="L1855" rel="#L1855">1855</span>
<span id="L1856" rel="#L1856">1856</span>
<span id="L1857" rel="#L1857">1857</span>
<span id="L1858" rel="#L1858">1858</span>
<span id="L1859" rel="#L1859">1859</span>
<span id="L1860" rel="#L1860">1860</span>
<span id="L1861" rel="#L1861">1861</span>
<span id="L1862" rel="#L1862">1862</span>
<span id="L1863" rel="#L1863">1863</span>
<span id="L1864" rel="#L1864">1864</span>
<span id="L1865" rel="#L1865">1865</span>
<span id="L1866" rel="#L1866">1866</span>
<span id="L1867" rel="#L1867">1867</span>
<span id="L1868" rel="#L1868">1868</span>
<span id="L1869" rel="#L1869">1869</span>
<span id="L1870" rel="#L1870">1870</span>
<span id="L1871" rel="#L1871">1871</span>
<span id="L1872" rel="#L1872">1872</span>
<span id="L1873" rel="#L1873">1873</span>
<span id="L1874" rel="#L1874">1874</span>
<span id="L1875" rel="#L1875">1875</span>
<span id="L1876" rel="#L1876">1876</span>
<span id="L1877" rel="#L1877">1877</span>
<span id="L1878" rel="#L1878">1878</span>
<span id="L1879" rel="#L1879">1879</span>
<span id="L1880" rel="#L1880">1880</span>
<span id="L1881" rel="#L1881">1881</span>
<span id="L1882" rel="#L1882">1882</span>
<span id="L1883" rel="#L1883">1883</span>
<span id="L1884" rel="#L1884">1884</span>
<span id="L1885" rel="#L1885">1885</span>
<span id="L1886" rel="#L1886">1886</span>
<span id="L1887" rel="#L1887">1887</span>
<span id="L1888" rel="#L1888">1888</span>
<span id="L1889" rel="#L1889">1889</span>
<span id="L1890" rel="#L1890">1890</span>
<span id="L1891" rel="#L1891">1891</span>
<span id="L1892" rel="#L1892">1892</span>
<span id="L1893" rel="#L1893">1893</span>
<span id="L1894" rel="#L1894">1894</span>
<span id="L1895" rel="#L1895">1895</span>
<span id="L1896" rel="#L1896">1896</span>
<span id="L1897" rel="#L1897">1897</span>
<span id="L1898" rel="#L1898">1898</span>
<span id="L1899" rel="#L1899">1899</span>
<span id="L1900" rel="#L1900">1900</span>
<span id="L1901" rel="#L1901">1901</span>
<span id="L1902" rel="#L1902">1902</span>
<span id="L1903" rel="#L1903">1903</span>
<span id="L1904" rel="#L1904">1904</span>
<span id="L1905" rel="#L1905">1905</span>
<span id="L1906" rel="#L1906">1906</span>
<span id="L1907" rel="#L1907">1907</span>
<span id="L1908" rel="#L1908">1908</span>
<span id="L1909" rel="#L1909">1909</span>
<span id="L1910" rel="#L1910">1910</span>
<span id="L1911" rel="#L1911">1911</span>
<span id="L1912" rel="#L1912">1912</span>
<span id="L1913" rel="#L1913">1913</span>
<span id="L1914" rel="#L1914">1914</span>
<span id="L1915" rel="#L1915">1915</span>
<span id="L1916" rel="#L1916">1916</span>
<span id="L1917" rel="#L1917">1917</span>
<span id="L1918" rel="#L1918">1918</span>
<span id="L1919" rel="#L1919">1919</span>
<span id="L1920" rel="#L1920">1920</span>
<span id="L1921" rel="#L1921">1921</span>
<span id="L1922" rel="#L1922">1922</span>
<span id="L1923" rel="#L1923">1923</span>
<span id="L1924" rel="#L1924">1924</span>
<span id="L1925" rel="#L1925">1925</span>
<span id="L1926" rel="#L1926">1926</span>
<span id="L1927" rel="#L1927">1927</span>
<span id="L1928" rel="#L1928">1928</span>
<span id="L1929" rel="#L1929">1929</span>
<span id="L1930" rel="#L1930">1930</span>
<span id="L1931" rel="#L1931">1931</span>
<span id="L1932" rel="#L1932">1932</span>
<span id="L1933" rel="#L1933">1933</span>
<span id="L1934" rel="#L1934">1934</span>
<span id="L1935" rel="#L1935">1935</span>
<span id="L1936" rel="#L1936">1936</span>
<span id="L1937" rel="#L1937">1937</span>
<span id="L1938" rel="#L1938">1938</span>
<span id="L1939" rel="#L1939">1939</span>
<span id="L1940" rel="#L1940">1940</span>
<span id="L1941" rel="#L1941">1941</span>
<span id="L1942" rel="#L1942">1942</span>
<span id="L1943" rel="#L1943">1943</span>
<span id="L1944" rel="#L1944">1944</span>
<span id="L1945" rel="#L1945">1945</span>
<span id="L1946" rel="#L1946">1946</span>
<span id="L1947" rel="#L1947">1947</span>
<span id="L1948" rel="#L1948">1948</span>
<span id="L1949" rel="#L1949">1949</span>
<span id="L1950" rel="#L1950">1950</span>
<span id="L1951" rel="#L1951">1951</span>
<span id="L1952" rel="#L1952">1952</span>
<span id="L1953" rel="#L1953">1953</span>
<span id="L1954" rel="#L1954">1954</span>
<span id="L1955" rel="#L1955">1955</span>
<span id="L1956" rel="#L1956">1956</span>
<span id="L1957" rel="#L1957">1957</span>
<span id="L1958" rel="#L1958">1958</span>
<span id="L1959" rel="#L1959">1959</span>
<span id="L1960" rel="#L1960">1960</span>
<span id="L1961" rel="#L1961">1961</span>
<span id="L1962" rel="#L1962">1962</span>
<span id="L1963" rel="#L1963">1963</span>
<span id="L1964" rel="#L1964">1964</span>
<span id="L1965" rel="#L1965">1965</span>
<span id="L1966" rel="#L1966">1966</span>
<span id="L1967" rel="#L1967">1967</span>
<span id="L1968" rel="#L1968">1968</span>
<span id="L1969" rel="#L1969">1969</span>
<span id="L1970" rel="#L1970">1970</span>
<span id="L1971" rel="#L1971">1971</span>
<span id="L1972" rel="#L1972">1972</span>
<span id="L1973" rel="#L1973">1973</span>
<span id="L1974" rel="#L1974">1974</span>
<span id="L1975" rel="#L1975">1975</span>
<span id="L1976" rel="#L1976">1976</span>
<span id="L1977" rel="#L1977">1977</span>
<span id="L1978" rel="#L1978">1978</span>
<span id="L1979" rel="#L1979">1979</span>
<span id="L1980" rel="#L1980">1980</span>
<span id="L1981" rel="#L1981">1981</span>
<span id="L1982" rel="#L1982">1982</span>
<span id="L1983" rel="#L1983">1983</span>
<span id="L1984" rel="#L1984">1984</span>
<span id="L1985" rel="#L1985">1985</span>
<span id="L1986" rel="#L1986">1986</span>
<span id="L1987" rel="#L1987">1987</span>
<span id="L1988" rel="#L1988">1988</span>
<span id="L1989" rel="#L1989">1989</span>
<span id="L1990" rel="#L1990">1990</span>
<span id="L1991" rel="#L1991">1991</span>
<span id="L1992" rel="#L1992">1992</span>
<span id="L1993" rel="#L1993">1993</span>
<span id="L1994" rel="#L1994">1994</span>
<span id="L1995" rel="#L1995">1995</span>
<span id="L1996" rel="#L1996">1996</span>
<span id="L1997" rel="#L1997">1997</span>
<span id="L1998" rel="#L1998">1998</span>
<span id="L1999" rel="#L1999">1999</span>
<span id="L2000" rel="#L2000">2000</span>
<span id="L2001" rel="#L2001">2001</span>
<span id="L2002" rel="#L2002">2002</span>
<span id="L2003" rel="#L2003">2003</span>
<span id="L2004" rel="#L2004">2004</span>
<span id="L2005" rel="#L2005">2005</span>
<span id="L2006" rel="#L2006">2006</span>
<span id="L2007" rel="#L2007">2007</span>
<span id="L2008" rel="#L2008">2008</span>
<span id="L2009" rel="#L2009">2009</span>
<span id="L2010" rel="#L2010">2010</span>
<span id="L2011" rel="#L2011">2011</span>
<span id="L2012" rel="#L2012">2012</span>
<span id="L2013" rel="#L2013">2013</span>
<span id="L2014" rel="#L2014">2014</span>
<span id="L2015" rel="#L2015">2015</span>
<span id="L2016" rel="#L2016">2016</span>
<span id="L2017" rel="#L2017">2017</span>
<span id="L2018" rel="#L2018">2018</span>
<span id="L2019" rel="#L2019">2019</span>
<span id="L2020" rel="#L2020">2020</span>
<span id="L2021" rel="#L2021">2021</span>
<span id="L2022" rel="#L2022">2022</span>
<span id="L2023" rel="#L2023">2023</span>
<span id="L2024" rel="#L2024">2024</span>
<span id="L2025" rel="#L2025">2025</span>
<span id="L2026" rel="#L2026">2026</span>
<span id="L2027" rel="#L2027">2027</span>
<span id="L2028" rel="#L2028">2028</span>
<span id="L2029" rel="#L2029">2029</span>
<span id="L2030" rel="#L2030">2030</span>
<span id="L2031" rel="#L2031">2031</span>
<span id="L2032" rel="#L2032">2032</span>
<span id="L2033" rel="#L2033">2033</span>
<span id="L2034" rel="#L2034">2034</span>
<span id="L2035" rel="#L2035">2035</span>
<span id="L2036" rel="#L2036">2036</span>
<span id="L2037" rel="#L2037">2037</span>
<span id="L2038" rel="#L2038">2038</span>
<span id="L2039" rel="#L2039">2039</span>
<span id="L2040" rel="#L2040">2040</span>
<span id="L2041" rel="#L2041">2041</span>
<span id="L2042" rel="#L2042">2042</span>
<span id="L2043" rel="#L2043">2043</span>
<span id="L2044" rel="#L2044">2044</span>
<span id="L2045" rel="#L2045">2045</span>
<span id="L2046" rel="#L2046">2046</span>
<span id="L2047" rel="#L2047">2047</span>
<span id="L2048" rel="#L2048">2048</span>
<span id="L2049" rel="#L2049">2049</span>
<span id="L2050" rel="#L2050">2050</span>
<span id="L2051" rel="#L2051">2051</span>
<span id="L2052" rel="#L2052">2052</span>
<span id="L2053" rel="#L2053">2053</span>
<span id="L2054" rel="#L2054">2054</span>
<span id="L2055" rel="#L2055">2055</span>
<span id="L2056" rel="#L2056">2056</span>
<span id="L2057" rel="#L2057">2057</span>
<span id="L2058" rel="#L2058">2058</span>
<span id="L2059" rel="#L2059">2059</span>
<span id="L2060" rel="#L2060">2060</span>
<span id="L2061" rel="#L2061">2061</span>
<span id="L2062" rel="#L2062">2062</span>
<span id="L2063" rel="#L2063">2063</span>
<span id="L2064" rel="#L2064">2064</span>
<span id="L2065" rel="#L2065">2065</span>
<span id="L2066" rel="#L2066">2066</span>
<span id="L2067" rel="#L2067">2067</span>
<span id="L2068" rel="#L2068">2068</span>
<span id="L2069" rel="#L2069">2069</span>
<span id="L2070" rel="#L2070">2070</span>
<span id="L2071" rel="#L2071">2071</span>
<span id="L2072" rel="#L2072">2072</span>
<span id="L2073" rel="#L2073">2073</span>
<span id="L2074" rel="#L2074">2074</span>
<span id="L2075" rel="#L2075">2075</span>
<span id="L2076" rel="#L2076">2076</span>
<span id="L2077" rel="#L2077">2077</span>
<span id="L2078" rel="#L2078">2078</span>
<span id="L2079" rel="#L2079">2079</span>
<span id="L2080" rel="#L2080">2080</span>
<span id="L2081" rel="#L2081">2081</span>
<span id="L2082" rel="#L2082">2082</span>
<span id="L2083" rel="#L2083">2083</span>
<span id="L2084" rel="#L2084">2084</span>
<span id="L2085" rel="#L2085">2085</span>
<span id="L2086" rel="#L2086">2086</span>
<span id="L2087" rel="#L2087">2087</span>
<span id="L2088" rel="#L2088">2088</span>
<span id="L2089" rel="#L2089">2089</span>
<span id="L2090" rel="#L2090">2090</span>
<span id="L2091" rel="#L2091">2091</span>
<span id="L2092" rel="#L2092">2092</span>
<span id="L2093" rel="#L2093">2093</span>
<span id="L2094" rel="#L2094">2094</span>
<span id="L2095" rel="#L2095">2095</span>
<span id="L2096" rel="#L2096">2096</span>
<span id="L2097" rel="#L2097">2097</span>
<span id="L2098" rel="#L2098">2098</span>
<span id="L2099" rel="#L2099">2099</span>
<span id="L2100" rel="#L2100">2100</span>
<span id="L2101" rel="#L2101">2101</span>
<span id="L2102" rel="#L2102">2102</span>
<span id="L2103" rel="#L2103">2103</span>
<span id="L2104" rel="#L2104">2104</span>
<span id="L2105" rel="#L2105">2105</span>
<span id="L2106" rel="#L2106">2106</span>
<span id="L2107" rel="#L2107">2107</span>
<span id="L2108" rel="#L2108">2108</span>
<span id="L2109" rel="#L2109">2109</span>
<span id="L2110" rel="#L2110">2110</span>
<span id="L2111" rel="#L2111">2111</span>
<span id="L2112" rel="#L2112">2112</span>
<span id="L2113" rel="#L2113">2113</span>
<span id="L2114" rel="#L2114">2114</span>
<span id="L2115" rel="#L2115">2115</span>
<span id="L2116" rel="#L2116">2116</span>
<span id="L2117" rel="#L2117">2117</span>
<span id="L2118" rel="#L2118">2118</span>
<span id="L2119" rel="#L2119">2119</span>
<span id="L2120" rel="#L2120">2120</span>
<span id="L2121" rel="#L2121">2121</span>
<span id="L2122" rel="#L2122">2122</span>
<span id="L2123" rel="#L2123">2123</span>
<span id="L2124" rel="#L2124">2124</span>
<span id="L2125" rel="#L2125">2125</span>
<span id="L2126" rel="#L2126">2126</span>
<span id="L2127" rel="#L2127">2127</span>
<span id="L2128" rel="#L2128">2128</span>
<span id="L2129" rel="#L2129">2129</span>
<span id="L2130" rel="#L2130">2130</span>
<span id="L2131" rel="#L2131">2131</span>
<span id="L2132" rel="#L2132">2132</span>
<span id="L2133" rel="#L2133">2133</span>
<span id="L2134" rel="#L2134">2134</span>
<span id="L2135" rel="#L2135">2135</span>
<span id="L2136" rel="#L2136">2136</span>
<span id="L2137" rel="#L2137">2137</span>
<span id="L2138" rel="#L2138">2138</span>
<span id="L2139" rel="#L2139">2139</span>
<span id="L2140" rel="#L2140">2140</span>
<span id="L2141" rel="#L2141">2141</span>
<span id="L2142" rel="#L2142">2142</span>
<span id="L2143" rel="#L2143">2143</span>
<span id="L2144" rel="#L2144">2144</span>
<span id="L2145" rel="#L2145">2145</span>
<span id="L2146" rel="#L2146">2146</span>
<span id="L2147" rel="#L2147">2147</span>
<span id="L2148" rel="#L2148">2148</span>
<span id="L2149" rel="#L2149">2149</span>
<span id="L2150" rel="#L2150">2150</span>
<span id="L2151" rel="#L2151">2151</span>
<span id="L2152" rel="#L2152">2152</span>
<span id="L2153" rel="#L2153">2153</span>
<span id="L2154" rel="#L2154">2154</span>
<span id="L2155" rel="#L2155">2155</span>
<span id="L2156" rel="#L2156">2156</span>
<span id="L2157" rel="#L2157">2157</span>
<span id="L2158" rel="#L2158">2158</span>
<span id="L2159" rel="#L2159">2159</span>
<span id="L2160" rel="#L2160">2160</span>
<span id="L2161" rel="#L2161">2161</span>
<span id="L2162" rel="#L2162">2162</span>
<span id="L2163" rel="#L2163">2163</span>
<span id="L2164" rel="#L2164">2164</span>
<span id="L2165" rel="#L2165">2165</span>
<span id="L2166" rel="#L2166">2166</span>
<span id="L2167" rel="#L2167">2167</span>
<span id="L2168" rel="#L2168">2168</span>
<span id="L2169" rel="#L2169">2169</span>
<span id="L2170" rel="#L2170">2170</span>
<span id="L2171" rel="#L2171">2171</span>
<span id="L2172" rel="#L2172">2172</span>
<span id="L2173" rel="#L2173">2173</span>
<span id="L2174" rel="#L2174">2174</span>
<span id="L2175" rel="#L2175">2175</span>
<span id="L2176" rel="#L2176">2176</span>
<span id="L2177" rel="#L2177">2177</span>
<span id="L2178" rel="#L2178">2178</span>
<span id="L2179" rel="#L2179">2179</span>
<span id="L2180" rel="#L2180">2180</span>
<span id="L2181" rel="#L2181">2181</span>
<span id="L2182" rel="#L2182">2182</span>
<span id="L2183" rel="#L2183">2183</span>
<span id="L2184" rel="#L2184">2184</span>
<span id="L2185" rel="#L2185">2185</span>
<span id="L2186" rel="#L2186">2186</span>
<span id="L2187" rel="#L2187">2187</span>
<span id="L2188" rel="#L2188">2188</span>
<span id="L2189" rel="#L2189">2189</span>
<span id="L2190" rel="#L2190">2190</span>
<span id="L2191" rel="#L2191">2191</span>
<span id="L2192" rel="#L2192">2192</span>
<span id="L2193" rel="#L2193">2193</span>
<span id="L2194" rel="#L2194">2194</span>
<span id="L2195" rel="#L2195">2195</span>
<span id="L2196" rel="#L2196">2196</span>
<span id="L2197" rel="#L2197">2197</span>
<span id="L2198" rel="#L2198">2198</span>
<span id="L2199" rel="#L2199">2199</span>
<span id="L2200" rel="#L2200">2200</span>
<span id="L2201" rel="#L2201">2201</span>
<span id="L2202" rel="#L2202">2202</span>
<span id="L2203" rel="#L2203">2203</span>
<span id="L2204" rel="#L2204">2204</span>
<span id="L2205" rel="#L2205">2205</span>
<span id="L2206" rel="#L2206">2206</span>
<span id="L2207" rel="#L2207">2207</span>
<span id="L2208" rel="#L2208">2208</span>
<span id="L2209" rel="#L2209">2209</span>
<span id="L2210" rel="#L2210">2210</span>
<span id="L2211" rel="#L2211">2211</span>
<span id="L2212" rel="#L2212">2212</span>
<span id="L2213" rel="#L2213">2213</span>
<span id="L2214" rel="#L2214">2214</span>
<span id="L2215" rel="#L2215">2215</span>
<span id="L2216" rel="#L2216">2216</span>
<span id="L2217" rel="#L2217">2217</span>
<span id="L2218" rel="#L2218">2218</span>
<span id="L2219" rel="#L2219">2219</span>
<span id="L2220" rel="#L2220">2220</span>
<span id="L2221" rel="#L2221">2221</span>
<span id="L2222" rel="#L2222">2222</span>
<span id="L2223" rel="#L2223">2223</span>
<span id="L2224" rel="#L2224">2224</span>
<span id="L2225" rel="#L2225">2225</span>
<span id="L2226" rel="#L2226">2226</span>
<span id="L2227" rel="#L2227">2227</span>
<span id="L2228" rel="#L2228">2228</span>
<span id="L2229" rel="#L2229">2229</span>
<span id="L2230" rel="#L2230">2230</span>
<span id="L2231" rel="#L2231">2231</span>
<span id="L2232" rel="#L2232">2232</span>
<span id="L2233" rel="#L2233">2233</span>
<span id="L2234" rel="#L2234">2234</span>
<span id="L2235" rel="#L2235">2235</span>
<span id="L2236" rel="#L2236">2236</span>
<span id="L2237" rel="#L2237">2237</span>
<span id="L2238" rel="#L2238">2238</span>
<span id="L2239" rel="#L2239">2239</span>
<span id="L2240" rel="#L2240">2240</span>
<span id="L2241" rel="#L2241">2241</span>
<span id="L2242" rel="#L2242">2242</span>
<span id="L2243" rel="#L2243">2243</span>
<span id="L2244" rel="#L2244">2244</span>
<span id="L2245" rel="#L2245">2245</span>
<span id="L2246" rel="#L2246">2246</span>
<span id="L2247" rel="#L2247">2247</span>
<span id="L2248" rel="#L2248">2248</span>
<span id="L2249" rel="#L2249">2249</span>
<span id="L2250" rel="#L2250">2250</span>
<span id="L2251" rel="#L2251">2251</span>
<span id="L2252" rel="#L2252">2252</span>
<span id="L2253" rel="#L2253">2253</span>
<span id="L2254" rel="#L2254">2254</span>
<span id="L2255" rel="#L2255">2255</span>
<span id="L2256" rel="#L2256">2256</span>
<span id="L2257" rel="#L2257">2257</span>
<span id="L2258" rel="#L2258">2258</span>
<span id="L2259" rel="#L2259">2259</span>
<span id="L2260" rel="#L2260">2260</span>
<span id="L2261" rel="#L2261">2261</span>
<span id="L2262" rel="#L2262">2262</span>
<span id="L2263" rel="#L2263">2263</span>
<span id="L2264" rel="#L2264">2264</span>
<span id="L2265" rel="#L2265">2265</span>
<span id="L2266" rel="#L2266">2266</span>
<span id="L2267" rel="#L2267">2267</span>
<span id="L2268" rel="#L2268">2268</span>
<span id="L2269" rel="#L2269">2269</span>
<span id="L2270" rel="#L2270">2270</span>
<span id="L2271" rel="#L2271">2271</span>
<span id="L2272" rel="#L2272">2272</span>
<span id="L2273" rel="#L2273">2273</span>
<span id="L2274" rel="#L2274">2274</span>
<span id="L2275" rel="#L2275">2275</span>
<span id="L2276" rel="#L2276">2276</span>
<span id="L2277" rel="#L2277">2277</span>
<span id="L2278" rel="#L2278">2278</span>
<span id="L2279" rel="#L2279">2279</span>
<span id="L2280" rel="#L2280">2280</span>
<span id="L2281" rel="#L2281">2281</span>
<span id="L2282" rel="#L2282">2282</span>
<span id="L2283" rel="#L2283">2283</span>
<span id="L2284" rel="#L2284">2284</span>
<span id="L2285" rel="#L2285">2285</span>
<span id="L2286" rel="#L2286">2286</span>
<span id="L2287" rel="#L2287">2287</span>
<span id="L2288" rel="#L2288">2288</span>
<span id="L2289" rel="#L2289">2289</span>
<span id="L2290" rel="#L2290">2290</span>
<span id="L2291" rel="#L2291">2291</span>
<span id="L2292" rel="#L2292">2292</span>
<span id="L2293" rel="#L2293">2293</span>
<span id="L2294" rel="#L2294">2294</span>
<span id="L2295" rel="#L2295">2295</span>
<span id="L2296" rel="#L2296">2296</span>
<span id="L2297" rel="#L2297">2297</span>
<span id="L2298" rel="#L2298">2298</span>
<span id="L2299" rel="#L2299">2299</span>
<span id="L2300" rel="#L2300">2300</span>
<span id="L2301" rel="#L2301">2301</span>
<span id="L2302" rel="#L2302">2302</span>
<span id="L2303" rel="#L2303">2303</span>
<span id="L2304" rel="#L2304">2304</span>
<span id="L2305" rel="#L2305">2305</span>
<span id="L2306" rel="#L2306">2306</span>
<span id="L2307" rel="#L2307">2307</span>
<span id="L2308" rel="#L2308">2308</span>
<span id="L2309" rel="#L2309">2309</span>
<span id="L2310" rel="#L2310">2310</span>
<span id="L2311" rel="#L2311">2311</span>
<span id="L2312" rel="#L2312">2312</span>
<span id="L2313" rel="#L2313">2313</span>
<span id="L2314" rel="#L2314">2314</span>
<span id="L2315" rel="#L2315">2315</span>
<span id="L2316" rel="#L2316">2316</span>
<span id="L2317" rel="#L2317">2317</span>
<span id="L2318" rel="#L2318">2318</span>
<span id="L2319" rel="#L2319">2319</span>
<span id="L2320" rel="#L2320">2320</span>
<span id="L2321" rel="#L2321">2321</span>
<span id="L2322" rel="#L2322">2322</span>
<span id="L2323" rel="#L2323">2323</span>
<span id="L2324" rel="#L2324">2324</span>
<span id="L2325" rel="#L2325">2325</span>
<span id="L2326" rel="#L2326">2326</span>
<span id="L2327" rel="#L2327">2327</span>
<span id="L2328" rel="#L2328">2328</span>
<span id="L2329" rel="#L2329">2329</span>
<span id="L2330" rel="#L2330">2330</span>
<span id="L2331" rel="#L2331">2331</span>
<span id="L2332" rel="#L2332">2332</span>
<span id="L2333" rel="#L2333">2333</span>
<span id="L2334" rel="#L2334">2334</span>
<span id="L2335" rel="#L2335">2335</span>
<span id="L2336" rel="#L2336">2336</span>
<span id="L2337" rel="#L2337">2337</span>
<span id="L2338" rel="#L2338">2338</span>
<span id="L2339" rel="#L2339">2339</span>
<span id="L2340" rel="#L2340">2340</span>
<span id="L2341" rel="#L2341">2341</span>
<span id="L2342" rel="#L2342">2342</span>
<span id="L2343" rel="#L2343">2343</span>
<span id="L2344" rel="#L2344">2344</span>
<span id="L2345" rel="#L2345">2345</span>
<span id="L2346" rel="#L2346">2346</span>
<span id="L2347" rel="#L2347">2347</span>
<span id="L2348" rel="#L2348">2348</span>
<span id="L2349" rel="#L2349">2349</span>
<span id="L2350" rel="#L2350">2350</span>
<span id="L2351" rel="#L2351">2351</span>
<span id="L2352" rel="#L2352">2352</span>
<span id="L2353" rel="#L2353">2353</span>
<span id="L2354" rel="#L2354">2354</span>
<span id="L2355" rel="#L2355">2355</span>
<span id="L2356" rel="#L2356">2356</span>
<span id="L2357" rel="#L2357">2357</span>
<span id="L2358" rel="#L2358">2358</span>
<span id="L2359" rel="#L2359">2359</span>
<span id="L2360" rel="#L2360">2360</span>
<span id="L2361" rel="#L2361">2361</span>
<span id="L2362" rel="#L2362">2362</span>
<span id="L2363" rel="#L2363">2363</span>
<span id="L2364" rel="#L2364">2364</span>
<span id="L2365" rel="#L2365">2365</span>
<span id="L2366" rel="#L2366">2366</span>
<span id="L2367" rel="#L2367">2367</span>
<span id="L2368" rel="#L2368">2368</span>
<span id="L2369" rel="#L2369">2369</span>
<span id="L2370" rel="#L2370">2370</span>
<span id="L2371" rel="#L2371">2371</span>
<span id="L2372" rel="#L2372">2372</span>
<span id="L2373" rel="#L2373">2373</span>
<span id="L2374" rel="#L2374">2374</span>
<span id="L2375" rel="#L2375">2375</span>
<span id="L2376" rel="#L2376">2376</span>
<span id="L2377" rel="#L2377">2377</span>
<span id="L2378" rel="#L2378">2378</span>
<span id="L2379" rel="#L2379">2379</span>
<span id="L2380" rel="#L2380">2380</span>
<span id="L2381" rel="#L2381">2381</span>
<span id="L2382" rel="#L2382">2382</span>
<span id="L2383" rel="#L2383">2383</span>
<span id="L2384" rel="#L2384">2384</span>
<span id="L2385" rel="#L2385">2385</span>
<span id="L2386" rel="#L2386">2386</span>
<span id="L2387" rel="#L2387">2387</span>
<span id="L2388" rel="#L2388">2388</span>
<span id="L2389" rel="#L2389">2389</span>
<span id="L2390" rel="#L2390">2390</span>
<span id="L2391" rel="#L2391">2391</span>
<span id="L2392" rel="#L2392">2392</span>
<span id="L2393" rel="#L2393">2393</span>
<span id="L2394" rel="#L2394">2394</span>
<span id="L2395" rel="#L2395">2395</span>
<span id="L2396" rel="#L2396">2396</span>
<span id="L2397" rel="#L2397">2397</span>
<span id="L2398" rel="#L2398">2398</span>
<span id="L2399" rel="#L2399">2399</span>
<span id="L2400" rel="#L2400">2400</span>
<span id="L2401" rel="#L2401">2401</span>
<span id="L2402" rel="#L2402">2402</span>
<span id="L2403" rel="#L2403">2403</span>
<span id="L2404" rel="#L2404">2404</span>
<span id="L2405" rel="#L2405">2405</span>
<span id="L2406" rel="#L2406">2406</span>
<span id="L2407" rel="#L2407">2407</span>
<span id="L2408" rel="#L2408">2408</span>
<span id="L2409" rel="#L2409">2409</span>
<span id="L2410" rel="#L2410">2410</span>
<span id="L2411" rel="#L2411">2411</span>
<span id="L2412" rel="#L2412">2412</span>
<span id="L2413" rel="#L2413">2413</span>
<span id="L2414" rel="#L2414">2414</span>
<span id="L2415" rel="#L2415">2415</span>
<span id="L2416" rel="#L2416">2416</span>
<span id="L2417" rel="#L2417">2417</span>
<span id="L2418" rel="#L2418">2418</span>
<span id="L2419" rel="#L2419">2419</span>
<span id="L2420" rel="#L2420">2420</span>
<span id="L2421" rel="#L2421">2421</span>
<span id="L2422" rel="#L2422">2422</span>
<span id="L2423" rel="#L2423">2423</span>
<span id="L2424" rel="#L2424">2424</span>
<span id="L2425" rel="#L2425">2425</span>
<span id="L2426" rel="#L2426">2426</span>
<span id="L2427" rel="#L2427">2427</span>
<span id="L2428" rel="#L2428">2428</span>
<span id="L2429" rel="#L2429">2429</span>
<span id="L2430" rel="#L2430">2430</span>
<span id="L2431" rel="#L2431">2431</span>
<span id="L2432" rel="#L2432">2432</span>
<span id="L2433" rel="#L2433">2433</span>
<span id="L2434" rel="#L2434">2434</span>
<span id="L2435" rel="#L2435">2435</span>
<span id="L2436" rel="#L2436">2436</span>
<span id="L2437" rel="#L2437">2437</span>
<span id="L2438" rel="#L2438">2438</span>
<span id="L2439" rel="#L2439">2439</span>
<span id="L2440" rel="#L2440">2440</span>
<span id="L2441" rel="#L2441">2441</span>
<span id="L2442" rel="#L2442">2442</span>
<span id="L2443" rel="#L2443">2443</span>
<span id="L2444" rel="#L2444">2444</span>
<span id="L2445" rel="#L2445">2445</span>
<span id="L2446" rel="#L2446">2446</span>
<span id="L2447" rel="#L2447">2447</span>
<span id="L2448" rel="#L2448">2448</span>
<span id="L2449" rel="#L2449">2449</span>
<span id="L2450" rel="#L2450">2450</span>
<span id="L2451" rel="#L2451">2451</span>
<span id="L2452" rel="#L2452">2452</span>
<span id="L2453" rel="#L2453">2453</span>
<span id="L2454" rel="#L2454">2454</span>
<span id="L2455" rel="#L2455">2455</span>
<span id="L2456" rel="#L2456">2456</span>
<span id="L2457" rel="#L2457">2457</span>
<span id="L2458" rel="#L2458">2458</span>
<span id="L2459" rel="#L2459">2459</span>
<span id="L2460" rel="#L2460">2460</span>
<span id="L2461" rel="#L2461">2461</span>
<span id="L2462" rel="#L2462">2462</span>
<span id="L2463" rel="#L2463">2463</span>
<span id="L2464" rel="#L2464">2464</span>
<span id="L2465" rel="#L2465">2465</span>
<span id="L2466" rel="#L2466">2466</span>
<span id="L2467" rel="#L2467">2467</span>
<span id="L2468" rel="#L2468">2468</span>
<span id="L2469" rel="#L2469">2469</span>
<span id="L2470" rel="#L2470">2470</span>
<span id="L2471" rel="#L2471">2471</span>
<span id="L2472" rel="#L2472">2472</span>
<span id="L2473" rel="#L2473">2473</span>
<span id="L2474" rel="#L2474">2474</span>
<span id="L2475" rel="#L2475">2475</span>
<span id="L2476" rel="#L2476">2476</span>
<span id="L2477" rel="#L2477">2477</span>
<span id="L2478" rel="#L2478">2478</span>
<span id="L2479" rel="#L2479">2479</span>
<span id="L2480" rel="#L2480">2480</span>
<span id="L2481" rel="#L2481">2481</span>
<span id="L2482" rel="#L2482">2482</span>
<span id="L2483" rel="#L2483">2483</span>
<span id="L2484" rel="#L2484">2484</span>
<span id="L2485" rel="#L2485">2485</span>
<span id="L2486" rel="#L2486">2486</span>
<span id="L2487" rel="#L2487">2487</span>
<span id="L2488" rel="#L2488">2488</span>
<span id="L2489" rel="#L2489">2489</span>
<span id="L2490" rel="#L2490">2490</span>
<span id="L2491" rel="#L2491">2491</span>
<span id="L2492" rel="#L2492">2492</span>
<span id="L2493" rel="#L2493">2493</span>
<span id="L2494" rel="#L2494">2494</span>
<span id="L2495" rel="#L2495">2495</span>
<span id="L2496" rel="#L2496">2496</span>
<span id="L2497" rel="#L2497">2497</span>
<span id="L2498" rel="#L2498">2498</span>
<span id="L2499" rel="#L2499">2499</span>
<span id="L2500" rel="#L2500">2500</span>
<span id="L2501" rel="#L2501">2501</span>
<span id="L2502" rel="#L2502">2502</span>
<span id="L2503" rel="#L2503">2503</span>
<span id="L2504" rel="#L2504">2504</span>
<span id="L2505" rel="#L2505">2505</span>
<span id="L2506" rel="#L2506">2506</span>
<span id="L2507" rel="#L2507">2507</span>
<span id="L2508" rel="#L2508">2508</span>
<span id="L2509" rel="#L2509">2509</span>
<span id="L2510" rel="#L2510">2510</span>
<span id="L2511" rel="#L2511">2511</span>
<span id="L2512" rel="#L2512">2512</span>
<span id="L2513" rel="#L2513">2513</span>
<span id="L2514" rel="#L2514">2514</span>
<span id="L2515" rel="#L2515">2515</span>
<span id="L2516" rel="#L2516">2516</span>
<span id="L2517" rel="#L2517">2517</span>
<span id="L2518" rel="#L2518">2518</span>
<span id="L2519" rel="#L2519">2519</span>
<span id="L2520" rel="#L2520">2520</span>
<span id="L2521" rel="#L2521">2521</span>
<span id="L2522" rel="#L2522">2522</span>
<span id="L2523" rel="#L2523">2523</span>
<span id="L2524" rel="#L2524">2524</span>
<span id="L2525" rel="#L2525">2525</span>
<span id="L2526" rel="#L2526">2526</span>
<span id="L2527" rel="#L2527">2527</span>
<span id="L2528" rel="#L2528">2528</span>
<span id="L2529" rel="#L2529">2529</span>
<span id="L2530" rel="#L2530">2530</span>
<span id="L2531" rel="#L2531">2531</span>
<span id="L2532" rel="#L2532">2532</span>
<span id="L2533" rel="#L2533">2533</span>
<span id="L2534" rel="#L2534">2534</span>
<span id="L2535" rel="#L2535">2535</span>
<span id="L2536" rel="#L2536">2536</span>
<span id="L2537" rel="#L2537">2537</span>
<span id="L2538" rel="#L2538">2538</span>
<span id="L2539" rel="#L2539">2539</span>
<span id="L2540" rel="#L2540">2540</span>
<span id="L2541" rel="#L2541">2541</span>
<span id="L2542" rel="#L2542">2542</span>
<span id="L2543" rel="#L2543">2543</span>
<span id="L2544" rel="#L2544">2544</span>
<span id="L2545" rel="#L2545">2545</span>
<span id="L2546" rel="#L2546">2546</span>
<span id="L2547" rel="#L2547">2547</span>
<span id="L2548" rel="#L2548">2548</span>
<span id="L2549" rel="#L2549">2549</span>
<span id="L2550" rel="#L2550">2550</span>
<span id="L2551" rel="#L2551">2551</span>
<span id="L2552" rel="#L2552">2552</span>
<span id="L2553" rel="#L2553">2553</span>
<span id="L2554" rel="#L2554">2554</span>
<span id="L2555" rel="#L2555">2555</span>
<span id="L2556" rel="#L2556">2556</span>
<span id="L2557" rel="#L2557">2557</span>
<span id="L2558" rel="#L2558">2558</span>
<span id="L2559" rel="#L2559">2559</span>
<span id="L2560" rel="#L2560">2560</span>
<span id="L2561" rel="#L2561">2561</span>
<span id="L2562" rel="#L2562">2562</span>
<span id="L2563" rel="#L2563">2563</span>
<span id="L2564" rel="#L2564">2564</span>
<span id="L2565" rel="#L2565">2565</span>
<span id="L2566" rel="#L2566">2566</span>
<span id="L2567" rel="#L2567">2567</span>
<span id="L2568" rel="#L2568">2568</span>
<span id="L2569" rel="#L2569">2569</span>
<span id="L2570" rel="#L2570">2570</span>
<span id="L2571" rel="#L2571">2571</span>
<span id="L2572" rel="#L2572">2572</span>
<span id="L2573" rel="#L2573">2573</span>
<span id="L2574" rel="#L2574">2574</span>
<span id="L2575" rel="#L2575">2575</span>
<span id="L2576" rel="#L2576">2576</span>
<span id="L2577" rel="#L2577">2577</span>
<span id="L2578" rel="#L2578">2578</span>
<span id="L2579" rel="#L2579">2579</span>
<span id="L2580" rel="#L2580">2580</span>
<span id="L2581" rel="#L2581">2581</span>
<span id="L2582" rel="#L2582">2582</span>
<span id="L2583" rel="#L2583">2583</span>
<span id="L2584" rel="#L2584">2584</span>
<span id="L2585" rel="#L2585">2585</span>
<span id="L2586" rel="#L2586">2586</span>
<span id="L2587" rel="#L2587">2587</span>
<span id="L2588" rel="#L2588">2588</span>
<span id="L2589" rel="#L2589">2589</span>
<span id="L2590" rel="#L2590">2590</span>
<span id="L2591" rel="#L2591">2591</span>
<span id="L2592" rel="#L2592">2592</span>
<span id="L2593" rel="#L2593">2593</span>
<span id="L2594" rel="#L2594">2594</span>
<span id="L2595" rel="#L2595">2595</span>
<span id="L2596" rel="#L2596">2596</span>
<span id="L2597" rel="#L2597">2597</span>
<span id="L2598" rel="#L2598">2598</span>
<span id="L2599" rel="#L2599">2599</span>
<span id="L2600" rel="#L2600">2600</span>
<span id="L2601" rel="#L2601">2601</span>
<span id="L2602" rel="#L2602">2602</span>
<span id="L2603" rel="#L2603">2603</span>
<span id="L2604" rel="#L2604">2604</span>
<span id="L2605" rel="#L2605">2605</span>
<span id="L2606" rel="#L2606">2606</span>
<span id="L2607" rel="#L2607">2607</span>
<span id="L2608" rel="#L2608">2608</span>
<span id="L2609" rel="#L2609">2609</span>
<span id="L2610" rel="#L2610">2610</span>
<span id="L2611" rel="#L2611">2611</span>
<span id="L2612" rel="#L2612">2612</span>
<span id="L2613" rel="#L2613">2613</span>
<span id="L2614" rel="#L2614">2614</span>
<span id="L2615" rel="#L2615">2615</span>
<span id="L2616" rel="#L2616">2616</span>
<span id="L2617" rel="#L2617">2617</span>
<span id="L2618" rel="#L2618">2618</span>
<span id="L2619" rel="#L2619">2619</span>
<span id="L2620" rel="#L2620">2620</span>
<span id="L2621" rel="#L2621">2621</span>
<span id="L2622" rel="#L2622">2622</span>
<span id="L2623" rel="#L2623">2623</span>
<span id="L2624" rel="#L2624">2624</span>
<span id="L2625" rel="#L2625">2625</span>
<span id="L2626" rel="#L2626">2626</span>
<span id="L2627" rel="#L2627">2627</span>
<span id="L2628" rel="#L2628">2628</span>
<span id="L2629" rel="#L2629">2629</span>
<span id="L2630" rel="#L2630">2630</span>
<span id="L2631" rel="#L2631">2631</span>
<span id="L2632" rel="#L2632">2632</span>
<span id="L2633" rel="#L2633">2633</span>
<span id="L2634" rel="#L2634">2634</span>
<span id="L2635" rel="#L2635">2635</span>
<span id="L2636" rel="#L2636">2636</span>
<span id="L2637" rel="#L2637">2637</span>
<span id="L2638" rel="#L2638">2638</span>
<span id="L2639" rel="#L2639">2639</span>
<span id="L2640" rel="#L2640">2640</span>
<span id="L2641" rel="#L2641">2641</span>
<span id="L2642" rel="#L2642">2642</span>
<span id="L2643" rel="#L2643">2643</span>
<span id="L2644" rel="#L2644">2644</span>
<span id="L2645" rel="#L2645">2645</span>
<span id="L2646" rel="#L2646">2646</span>
<span id="L2647" rel="#L2647">2647</span>
<span id="L2648" rel="#L2648">2648</span>
<span id="L2649" rel="#L2649">2649</span>
<span id="L2650" rel="#L2650">2650</span>
<span id="L2651" rel="#L2651">2651</span>
<span id="L2652" rel="#L2652">2652</span>
<span id="L2653" rel="#L2653">2653</span>
<span id="L2654" rel="#L2654">2654</span>
<span id="L2655" rel="#L2655">2655</span>
<span id="L2656" rel="#L2656">2656</span>
<span id="L2657" rel="#L2657">2657</span>
<span id="L2658" rel="#L2658">2658</span>
<span id="L2659" rel="#L2659">2659</span>
<span id="L2660" rel="#L2660">2660</span>
<span id="L2661" rel="#L2661">2661</span>
<span id="L2662" rel="#L2662">2662</span>
<span id="L2663" rel="#L2663">2663</span>
<span id="L2664" rel="#L2664">2664</span>
<span id="L2665" rel="#L2665">2665</span>
<span id="L2666" rel="#L2666">2666</span>
<span id="L2667" rel="#L2667">2667</span>
<span id="L2668" rel="#L2668">2668</span>
<span id="L2669" rel="#L2669">2669</span>
<span id="L2670" rel="#L2670">2670</span>
<span id="L2671" rel="#L2671">2671</span>
<span id="L2672" rel="#L2672">2672</span>
<span id="L2673" rel="#L2673">2673</span>
<span id="L2674" rel="#L2674">2674</span>
<span id="L2675" rel="#L2675">2675</span>
<span id="L2676" rel="#L2676">2676</span>
<span id="L2677" rel="#L2677">2677</span>
<span id="L2678" rel="#L2678">2678</span>
<span id="L2679" rel="#L2679">2679</span>
<span id="L2680" rel="#L2680">2680</span>
<span id="L2681" rel="#L2681">2681</span>
<span id="L2682" rel="#L2682">2682</span>
<span id="L2683" rel="#L2683">2683</span>
<span id="L2684" rel="#L2684">2684</span>
<span id="L2685" rel="#L2685">2685</span>
<span id="L2686" rel="#L2686">2686</span>
<span id="L2687" rel="#L2687">2687</span>
<span id="L2688" rel="#L2688">2688</span>
<span id="L2689" rel="#L2689">2689</span>
<span id="L2690" rel="#L2690">2690</span>
<span id="L2691" rel="#L2691">2691</span>
<span id="L2692" rel="#L2692">2692</span>
<span id="L2693" rel="#L2693">2693</span>
<span id="L2694" rel="#L2694">2694</span>
<span id="L2695" rel="#L2695">2695</span>
<span id="L2696" rel="#L2696">2696</span>
<span id="L2697" rel="#L2697">2697</span>
<span id="L2698" rel="#L2698">2698</span>
<span id="L2699" rel="#L2699">2699</span>
<span id="L2700" rel="#L2700">2700</span>
<span id="L2701" rel="#L2701">2701</span>
<span id="L2702" rel="#L2702">2702</span>
<span id="L2703" rel="#L2703">2703</span>
<span id="L2704" rel="#L2704">2704</span>
<span id="L2705" rel="#L2705">2705</span>
<span id="L2706" rel="#L2706">2706</span>
<span id="L2707" rel="#L2707">2707</span>
<span id="L2708" rel="#L2708">2708</span>
<span id="L2709" rel="#L2709">2709</span>
<span id="L2710" rel="#L2710">2710</span>
<span id="L2711" rel="#L2711">2711</span>
<span id="L2712" rel="#L2712">2712</span>
<span id="L2713" rel="#L2713">2713</span>
<span id="L2714" rel="#L2714">2714</span>
<span id="L2715" rel="#L2715">2715</span>
<span id="L2716" rel="#L2716">2716</span>
<span id="L2717" rel="#L2717">2717</span>
<span id="L2718" rel="#L2718">2718</span>
<span id="L2719" rel="#L2719">2719</span>
<span id="L2720" rel="#L2720">2720</span>
<span id="L2721" rel="#L2721">2721</span>
<span id="L2722" rel="#L2722">2722</span>
<span id="L2723" rel="#L2723">2723</span>
<span id="L2724" rel="#L2724">2724</span>
<span id="L2725" rel="#L2725">2725</span>
<span id="L2726" rel="#L2726">2726</span>
<span id="L2727" rel="#L2727">2727</span>
<span id="L2728" rel="#L2728">2728</span>
<span id="L2729" rel="#L2729">2729</span>
<span id="L2730" rel="#L2730">2730</span>
<span id="L2731" rel="#L2731">2731</span>
<span id="L2732" rel="#L2732">2732</span>
<span id="L2733" rel="#L2733">2733</span>
<span id="L2734" rel="#L2734">2734</span>
<span id="L2735" rel="#L2735">2735</span>
<span id="L2736" rel="#L2736">2736</span>
<span id="L2737" rel="#L2737">2737</span>
<span id="L2738" rel="#L2738">2738</span>
<span id="L2739" rel="#L2739">2739</span>
<span id="L2740" rel="#L2740">2740</span>
<span id="L2741" rel="#L2741">2741</span>
<span id="L2742" rel="#L2742">2742</span>
<span id="L2743" rel="#L2743">2743</span>
<span id="L2744" rel="#L2744">2744</span>
<span id="L2745" rel="#L2745">2745</span>
<span id="L2746" rel="#L2746">2746</span>
<span id="L2747" rel="#L2747">2747</span>
<span id="L2748" rel="#L2748">2748</span>
<span id="L2749" rel="#L2749">2749</span>
<span id="L2750" rel="#L2750">2750</span>
<span id="L2751" rel="#L2751">2751</span>
<span id="L2752" rel="#L2752">2752</span>
<span id="L2753" rel="#L2753">2753</span>
<span id="L2754" rel="#L2754">2754</span>
<span id="L2755" rel="#L2755">2755</span>
<span id="L2756" rel="#L2756">2756</span>
<span id="L2757" rel="#L2757">2757</span>
<span id="L2758" rel="#L2758">2758</span>
<span id="L2759" rel="#L2759">2759</span>
<span id="L2760" rel="#L2760">2760</span>
<span id="L2761" rel="#L2761">2761</span>
<span id="L2762" rel="#L2762">2762</span>
<span id="L2763" rel="#L2763">2763</span>
<span id="L2764" rel="#L2764">2764</span>
<span id="L2765" rel="#L2765">2765</span>
<span id="L2766" rel="#L2766">2766</span>
<span id="L2767" rel="#L2767">2767</span>
<span id="L2768" rel="#L2768">2768</span>
<span id="L2769" rel="#L2769">2769</span>
<span id="L2770" rel="#L2770">2770</span>
<span id="L2771" rel="#L2771">2771</span>
<span id="L2772" rel="#L2772">2772</span>
<span id="L2773" rel="#L2773">2773</span>
<span id="L2774" rel="#L2774">2774</span>
<span id="L2775" rel="#L2775">2775</span>
<span id="L2776" rel="#L2776">2776</span>
<span id="L2777" rel="#L2777">2777</span>
<span id="L2778" rel="#L2778">2778</span>
<span id="L2779" rel="#L2779">2779</span>
<span id="L2780" rel="#L2780">2780</span>
<span id="L2781" rel="#L2781">2781</span>
<span id="L2782" rel="#L2782">2782</span>
<span id="L2783" rel="#L2783">2783</span>
<span id="L2784" rel="#L2784">2784</span>
<span id="L2785" rel="#L2785">2785</span>
<span id="L2786" rel="#L2786">2786</span>
<span id="L2787" rel="#L2787">2787</span>
<span id="L2788" rel="#L2788">2788</span>
<span id="L2789" rel="#L2789">2789</span>
<span id="L2790" rel="#L2790">2790</span>
<span id="L2791" rel="#L2791">2791</span>
<span id="L2792" rel="#L2792">2792</span>
<span id="L2793" rel="#L2793">2793</span>
<span id="L2794" rel="#L2794">2794</span>
<span id="L2795" rel="#L2795">2795</span>
<span id="L2796" rel="#L2796">2796</span>
<span id="L2797" rel="#L2797">2797</span>
<span id="L2798" rel="#L2798">2798</span>
<span id="L2799" rel="#L2799">2799</span>
<span id="L2800" rel="#L2800">2800</span>
<span id="L2801" rel="#L2801">2801</span>
<span id="L2802" rel="#L2802">2802</span>
<span id="L2803" rel="#L2803">2803</span>
<span id="L2804" rel="#L2804">2804</span>
<span id="L2805" rel="#L2805">2805</span>
<span id="L2806" rel="#L2806">2806</span>
<span id="L2807" rel="#L2807">2807</span>
<span id="L2808" rel="#L2808">2808</span>
<span id="L2809" rel="#L2809">2809</span>
<span id="L2810" rel="#L2810">2810</span>
<span id="L2811" rel="#L2811">2811</span>
<span id="L2812" rel="#L2812">2812</span>
<span id="L2813" rel="#L2813">2813</span>
<span id="L2814" rel="#L2814">2814</span>
<span id="L2815" rel="#L2815">2815</span>
<span id="L2816" rel="#L2816">2816</span>
<span id="L2817" rel="#L2817">2817</span>
<span id="L2818" rel="#L2818">2818</span>
<span id="L2819" rel="#L2819">2819</span>
<span id="L2820" rel="#L2820">2820</span>
<span id="L2821" rel="#L2821">2821</span>
<span id="L2822" rel="#L2822">2822</span>
<span id="L2823" rel="#L2823">2823</span>
<span id="L2824" rel="#L2824">2824</span>
<span id="L2825" rel="#L2825">2825</span>
<span id="L2826" rel="#L2826">2826</span>
<span id="L2827" rel="#L2827">2827</span>
<span id="L2828" rel="#L2828">2828</span>
<span id="L2829" rel="#L2829">2829</span>
<span id="L2830" rel="#L2830">2830</span>
<span id="L2831" rel="#L2831">2831</span>
<span id="L2832" rel="#L2832">2832</span>
<span id="L2833" rel="#L2833">2833</span>
<span id="L2834" rel="#L2834">2834</span>
<span id="L2835" rel="#L2835">2835</span>
<span id="L2836" rel="#L2836">2836</span>
<span id="L2837" rel="#L2837">2837</span>
<span id="L2838" rel="#L2838">2838</span>
<span id="L2839" rel="#L2839">2839</span>
<span id="L2840" rel="#L2840">2840</span>
<span id="L2841" rel="#L2841">2841</span>
<span id="L2842" rel="#L2842">2842</span>
<span id="L2843" rel="#L2843">2843</span>
<span id="L2844" rel="#L2844">2844</span>
<span id="L2845" rel="#L2845">2845</span>
<span id="L2846" rel="#L2846">2846</span>
<span id="L2847" rel="#L2847">2847</span>
<span id="L2848" rel="#L2848">2848</span>
<span id="L2849" rel="#L2849">2849</span>
<span id="L2850" rel="#L2850">2850</span>
<span id="L2851" rel="#L2851">2851</span>
<span id="L2852" rel="#L2852">2852</span>
<span id="L2853" rel="#L2853">2853</span>
<span id="L2854" rel="#L2854">2854</span>
<span id="L2855" rel="#L2855">2855</span>
<span id="L2856" rel="#L2856">2856</span>
<span id="L2857" rel="#L2857">2857</span>
<span id="L2858" rel="#L2858">2858</span>
<span id="L2859" rel="#L2859">2859</span>
<span id="L2860" rel="#L2860">2860</span>
<span id="L2861" rel="#L2861">2861</span>
<span id="L2862" rel="#L2862">2862</span>
<span id="L2863" rel="#L2863">2863</span>
<span id="L2864" rel="#L2864">2864</span>
<span id="L2865" rel="#L2865">2865</span>
<span id="L2866" rel="#L2866">2866</span>
<span id="L2867" rel="#L2867">2867</span>
<span id="L2868" rel="#L2868">2868</span>
<span id="L2869" rel="#L2869">2869</span>
<span id="L2870" rel="#L2870">2870</span>
<span id="L2871" rel="#L2871">2871</span>
<span id="L2872" rel="#L2872">2872</span>
<span id="L2873" rel="#L2873">2873</span>
<span id="L2874" rel="#L2874">2874</span>
<span id="L2875" rel="#L2875">2875</span>
<span id="L2876" rel="#L2876">2876</span>
<span id="L2877" rel="#L2877">2877</span>
<span id="L2878" rel="#L2878">2878</span>
<span id="L2879" rel="#L2879">2879</span>
<span id="L2880" rel="#L2880">2880</span>
<span id="L2881" rel="#L2881">2881</span>
<span id="L2882" rel="#L2882">2882</span>
<span id="L2883" rel="#L2883">2883</span>
<span id="L2884" rel="#L2884">2884</span>
<span id="L2885" rel="#L2885">2885</span>
<span id="L2886" rel="#L2886">2886</span>
<span id="L2887" rel="#L2887">2887</span>
<span id="L2888" rel="#L2888">2888</span>
<span id="L2889" rel="#L2889">2889</span>
<span id="L2890" rel="#L2890">2890</span>
<span id="L2891" rel="#L2891">2891</span>
<span id="L2892" rel="#L2892">2892</span>
<span id="L2893" rel="#L2893">2893</span>
<span id="L2894" rel="#L2894">2894</span>
<span id="L2895" rel="#L2895">2895</span>
<span id="L2896" rel="#L2896">2896</span>
<span id="L2897" rel="#L2897">2897</span>
<span id="L2898" rel="#L2898">2898</span>
<span id="L2899" rel="#L2899">2899</span>
<span id="L2900" rel="#L2900">2900</span>
<span id="L2901" rel="#L2901">2901</span>
<span id="L2902" rel="#L2902">2902</span>
<span id="L2903" rel="#L2903">2903</span>
<span id="L2904" rel="#L2904">2904</span>
<span id="L2905" rel="#L2905">2905</span>
<span id="L2906" rel="#L2906">2906</span>
<span id="L2907" rel="#L2907">2907</span>
<span id="L2908" rel="#L2908">2908</span>
<span id="L2909" rel="#L2909">2909</span>
<span id="L2910" rel="#L2910">2910</span>
<span id="L2911" rel="#L2911">2911</span>
<span id="L2912" rel="#L2912">2912</span>
<span id="L2913" rel="#L2913">2913</span>
<span id="L2914" rel="#L2914">2914</span>
<span id="L2915" rel="#L2915">2915</span>
<span id="L2916" rel="#L2916">2916</span>
<span id="L2917" rel="#L2917">2917</span>
<span id="L2918" rel="#L2918">2918</span>
<span id="L2919" rel="#L2919">2919</span>
<span id="L2920" rel="#L2920">2920</span>
<span id="L2921" rel="#L2921">2921</span>
<span id="L2922" rel="#L2922">2922</span>
<span id="L2923" rel="#L2923">2923</span>
<span id="L2924" rel="#L2924">2924</span>
<span id="L2925" rel="#L2925">2925</span>
<span id="L2926" rel="#L2926">2926</span>
<span id="L2927" rel="#L2927">2927</span>
<span id="L2928" rel="#L2928">2928</span>
<span id="L2929" rel="#L2929">2929</span>
<span id="L2930" rel="#L2930">2930</span>
<span id="L2931" rel="#L2931">2931</span>
<span id="L2932" rel="#L2932">2932</span>
<span id="L2933" rel="#L2933">2933</span>
<span id="L2934" rel="#L2934">2934</span>

          </td>
          <td class="blob-line-code">
                  <div class="highlight"><pre><div class='line' id='LC1'><span class="o">&lt;?</span><span class="nx">php</span></div><div class='line' id='LC2'><span class="cm">/*~ class.phpmailer.php</span></div><div class='line' id='LC3'><span class="cm">.---------------------------------------------------------------------------.</span></div><div class='line' id='LC4'><span class="cm">|  Software: PHPMailer - PHP email class                                    |</span></div><div class='line' id='LC5'><span class="cm">|   Version: 5.2.6                                                          |</span></div><div class='line' id='LC6'><span class="cm">|      Site: https://github.com/PHPMailer/PHPMailer/                        |</span></div><div class='line' id='LC7'><span class="cm">| ------------------------------------------------------------------------- |</span></div><div class='line' id='LC8'><span class="cm">|    Admins: Marcus Bointon                                                 |</span></div><div class='line' id='LC9'><span class="cm">|    Admins: Jim Jagielski                                                  |</span></div><div class='line' id='LC10'><span class="cm">|   Authors: Andy Prevost (codeworxtech) codeworxtech@users.sourceforge.net |</span></div><div class='line' id='LC11'><span class="cm">|          : Marcus Bointon (coolbru) phpmailer@synchromedia.co.uk          |</span></div><div class='line' id='LC12'><span class="cm">|          : Jim Jagielski (jimjag) jimjag@gmail.com                        |</span></div><div class='line' id='LC13'><span class="cm">|   Founder: Brent R. Matzelle (original founder)                           |</span></div><div class='line' id='LC14'><span class="cm">| Copyright (c) 2010-2012, Jim Jagielski. All Rights Reserved.              |</span></div><div class='line' id='LC15'><span class="cm">| Copyright (c) 2004-2009, Andy Prevost. All Rights Reserved.               |</span></div><div class='line' id='LC16'><span class="cm">| Copyright (c) 2001-2003, Brent R. Matzelle                                |</span></div><div class='line' id='LC17'><span class="cm">| ------------------------------------------------------------------------- |</span></div><div class='line' id='LC18'><span class="cm">|   License: Distributed under the Lesser General Public License (LGPL)     |</span></div><div class='line' id='LC19'><span class="cm">|            http://www.gnu.org/copyleft/lesser.html                        |</span></div><div class='line' id='LC20'><span class="cm">| This program is distributed in the hope that it will be useful - WITHOUT  |</span></div><div class='line' id='LC21'><span class="cm">| ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or     |</span></div><div class='line' id='LC22'><span class="cm">| FITNESS FOR A PARTICULAR PURPOSE.                                         |</span></div><div class='line' id='LC23'><span class="cm">&#39;---------------------------------------------------------------------------&#39;</span></div><div class='line' id='LC24'><span class="cm">*/</span></div><div class='line' id='LC25'><br/></div><div class='line' id='LC26'><span class="sd">/**</span></div><div class='line' id='LC27'><span class="sd"> * PHPMailer - PHP email creation and transport class</span></div><div class='line' id='LC28'><span class="sd"> * NOTE: Requires PHP version 5 or later</span></div><div class='line' id='LC29'><span class="sd"> * @package PHPMailer</span></div><div class='line' id='LC30'><span class="sd"> * @author Andy Prevost</span></div><div class='line' id='LC31'><span class="sd"> * @author Marcus Bointon</span></div><div class='line' id='LC32'><span class="sd"> * @author Jim Jagielski</span></div><div class='line' id='LC33'><span class="sd"> * @copyright 2010 - 2012 Jim Jagielski</span></div><div class='line' id='LC34'><span class="sd"> * @copyright 2004 - 2009 Andy Prevost</span></div><div class='line' id='LC35'><span class="sd"> * @license http://www.gnu.org/copyleft/lesser.html GNU Lesser General Public License</span></div><div class='line' id='LC36'><span class="sd"> */</span></div><div class='line' id='LC37'><br/></div><div class='line' id='LC38'><span class="k">if</span> <span class="p">(</span><span class="nb">version_compare</span><span class="p">(</span><span class="k">PHP_VERSION</span><span class="p">,</span> <span class="s1">&#39;5.0.0&#39;</span><span class="p">,</span> <span class="s1">&#39;&lt;&#39;</span><span class="p">)</span> <span class="p">)</span> <span class="k">exit</span><span class="p">(</span><span class="s2">&quot;Sorry, this version of PHPMailer will only run on PHP version 5 or greater!</span><span class="se">\n</span><span class="s2">&quot;</span><span class="p">);</span></div><div class='line' id='LC39'><br/></div><div class='line' id='LC40'><span class="sd">/**</span></div><div class='line' id='LC41'><span class="sd"> * PHP email creation and transport class</span></div><div class='line' id='LC42'><span class="sd"> * @package PHPMailer</span></div><div class='line' id='LC43'><span class="sd"> */</span></div><div class='line' id='LC44'><span class="k">class</span> <span class="nc">PHPMailer</span> <span class="p">{</span></div><div class='line' id='LC45'><br/></div><div class='line' id='LC46'>&nbsp;&nbsp;<span class="c1">/////////////////////////////////////////////////</span></div><div class='line' id='LC47'>&nbsp;&nbsp;<span class="c1">// PROPERTIES, PUBLIC</span></div><div class='line' id='LC48'>&nbsp;&nbsp;<span class="c1">/////////////////////////////////////////////////</span></div><div class='line' id='LC49'><br/></div><div class='line' id='LC50'>&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC51'><span class="sd">   * Email priority (1 = High, 3 = Normal, 5 = low).</span></div><div class='line' id='LC52'><span class="sd">   * @var int</span></div><div class='line' id='LC53'><span class="sd">   */</span></div><div class='line' id='LC54'>&nbsp;&nbsp;<span class="k">public</span> <span class="nv">$Priority</span>          <span class="o">=</span> <span class="mi">3</span><span class="p">;</span></div><div class='line' id='LC55'><br/></div><div class='line' id='LC56'>&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC57'><span class="sd">   * Sets the CharSet of the message.</span></div><div class='line' id='LC58'><span class="sd">   * @var string</span></div><div class='line' id='LC59'><span class="sd">   */</span></div><div class='line' id='LC60'>&nbsp;&nbsp;<span class="k">public</span> <span class="nv">$CharSet</span>           <span class="o">=</span> <span class="s1">&#39;iso-8859-1&#39;</span><span class="p">;</span></div><div class='line' id='LC61'><br/></div><div class='line' id='LC62'>&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC63'><span class="sd">   * Sets the Content-type of the message.</span></div><div class='line' id='LC64'><span class="sd">   * @var string</span></div><div class='line' id='LC65'><span class="sd">   */</span></div><div class='line' id='LC66'>&nbsp;&nbsp;<span class="k">public</span> <span class="nv">$ContentType</span>       <span class="o">=</span> <span class="s1">&#39;text/plain&#39;</span><span class="p">;</span></div><div class='line' id='LC67'><br/></div><div class='line' id='LC68'>&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC69'><span class="sd">   * Sets the Encoding of the message. Options for this are</span></div><div class='line' id='LC70'><span class="sd">   *  &quot;8bit&quot;, &quot;7bit&quot;, &quot;binary&quot;, &quot;base64&quot;, and &quot;quoted-printable&quot;.</span></div><div class='line' id='LC71'><span class="sd">   * @var string</span></div><div class='line' id='LC72'><span class="sd">   */</span></div><div class='line' id='LC73'>&nbsp;&nbsp;<span class="k">public</span> <span class="nv">$Encoding</span>          <span class="o">=</span> <span class="s1">&#39;8bit&#39;</span><span class="p">;</span></div><div class='line' id='LC74'><br/></div><div class='line' id='LC75'>&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC76'><span class="sd">   * Holds the most recent mailer error message.</span></div><div class='line' id='LC77'><span class="sd">   * @var string</span></div><div class='line' id='LC78'><span class="sd">   */</span></div><div class='line' id='LC79'>&nbsp;&nbsp;<span class="k">public</span> <span class="nv">$ErrorInfo</span>         <span class="o">=</span> <span class="s1">&#39;&#39;</span><span class="p">;</span></div><div class='line' id='LC80'><br/></div><div class='line' id='LC81'>&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC82'><span class="sd">   * Sets the From email address for the message.</span></div><div class='line' id='LC83'><span class="sd">   * @var string</span></div><div class='line' id='LC84'><span class="sd">   */</span></div><div class='line' id='LC85'>&nbsp;&nbsp;<span class="k">public</span> <span class="nv">$From</span>              <span class="o">=</span> <span class="s1">&#39;root@localhost&#39;</span><span class="p">;</span></div><div class='line' id='LC86'><br/></div><div class='line' id='LC87'>&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC88'><span class="sd">   * Sets the From name of the message.</span></div><div class='line' id='LC89'><span class="sd">   * @var string</span></div><div class='line' id='LC90'><span class="sd">   */</span></div><div class='line' id='LC91'>&nbsp;&nbsp;<span class="k">public</span> <span class="nv">$FromName</span>          <span class="o">=</span> <span class="s1">&#39;Root User&#39;</span><span class="p">;</span></div><div class='line' id='LC92'><br/></div><div class='line' id='LC93'>&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC94'><span class="sd">   * Sets the Sender email (Return-Path) of the message.  If not empty,</span></div><div class='line' id='LC95'><span class="sd">   * will be sent via -f to sendmail or as &#39;MAIL FROM&#39; in smtp mode.</span></div><div class='line' id='LC96'><span class="sd">   * @var string</span></div><div class='line' id='LC97'><span class="sd">   */</span></div><div class='line' id='LC98'>&nbsp;&nbsp;<span class="k">public</span> <span class="nv">$Sender</span>            <span class="o">=</span> <span class="s1">&#39;&#39;</span><span class="p">;</span></div><div class='line' id='LC99'><br/></div><div class='line' id='LC100'>&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC101'><span class="sd">   * Sets the Return-Path of the message.  If empty, it will</span></div><div class='line' id='LC102'><span class="sd">   * be set to either From or Sender.</span></div><div class='line' id='LC103'><span class="sd">   * @var string</span></div><div class='line' id='LC104'><span class="sd">   */</span></div><div class='line' id='LC105'>&nbsp;&nbsp;<span class="k">public</span> <span class="nv">$ReturnPath</span>        <span class="o">=</span> <span class="s1">&#39;&#39;</span><span class="p">;</span></div><div class='line' id='LC106'><br/></div><div class='line' id='LC107'>&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC108'><span class="sd">   * Sets the Subject of the message.</span></div><div class='line' id='LC109'><span class="sd">   * @var string</span></div><div class='line' id='LC110'><span class="sd">   */</span></div><div class='line' id='LC111'>&nbsp;&nbsp;<span class="k">public</span> <span class="nv">$Subject</span>           <span class="o">=</span> <span class="s1">&#39;&#39;</span><span class="p">;</span></div><div class='line' id='LC112'><br/></div><div class='line' id='LC113'>&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC114'><span class="sd">   * Sets the Body of the message.  This can be either an HTML or text body.</span></div><div class='line' id='LC115'><span class="sd">   * If HTML then run IsHTML(true).</span></div><div class='line' id='LC116'><span class="sd">   * @var string</span></div><div class='line' id='LC117'><span class="sd">   */</span></div><div class='line' id='LC118'>&nbsp;&nbsp;<span class="k">public</span> <span class="nv">$Body</span>              <span class="o">=</span> <span class="s1">&#39;&#39;</span><span class="p">;</span></div><div class='line' id='LC119'><br/></div><div class='line' id='LC120'>&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC121'><span class="sd">   * Sets the text-only body of the message.  This automatically sets the</span></div><div class='line' id='LC122'><span class="sd">   * email to multipart/alternative.  This body can be read by mail</span></div><div class='line' id='LC123'><span class="sd">   * clients that do not have HTML email capability such as mutt. Clients</span></div><div class='line' id='LC124'><span class="sd">   * that can read HTML will view the normal Body.</span></div><div class='line' id='LC125'><span class="sd">   * @var string</span></div><div class='line' id='LC126'><span class="sd">   */</span></div><div class='line' id='LC127'>&nbsp;&nbsp;<span class="k">public</span> <span class="nv">$AltBody</span>           <span class="o">=</span> <span class="s1">&#39;&#39;</span><span class="p">;</span></div><div class='line' id='LC128'><br/></div><div class='line' id='LC129'>&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC130'><span class="sd">   * Stores the complete compiled MIME message body.</span></div><div class='line' id='LC131'><span class="sd">   * @var string</span></div><div class='line' id='LC132'><span class="sd">   * @access protected</span></div><div class='line' id='LC133'><span class="sd">   */</span></div><div class='line' id='LC134'>&nbsp;&nbsp;<span class="k">protected</span> <span class="nv">$MIMEBody</span>       <span class="o">=</span> <span class="s1">&#39;&#39;</span><span class="p">;</span></div><div class='line' id='LC135'><br/></div><div class='line' id='LC136'>&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC137'><span class="sd">   * Stores the complete compiled MIME message headers.</span></div><div class='line' id='LC138'><span class="sd">   * @var string</span></div><div class='line' id='LC139'><span class="sd">   * @access protected</span></div><div class='line' id='LC140'><span class="sd">   */</span></div><div class='line' id='LC141'>&nbsp;&nbsp;<span class="k">protected</span> <span class="nv">$MIMEHeader</span>     <span class="o">=</span> <span class="s1">&#39;&#39;</span><span class="p">;</span></div><div class='line' id='LC142'><br/></div><div class='line' id='LC143'>&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC144'><span class="sd">   * Stores the extra header list which CreateHeader() doesn&#39;t fold in</span></div><div class='line' id='LC145'><span class="sd">   * @var string</span></div><div class='line' id='LC146'><span class="sd">   * @access protected</span></div><div class='line' id='LC147'><span class="sd">   */</span></div><div class='line' id='LC148'>&nbsp;&nbsp;<span class="k">protected</span> <span class="nv">$mailHeader</span>     <span class="o">=</span> <span class="s1">&#39;&#39;</span><span class="p">;</span></div><div class='line' id='LC149'><br/></div><div class='line' id='LC150'>&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC151'><span class="sd">   * Sets word wrapping on the body of the message to a given number of</span></div><div class='line' id='LC152'><span class="sd">   * characters.</span></div><div class='line' id='LC153'><span class="sd">   * @var int</span></div><div class='line' id='LC154'><span class="sd">   */</span></div><div class='line' id='LC155'>&nbsp;&nbsp;<span class="k">public</span> <span class="nv">$WordWrap</span>          <span class="o">=</span> <span class="mi">0</span><span class="p">;</span></div><div class='line' id='LC156'><br/></div><div class='line' id='LC157'>&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC158'><span class="sd">   * Method to send mail: (&quot;mail&quot;, &quot;sendmail&quot;, or &quot;smtp&quot;).</span></div><div class='line' id='LC159'><span class="sd">   * @var string</span></div><div class='line' id='LC160'><span class="sd">   */</span></div><div class='line' id='LC161'>&nbsp;&nbsp;<span class="k">public</span> <span class="nv">$Mailer</span>            <span class="o">=</span> <span class="s1">&#39;mail&#39;</span><span class="p">;</span></div><div class='line' id='LC162'><br/></div><div class='line' id='LC163'>&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC164'><span class="sd">   * Sets the path of the sendmail program.</span></div><div class='line' id='LC165'><span class="sd">   * @var string</span></div><div class='line' id='LC166'><span class="sd">   */</span></div><div class='line' id='LC167'>&nbsp;&nbsp;<span class="k">public</span> <span class="nv">$Sendmail</span>          <span class="o">=</span> <span class="s1">&#39;/usr/sbin/sendmail&#39;</span><span class="p">;</span></div><div class='line' id='LC168'><br/></div><div class='line' id='LC169'>&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC170'><span class="sd">   * Determine if mail() uses a fully sendmail compatible MTA that</span></div><div class='line' id='LC171'><span class="sd">   * supports sendmail&#39;s &quot;-oi -f&quot; options</span></div><div class='line' id='LC172'><span class="sd">   * @var boolean</span></div><div class='line' id='LC173'><span class="sd">   */</span></div><div class='line' id='LC174'>&nbsp;&nbsp;<span class="k">public</span> <span class="nv">$UseSendmailOptions</span>	<span class="o">=</span> <span class="k">true</span><span class="p">;</span></div><div class='line' id='LC175'><br/></div><div class='line' id='LC176'>&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC177'><span class="sd">   * Path to PHPMailer plugins.  Useful if the SMTP class</span></div><div class='line' id='LC178'><span class="sd">   * is in a different directory than the PHP include path.</span></div><div class='line' id='LC179'><span class="sd">   * @var string</span></div><div class='line' id='LC180'><span class="sd">   */</span></div><div class='line' id='LC181'>&nbsp;&nbsp;<span class="k">public</span> <span class="nv">$PluginDir</span>         <span class="o">=</span> <span class="s1">&#39;&#39;</span><span class="p">;</span></div><div class='line' id='LC182'><br/></div><div class='line' id='LC183'>&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC184'><span class="sd">   * Sets the email address that a reading confirmation will be sent.</span></div><div class='line' id='LC185'><span class="sd">   * @var string</span></div><div class='line' id='LC186'><span class="sd">   */</span></div><div class='line' id='LC187'>&nbsp;&nbsp;<span class="k">public</span> <span class="nv">$ConfirmReadingTo</span>  <span class="o">=</span> <span class="s1">&#39;&#39;</span><span class="p">;</span></div><div class='line' id='LC188'><br/></div><div class='line' id='LC189'>&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC190'><span class="sd">   * Sets the hostname to use in Message-Id and Received headers</span></div><div class='line' id='LC191'><span class="sd">   * and as default HELO string. If empty, the value returned</span></div><div class='line' id='LC192'><span class="sd">   * by SERVER_NAME is used or &#39;localhost.localdomain&#39;.</span></div><div class='line' id='LC193'><span class="sd">   * @var string</span></div><div class='line' id='LC194'><span class="sd">   */</span></div><div class='line' id='LC195'>&nbsp;&nbsp;<span class="k">public</span> <span class="nv">$Hostname</span>          <span class="o">=</span> <span class="s1">&#39;&#39;</span><span class="p">;</span></div><div class='line' id='LC196'><br/></div><div class='line' id='LC197'>&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC198'><span class="sd">   * Sets the message ID to be used in the Message-Id header.</span></div><div class='line' id='LC199'><span class="sd">   * If empty, a unique id will be generated.</span></div><div class='line' id='LC200'><span class="sd">   * @var string</span></div><div class='line' id='LC201'><span class="sd">   */</span></div><div class='line' id='LC202'>&nbsp;&nbsp;<span class="k">public</span> <span class="nv">$MessageID</span>         <span class="o">=</span> <span class="s1">&#39;&#39;</span><span class="p">;</span></div><div class='line' id='LC203'><br/></div><div class='line' id='LC204'>&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC205'><span class="sd">   * Sets the message Date to be used in the Date header.</span></div><div class='line' id='LC206'><span class="sd">   * If empty, the current date will be added.</span></div><div class='line' id='LC207'><span class="sd">   * @var string</span></div><div class='line' id='LC208'><span class="sd">   */</span></div><div class='line' id='LC209'>&nbsp;&nbsp;<span class="k">public</span> <span class="nv">$MessageDate</span>       <span class="o">=</span> <span class="s1">&#39;&#39;</span><span class="p">;</span></div><div class='line' id='LC210'><br/></div><div class='line' id='LC211'>&nbsp;&nbsp;<span class="c1">/////////////////////////////////////////////////</span></div><div class='line' id='LC212'>&nbsp;&nbsp;<span class="c1">// PROPERTIES FOR SMTP</span></div><div class='line' id='LC213'>&nbsp;&nbsp;<span class="c1">/////////////////////////////////////////////////</span></div><div class='line' id='LC214'><br/></div><div class='line' id='LC215'>&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC216'><span class="sd">   * Sets the SMTP hosts.</span></div><div class='line' id='LC217'><span class="sd">   *</span></div><div class='line' id='LC218'><span class="sd">   * All hosts must be separated by a</span></div><div class='line' id='LC219'><span class="sd">   * semicolon.  You can also specify a different port</span></div><div class='line' id='LC220'><span class="sd">   * for each host by using this format: [hostname:port]</span></div><div class='line' id='LC221'><span class="sd">   * (e.g. &quot;smtp1.example.com:25;smtp2.example.com&quot;).</span></div><div class='line' id='LC222'><span class="sd">   * Hosts will be tried in order.</span></div><div class='line' id='LC223'><span class="sd">   * @var string</span></div><div class='line' id='LC224'><span class="sd">   */</span></div><div class='line' id='LC225'>&nbsp;&nbsp;<span class="k">public</span> <span class="nv">$Host</span>          <span class="o">=</span> <span class="s1">&#39;localhost&#39;</span><span class="p">;</span></div><div class='line' id='LC226'><br/></div><div class='line' id='LC227'>&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC228'><span class="sd">   * Sets the default SMTP server port.</span></div><div class='line' id='LC229'><span class="sd">   * @var int</span></div><div class='line' id='LC230'><span class="sd">   */</span></div><div class='line' id='LC231'>&nbsp;&nbsp;<span class="k">public</span> <span class="nv">$Port</span>          <span class="o">=</span> <span class="mi">25</span><span class="p">;</span></div><div class='line' id='LC232'><br/></div><div class='line' id='LC233'>&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC234'><span class="sd">   * Sets the SMTP HELO of the message (Default is $Hostname).</span></div><div class='line' id='LC235'><span class="sd">   * @var string</span></div><div class='line' id='LC236'><span class="sd">   */</span></div><div class='line' id='LC237'>&nbsp;&nbsp;<span class="k">public</span> <span class="nv">$Helo</span>          <span class="o">=</span> <span class="s1">&#39;&#39;</span><span class="p">;</span></div><div class='line' id='LC238'><br/></div><div class='line' id='LC239'>&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC240'><span class="sd">   * Sets connection prefix. Options are &quot;&quot;, &quot;ssl&quot; or &quot;tls&quot;</span></div><div class='line' id='LC241'><span class="sd">   * @var string</span></div><div class='line' id='LC242'><span class="sd">   */</span></div><div class='line' id='LC243'>&nbsp;&nbsp;<span class="k">public</span> <span class="nv">$SMTPSecure</span>    <span class="o">=</span> <span class="s1">&#39;&#39;</span><span class="p">;</span></div><div class='line' id='LC244'><br/></div><div class='line' id='LC245'>&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC246'><span class="sd">   * Sets SMTP authentication. Utilizes the Username and Password variables.</span></div><div class='line' id='LC247'><span class="sd">   * @var bool</span></div><div class='line' id='LC248'><span class="sd">   */</span></div><div class='line' id='LC249'>&nbsp;&nbsp;<span class="k">public</span> <span class="nv">$SMTPAuth</span>      <span class="o">=</span> <span class="k">false</span><span class="p">;</span></div><div class='line' id='LC250'><br/></div><div class='line' id='LC251'>&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC252'><span class="sd">   * Sets SMTP username.</span></div><div class='line' id='LC253'><span class="sd">   * @var string</span></div><div class='line' id='LC254'><span class="sd">   */</span></div><div class='line' id='LC255'>&nbsp;&nbsp;<span class="k">public</span> <span class="nv">$Username</span>      <span class="o">=</span> <span class="s1">&#39;&#39;</span><span class="p">;</span></div><div class='line' id='LC256'><br/></div><div class='line' id='LC257'>&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC258'><span class="sd">   * Sets SMTP password.</span></div><div class='line' id='LC259'><span class="sd">   * @var string</span></div><div class='line' id='LC260'><span class="sd">   */</span></div><div class='line' id='LC261'>&nbsp;&nbsp;<span class="k">public</span> <span class="nv">$Password</span>      <span class="o">=</span> <span class="s1">&#39;&#39;</span><span class="p">;</span></div><div class='line' id='LC262'><br/></div><div class='line' id='LC263'>&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC264'><span class="sd">   *  Sets SMTP auth type. Options are LOGIN | PLAIN | NTLM | CRAM-MD5 (default LOGIN)</span></div><div class='line' id='LC265'><span class="sd">   *  @var string</span></div><div class='line' id='LC266'><span class="sd">   */</span></div><div class='line' id='LC267'>&nbsp;&nbsp;<span class="k">public</span> <span class="nv">$AuthType</span>      <span class="o">=</span> <span class="s1">&#39;&#39;</span><span class="p">;</span></div><div class='line' id='LC268'><br/></div><div class='line' id='LC269'>&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC270'><span class="sd">   *  Sets SMTP realm.</span></div><div class='line' id='LC271'><span class="sd">   *  @var string</span></div><div class='line' id='LC272'><span class="sd">   */</span></div><div class='line' id='LC273'>&nbsp;&nbsp;<span class="k">public</span> <span class="nv">$Realm</span>         <span class="o">=</span> <span class="s1">&#39;&#39;</span><span class="p">;</span></div><div class='line' id='LC274'><br/></div><div class='line' id='LC275'>&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC276'><span class="sd">   *  Sets SMTP workstation.</span></div><div class='line' id='LC277'><span class="sd">   *  @var string</span></div><div class='line' id='LC278'><span class="sd">   */</span></div><div class='line' id='LC279'>&nbsp;&nbsp;<span class="k">public</span> <span class="nv">$Workstation</span>   <span class="o">=</span> <span class="s1">&#39;&#39;</span><span class="p">;</span></div><div class='line' id='LC280'><br/></div><div class='line' id='LC281'>&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC282'><span class="sd">   * Sets the SMTP server timeout in seconds.</span></div><div class='line' id='LC283'><span class="sd">   * This function will not work with the win32 version.</span></div><div class='line' id='LC284'><span class="sd">   * @var int</span></div><div class='line' id='LC285'><span class="sd">   */</span></div><div class='line' id='LC286'>&nbsp;&nbsp;<span class="k">public</span> <span class="nv">$Timeout</span>       <span class="o">=</span> <span class="mi">10</span><span class="p">;</span></div><div class='line' id='LC287'><br/></div><div class='line' id='LC288'>&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC289'><span class="sd">   * Sets SMTP class debugging on or off.</span></div><div class='line' id='LC290'><span class="sd">   * @var bool</span></div><div class='line' id='LC291'><span class="sd">   */</span></div><div class='line' id='LC292'>&nbsp;&nbsp;<span class="k">public</span> <span class="nv">$SMTPDebug</span>     <span class="o">=</span> <span class="k">false</span><span class="p">;</span></div><div class='line' id='LC293'><br/></div><div class='line' id='LC294'>&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC295'><span class="sd">   * Sets the function/method to use for debugging output.</span></div><div class='line' id='LC296'><span class="sd">   * Right now we only honor &quot;echo&quot; or &quot;error_log&quot;</span></div><div class='line' id='LC297'><span class="sd">   * @var string</span></div><div class='line' id='LC298'><span class="sd">   */</span></div><div class='line' id='LC299'>&nbsp;&nbsp;<span class="k">public</span> <span class="nv">$Debugoutput</span>     <span class="o">=</span> <span class="s2">&quot;echo&quot;</span><span class="p">;</span></div><div class='line' id='LC300'><br/></div><div class='line' id='LC301'>&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC302'><span class="sd">   * Prevents the SMTP connection from being closed after each mail</span></div><div class='line' id='LC303'><span class="sd">   * sending.  If this is set to true then to close the connection</span></div><div class='line' id='LC304'><span class="sd">   * requires an explicit call to SmtpClose().</span></div><div class='line' id='LC305'><span class="sd">   * @var bool</span></div><div class='line' id='LC306'><span class="sd">   */</span></div><div class='line' id='LC307'>&nbsp;&nbsp;<span class="k">public</span> <span class="nv">$SMTPKeepAlive</span> <span class="o">=</span> <span class="k">false</span><span class="p">;</span></div><div class='line' id='LC308'><br/></div><div class='line' id='LC309'>&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC310'><span class="sd">   * Provides the ability to have the TO field process individual</span></div><div class='line' id='LC311'><span class="sd">   * emails, instead of sending to entire TO addresses</span></div><div class='line' id='LC312'><span class="sd">   * @var bool</span></div><div class='line' id='LC313'><span class="sd">   */</span></div><div class='line' id='LC314'>&nbsp;&nbsp;<span class="k">public</span> <span class="nv">$SingleTo</span>      <span class="o">=</span> <span class="k">false</span><span class="p">;</span></div><div class='line' id='LC315'><br/></div><div class='line' id='LC316'>&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC317'><span class="sd">   * Should we generate VERP addresses when sending via SMTP?</span></div><div class='line' id='LC318'><span class="sd">   * @link http://en.wikipedia.org/wiki/Variable_envelope_return_path</span></div><div class='line' id='LC319'><span class="sd">   * @var bool</span></div><div class='line' id='LC320'><span class="sd">   */</span></div><div class='line' id='LC321'>&nbsp;&nbsp;<span class="k">public</span> <span class="nv">$do_verp</span>      <span class="o">=</span> <span class="k">false</span><span class="p">;</span></div><div class='line' id='LC322'><br/></div><div class='line' id='LC323'>&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC324'><span class="sd">   * If SingleTo is true, this provides the array to hold the email addresses</span></div><div class='line' id='LC325'><span class="sd">   * @var bool</span></div><div class='line' id='LC326'><span class="sd">   */</span></div><div class='line' id='LC327'>&nbsp;&nbsp;<span class="k">public</span> <span class="nv">$SingleToArray</span> <span class="o">=</span> <span class="k">array</span><span class="p">();</span></div><div class='line' id='LC328'><br/></div><div class='line' id='LC329'>&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC330'><span class="sd">   * Should we allow sending messages with empty body?</span></div><div class='line' id='LC331'><span class="sd">   * @var bool</span></div><div class='line' id='LC332'><span class="sd">   */</span></div><div class='line' id='LC333'>&nbsp;&nbsp;<span class="k">public</span> <span class="nv">$AllowEmpty</span> <span class="o">=</span> <span class="k">false</span><span class="p">;</span></div><div class='line' id='LC334'><br/></div><div class='line' id='LC335'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC336'><span class="sd">   * Provides the ability to change the generic line ending</span></div><div class='line' id='LC337'><span class="sd">   * NOTE: The default remains &#39;\n&#39;. We force CRLF where we KNOW</span></div><div class='line' id='LC338'><span class="sd">   *        it must be used via self::CRLF</span></div><div class='line' id='LC339'><span class="sd">   * @var string</span></div><div class='line' id='LC340'><span class="sd">   */</span></div><div class='line' id='LC341'>&nbsp;&nbsp;<span class="k">public</span> <span class="nv">$LE</span>              <span class="o">=</span> <span class="s2">&quot;</span><span class="se">\n</span><span class="s2">&quot;</span><span class="p">;</span></div><div class='line' id='LC342'><br/></div><div class='line' id='LC343'>&nbsp;&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC344'><span class="sd">   * Used with DKIM Signing</span></div><div class='line' id='LC345'><span class="sd">   * required parameter if DKIM is enabled</span></div><div class='line' id='LC346'><span class="sd">   *</span></div><div class='line' id='LC347'><span class="sd">   * domain selector example domainkey</span></div><div class='line' id='LC348'><span class="sd">   * @var string</span></div><div class='line' id='LC349'><span class="sd">   */</span></div><div class='line' id='LC350'>&nbsp;&nbsp;<span class="k">public</span> <span class="nv">$DKIM_selector</span>   <span class="o">=</span> <span class="s1">&#39;&#39;</span><span class="p">;</span></div><div class='line' id='LC351'><br/></div><div class='line' id='LC352'>&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC353'><span class="sd">   * Used with DKIM Signing</span></div><div class='line' id='LC354'><span class="sd">   * required if DKIM is enabled, in format of email address &#39;you@yourdomain.com&#39; typically used as the source of the email</span></div><div class='line' id='LC355'><span class="sd">   * @var string</span></div><div class='line' id='LC356'><span class="sd">   */</span></div><div class='line' id='LC357'>&nbsp;&nbsp;<span class="k">public</span> <span class="nv">$DKIM_identity</span>   <span class="o">=</span> <span class="s1">&#39;&#39;</span><span class="p">;</span></div><div class='line' id='LC358'><br/></div><div class='line' id='LC359'>&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC360'><span class="sd">   * Used with DKIM Signing</span></div><div class='line' id='LC361'><span class="sd">   * optional parameter if your private key requires a passphras</span></div><div class='line' id='LC362'><span class="sd">   * @var string</span></div><div class='line' id='LC363'><span class="sd">   */</span></div><div class='line' id='LC364'>&nbsp;&nbsp;<span class="k">public</span> <span class="nv">$DKIM_passphrase</span>   <span class="o">=</span> <span class="s1">&#39;&#39;</span><span class="p">;</span></div><div class='line' id='LC365'><br/></div><div class='line' id='LC366'>&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC367'><span class="sd">   * Used with DKIM Singing</span></div><div class='line' id='LC368'><span class="sd">   * required if DKIM is enabled, in format of email address &#39;domain.com&#39;</span></div><div class='line' id='LC369'><span class="sd">   * @var string</span></div><div class='line' id='LC370'><span class="sd">   */</span></div><div class='line' id='LC371'>&nbsp;&nbsp;<span class="k">public</span> <span class="nv">$DKIM_domain</span>     <span class="o">=</span> <span class="s1">&#39;&#39;</span><span class="p">;</span></div><div class='line' id='LC372'><br/></div><div class='line' id='LC373'>&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC374'><span class="sd">   * Used with DKIM Signing</span></div><div class='line' id='LC375'><span class="sd">   * required if DKIM is enabled, path to private key file</span></div><div class='line' id='LC376'><span class="sd">   * @var string</span></div><div class='line' id='LC377'><span class="sd">   */</span></div><div class='line' id='LC378'>&nbsp;&nbsp;<span class="k">public</span> <span class="nv">$DKIM_private</span>    <span class="o">=</span> <span class="s1">&#39;&#39;</span><span class="p">;</span></div><div class='line' id='LC379'><br/></div><div class='line' id='LC380'>&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC381'><span class="sd">   * Callback Action function name.</span></div><div class='line' id='LC382'><span class="sd">   * The function that handles the result of the send email action.</span></div><div class='line' id='LC383'><span class="sd">   * It is called out by Send() for each email sent.</span></div><div class='line' id='LC384'><span class="sd">   *</span></div><div class='line' id='LC385'><span class="sd">   * Value can be:</span></div><div class='line' id='LC386'><span class="sd">   * - &#39;function_name&#39; for function names</span></div><div class='line' id='LC387'><span class="sd">   * - &#39;Class::Method&#39; for static method calls</span></div><div class='line' id='LC388'><span class="sd">   * - array($object, &#39;Method&#39;) for calling methods on $object</span></div><div class='line' id='LC389'><span class="sd">   * See http://php.net/is_callable manual page for more details.</span></div><div class='line' id='LC390'><span class="sd">   *</span></div><div class='line' id='LC391'><span class="sd">   * Parameters:</span></div><div class='line' id='LC392'><span class="sd">   *   bool    $result        result of the send action</span></div><div class='line' id='LC393'><span class="sd">   *   string  $to            email address of the recipient</span></div><div class='line' id='LC394'><span class="sd">   *   string  $cc            cc email addresses</span></div><div class='line' id='LC395'><span class="sd">   *   string  $bcc           bcc email addresses</span></div><div class='line' id='LC396'><span class="sd">   *   string  $subject       the subject</span></div><div class='line' id='LC397'><span class="sd">   *   string  $body          the email body</span></div><div class='line' id='LC398'><span class="sd">   *   string  $from          email address of sender</span></div><div class='line' id='LC399'><span class="sd">   * @var string</span></div><div class='line' id='LC400'><span class="sd">   */</span></div><div class='line' id='LC401'>&nbsp;&nbsp;<span class="k">public</span> <span class="nv">$action_function</span> <span class="o">=</span> <span class="s1">&#39;&#39;</span><span class="p">;</span> <span class="c1">//&#39;callbackAction&#39;;</span></div><div class='line' id='LC402'><br/></div><div class='line' id='LC403'>&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC404'><span class="sd">   * Sets the PHPMailer Version number</span></div><div class='line' id='LC405'><span class="sd">   * @var string</span></div><div class='line' id='LC406'><span class="sd">   */</span></div><div class='line' id='LC407'>&nbsp;&nbsp;<span class="k">public</span> <span class="nv">$Version</span>         <span class="o">=</span> <span class="s1">&#39;5.2.6&#39;</span><span class="p">;</span></div><div class='line' id='LC408'><br/></div><div class='line' id='LC409'>&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC410'><span class="sd">   * What to use in the X-Mailer header</span></div><div class='line' id='LC411'><span class="sd">   * @var string NULL for default, whitespace for None, or actual string to use</span></div><div class='line' id='LC412'><span class="sd">   */</span></div><div class='line' id='LC413'>&nbsp;&nbsp;<span class="k">public</span> <span class="nv">$XMailer</span>         <span class="o">=</span> <span class="s1">&#39;&#39;</span><span class="p">;</span></div><div class='line' id='LC414'><br/></div><div class='line' id='LC415'>&nbsp;&nbsp;<span class="c1">/////////////////////////////////////////////////</span></div><div class='line' id='LC416'>&nbsp;&nbsp;<span class="c1">// PROPERTIES, PRIVATE AND PROTECTED</span></div><div class='line' id='LC417'>&nbsp;&nbsp;<span class="c1">/////////////////////////////////////////////////</span></div><div class='line' id='LC418'><br/></div><div class='line' id='LC419'>&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC420'><span class="sd">   * @var SMTP An instance of the SMTP sender class</span></div><div class='line' id='LC421'><span class="sd">   * @access protected</span></div><div class='line' id='LC422'><span class="sd">   */</span></div><div class='line' id='LC423'>&nbsp;&nbsp;<span class="k">protected</span>   <span class="nv">$smtp</span>           <span class="o">=</span> <span class="k">null</span><span class="p">;</span></div><div class='line' id='LC424'>&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC425'><span class="sd">   * @var array An array of &#39;to&#39; addresses</span></div><div class='line' id='LC426'><span class="sd">   * @access protected</span></div><div class='line' id='LC427'><span class="sd">   */</span></div><div class='line' id='LC428'>&nbsp;&nbsp;<span class="k">protected</span>   <span class="nv">$to</span>             <span class="o">=</span> <span class="k">array</span><span class="p">();</span></div><div class='line' id='LC429'>&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC430'><span class="sd">   * @var array An array of &#39;cc&#39; addresses</span></div><div class='line' id='LC431'><span class="sd">   * @access protected</span></div><div class='line' id='LC432'><span class="sd">   */</span></div><div class='line' id='LC433'>&nbsp;&nbsp;<span class="k">protected</span>   <span class="nv">$cc</span>             <span class="o">=</span> <span class="k">array</span><span class="p">();</span></div><div class='line' id='LC434'>&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC435'><span class="sd">   * @var array An array of &#39;bcc&#39; addresses</span></div><div class='line' id='LC436'><span class="sd">   * @access protected</span></div><div class='line' id='LC437'><span class="sd">   */</span></div><div class='line' id='LC438'>&nbsp;&nbsp;<span class="k">protected</span>   <span class="nv">$bcc</span>            <span class="o">=</span> <span class="k">array</span><span class="p">();</span></div><div class='line' id='LC439'>&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC440'><span class="sd">   * @var array An array of reply-to name and address</span></div><div class='line' id='LC441'><span class="sd">   * @access protected</span></div><div class='line' id='LC442'><span class="sd">   */</span></div><div class='line' id='LC443'>&nbsp;&nbsp;<span class="k">protected</span>   <span class="nv">$ReplyTo</span>        <span class="o">=</span> <span class="k">array</span><span class="p">();</span></div><div class='line' id='LC444'>&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC445'><span class="sd">   * @var array An array of all kinds of addresses: to, cc, bcc, replyto</span></div><div class='line' id='LC446'><span class="sd">   * @access protected</span></div><div class='line' id='LC447'><span class="sd">   */</span></div><div class='line' id='LC448'>&nbsp;&nbsp;<span class="k">protected</span>   <span class="nv">$all_recipients</span> <span class="o">=</span> <span class="k">array</span><span class="p">();</span></div><div class='line' id='LC449'>&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC450'><span class="sd">   * @var array An array of attachments</span></div><div class='line' id='LC451'><span class="sd">   * @access protected</span></div><div class='line' id='LC452'><span class="sd">   */</span></div><div class='line' id='LC453'>&nbsp;&nbsp;<span class="k">protected</span>   <span class="nv">$attachment</span>     <span class="o">=</span> <span class="k">array</span><span class="p">();</span></div><div class='line' id='LC454'>&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC455'><span class="sd">   * @var array An array of custom headers</span></div><div class='line' id='LC456'><span class="sd">   * @access protected</span></div><div class='line' id='LC457'><span class="sd">   */</span></div><div class='line' id='LC458'>&nbsp;&nbsp;<span class="k">protected</span>   <span class="nv">$CustomHeader</span>   <span class="o">=</span> <span class="k">array</span><span class="p">();</span></div><div class='line' id='LC459'>&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC460'><span class="sd">   * @var string The message&#39;s MIME type</span></div><div class='line' id='LC461'><span class="sd">   * @access protected</span></div><div class='line' id='LC462'><span class="sd">   */</span></div><div class='line' id='LC463'>&nbsp;&nbsp;<span class="k">protected</span>   <span class="nv">$message_type</span>   <span class="o">=</span> <span class="s1">&#39;&#39;</span><span class="p">;</span></div><div class='line' id='LC464'>&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC465'><span class="sd">   * @var array An array of MIME boundary strings</span></div><div class='line' id='LC466'><span class="sd">   * @access protected</span></div><div class='line' id='LC467'><span class="sd">   */</span></div><div class='line' id='LC468'>&nbsp;&nbsp;<span class="k">protected</span>   <span class="nv">$boundary</span>       <span class="o">=</span> <span class="k">array</span><span class="p">();</span></div><div class='line' id='LC469'>&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC470'><span class="sd">   * @var array An array of available languages</span></div><div class='line' id='LC471'><span class="sd">   * @access protected</span></div><div class='line' id='LC472'><span class="sd">   */</span></div><div class='line' id='LC473'>&nbsp;&nbsp;<span class="k">protected</span>   <span class="nv">$language</span>       <span class="o">=</span> <span class="k">array</span><span class="p">();</span></div><div class='line' id='LC474'>&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC475'><span class="sd">   * @var integer The number of errors encountered</span></div><div class='line' id='LC476'><span class="sd">   * @access protected</span></div><div class='line' id='LC477'><span class="sd">   */</span></div><div class='line' id='LC478'>&nbsp;&nbsp;<span class="k">protected</span>   <span class="nv">$error_count</span>    <span class="o">=</span> <span class="mi">0</span><span class="p">;</span></div><div class='line' id='LC479'>&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC480'><span class="sd">   * @var string The filename of a DKIM certificate file</span></div><div class='line' id='LC481'><span class="sd">   * @access protected</span></div><div class='line' id='LC482'><span class="sd">   */</span></div><div class='line' id='LC483'>&nbsp;&nbsp;<span class="k">protected</span>   <span class="nv">$sign_cert_file</span> <span class="o">=</span> <span class="s1">&#39;&#39;</span><span class="p">;</span></div><div class='line' id='LC484'>&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC485'><span class="sd">   * @var string The filename of a DKIM key file</span></div><div class='line' id='LC486'><span class="sd">   * @access protected</span></div><div class='line' id='LC487'><span class="sd">   */</span></div><div class='line' id='LC488'>&nbsp;&nbsp;<span class="k">protected</span>   <span class="nv">$sign_key_file</span>  <span class="o">=</span> <span class="s1">&#39;&#39;</span><span class="p">;</span></div><div class='line' id='LC489'>&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC490'><span class="sd">   * @var string The password of a DKIM key</span></div><div class='line' id='LC491'><span class="sd">   * @access protected</span></div><div class='line' id='LC492'><span class="sd">   */</span></div><div class='line' id='LC493'>&nbsp;&nbsp;<span class="k">protected</span>   <span class="nv">$sign_key_pass</span>  <span class="o">=</span> <span class="s1">&#39;&#39;</span><span class="p">;</span></div><div class='line' id='LC494'>&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC495'><span class="sd">   * @var boolean Whether to throw exceptions for errors</span></div><div class='line' id='LC496'><span class="sd">   * @access protected</span></div><div class='line' id='LC497'><span class="sd">   */</span></div><div class='line' id='LC498'>&nbsp;&nbsp;<span class="k">protected</span>   <span class="nv">$exceptions</span>     <span class="o">=</span> <span class="k">false</span><span class="p">;</span></div><div class='line' id='LC499'><br/></div><div class='line' id='LC500'>&nbsp;&nbsp;<span class="c1">/////////////////////////////////////////////////</span></div><div class='line' id='LC501'>&nbsp;&nbsp;<span class="c1">// CONSTANTS</span></div><div class='line' id='LC502'>&nbsp;&nbsp;<span class="c1">/////////////////////////////////////////////////</span></div><div class='line' id='LC503'><br/></div><div class='line' id='LC504'>&nbsp;&nbsp;<span class="k">const</span> <span class="no">STOP_MESSAGE</span>  <span class="o">=</span> <span class="mi">0</span><span class="p">;</span> <span class="c1">// message only, continue processing</span></div><div class='line' id='LC505'>&nbsp;&nbsp;<span class="k">const</span> <span class="no">STOP_CONTINUE</span> <span class="o">=</span> <span class="mi">1</span><span class="p">;</span> <span class="c1">// message?, likely ok to continue processing</span></div><div class='line' id='LC506'>&nbsp;&nbsp;<span class="k">const</span> <span class="no">STOP_CRITICAL</span> <span class="o">=</span> <span class="mi">2</span><span class="p">;</span> <span class="c1">// message, plus full stop, critical error reached</span></div><div class='line' id='LC507'>&nbsp;&nbsp;<span class="k">const</span> <span class="no">CRLF</span> <span class="o">=</span> <span class="s2">&quot;</span><span class="se">\r\n</span><span class="s2">&quot;</span><span class="p">;</span>     <span class="c1">// SMTP RFC specified EOL</span></div><div class='line' id='LC508'><br/></div><div class='line' id='LC509'>&nbsp;&nbsp;<span class="c1">/////////////////////////////////////////////////</span></div><div class='line' id='LC510'>&nbsp;&nbsp;<span class="c1">// METHODS, VARIABLES</span></div><div class='line' id='LC511'>&nbsp;&nbsp;<span class="c1">/////////////////////////////////////////////////</span></div><div class='line' id='LC512'><br/></div><div class='line' id='LC513'>&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC514'><span class="sd">   * Calls actual mail() function, but in a safe_mode aware fashion</span></div><div class='line' id='LC515'><span class="sd">   * Also, unless sendmail_path points to sendmail (or something that</span></div><div class='line' id='LC516'><span class="sd">   * claims to be sendmail), don&#39;t pass params (not a perfect fix,</span></div><div class='line' id='LC517'><span class="sd">   * but it will do)</span></div><div class='line' id='LC518'><span class="sd">   * @param string $to To</span></div><div class='line' id='LC519'><span class="sd">   * @param string $subject Subject</span></div><div class='line' id='LC520'><span class="sd">   * @param string $body Message Body</span></div><div class='line' id='LC521'><span class="sd">   * @param string $header Additional Header(s)</span></div><div class='line' id='LC522'><span class="sd">   * @param string $params Params</span></div><div class='line' id='LC523'><span class="sd">   * @access private</span></div><div class='line' id='LC524'><span class="sd">   * @return bool</span></div><div class='line' id='LC525'><span class="sd">   */</span></div><div class='line' id='LC526'>&nbsp;&nbsp;<span class="k">private</span> <span class="k">function</span> <span class="nf">mail_passthru</span><span class="p">(</span><span class="nv">$to</span><span class="p">,</span> <span class="nv">$subject</span><span class="p">,</span> <span class="nv">$body</span><span class="p">,</span> <span class="nv">$header</span><span class="p">,</span> <span class="nv">$params</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC527'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span> <span class="p">(</span> <span class="nb">ini_get</span><span class="p">(</span><span class="s1">&#39;safe_mode&#39;</span><span class="p">)</span> <span class="o">||</span> <span class="o">!</span><span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">UseSendmailOptions</span><span class="p">)</span> <span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC528'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$rt</span> <span class="o">=</span> <span class="o">@</span><span class="nb">mail</span><span class="p">(</span><span class="nv">$to</span><span class="p">,</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">EncodeHeader</span><span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">SecureHeader</span><span class="p">(</span><span class="nv">$subject</span><span class="p">)),</span> <span class="nv">$body</span><span class="p">,</span> <span class="nv">$header</span><span class="p">);</span></div><div class='line' id='LC529'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span> <span class="k">else</span> <span class="p">{</span></div><div class='line' id='LC530'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$rt</span> <span class="o">=</span> <span class="o">@</span><span class="nb">mail</span><span class="p">(</span><span class="nv">$to</span><span class="p">,</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">EncodeHeader</span><span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">SecureHeader</span><span class="p">(</span><span class="nv">$subject</span><span class="p">)),</span> <span class="nv">$body</span><span class="p">,</span> <span class="nv">$header</span><span class="p">,</span> <span class="nv">$params</span><span class="p">);</span></div><div class='line' id='LC531'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC532'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">return</span> <span class="nv">$rt</span><span class="p">;</span></div><div class='line' id='LC533'>&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC534'><br/></div><div class='line' id='LC535'>&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC536'><span class="sd">   * Outputs debugging info via user-defined method</span></div><div class='line' id='LC537'><span class="sd">   * @param string $str</span></div><div class='line' id='LC538'><span class="sd">   */</span></div><div class='line' id='LC539'>&nbsp;&nbsp;<span class="k">protected</span> <span class="k">function</span> <span class="nf">edebug</span><span class="p">(</span><span class="nv">$str</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC540'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">switch</span> <span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">Debugoutput</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC541'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">case</span> <span class="s1">&#39;error_log&#39;</span><span class="o">:</span></div><div class='line' id='LC542'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nb">error_log</span><span class="p">(</span><span class="nv">$str</span><span class="p">);</span></div><div class='line' id='LC543'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">break</span><span class="p">;</span></div><div class='line' id='LC544'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">case</span> <span class="s1">&#39;html&#39;</span><span class="o">:</span></div><div class='line' id='LC545'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">//Cleans up output a bit for a better looking display that&#39;s HTML-safe</span></div><div class='line' id='LC546'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">echo</span> <span class="nb">htmlentities</span><span class="p">(</span><span class="nb">preg_replace</span><span class="p">(</span><span class="s1">&#39;/[\r\n]+/&#39;</span><span class="p">,</span> <span class="s1">&#39;&#39;</span><span class="p">,</span> <span class="nv">$str</span><span class="p">),</span> <span class="nx">ENT_QUOTES</span><span class="p">,</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">CharSet</span><span class="p">)</span><span class="o">.</span><span class="s2">&quot;&lt;br&gt;</span><span class="se">\n</span><span class="s2">&quot;</span><span class="p">;</span></div><div class='line' id='LC547'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">break</span><span class="p">;</span></div><div class='line' id='LC548'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">case</span> <span class="s1">&#39;echo&#39;</span><span class="o">:</span></div><div class='line' id='LC549'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">default</span><span class="o">:</span></div><div class='line' id='LC550'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">//Just echoes exactly what was received</span></div><div class='line' id='LC551'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">echo</span> <span class="nv">$str</span><span class="p">;</span></div><div class='line' id='LC552'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC553'>&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC554'><br/></div><div class='line' id='LC555'>&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC556'><span class="sd">   * Constructor</span></div><div class='line' id='LC557'><span class="sd">   * @param boolean $exceptions Should we throw external exceptions?</span></div><div class='line' id='LC558'><span class="sd">   */</span></div><div class='line' id='LC559'>&nbsp;&nbsp;<span class="k">public</span> <span class="k">function</span> <span class="nf">__construct</span><span class="p">(</span><span class="nv">$exceptions</span> <span class="o">=</span> <span class="k">false</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC560'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">exceptions</span> <span class="o">=</span> <span class="p">(</span><span class="nv">$exceptions</span> <span class="o">==</span> <span class="k">true</span><span class="p">);</span></div><div class='line' id='LC561'>&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC562'><br/></div><div class='line' id='LC563'>&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC564'><span class="sd">   * Destructor</span></div><div class='line' id='LC565'><span class="sd">   */</span></div><div class='line' id='LC566'>&nbsp;&nbsp;<span class="k">public</span> <span class="k">function</span> <span class="nf">__destruct</span><span class="p">()</span> <span class="p">{</span></div><div class='line' id='LC567'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span> <span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">Mailer</span> <span class="o">==</span> <span class="s1">&#39;smtp&#39;</span><span class="p">)</span> <span class="p">{</span> <span class="c1">//Close any open SMTP connection nicely</span></div><div class='line' id='LC568'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">SmtpClose</span><span class="p">();</span></div><div class='line' id='LC569'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC570'>&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC571'><br/></div><div class='line' id='LC572'>&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC573'><span class="sd">   * Sets message type to HTML.</span></div><div class='line' id='LC574'><span class="sd">   * @param bool $ishtml</span></div><div class='line' id='LC575'><span class="sd">   * @return void</span></div><div class='line' id='LC576'><span class="sd">   */</span></div><div class='line' id='LC577'>&nbsp;&nbsp;<span class="k">public</span> <span class="k">function</span> <span class="nf">IsHTML</span><span class="p">(</span><span class="nv">$ishtml</span> <span class="o">=</span> <span class="k">true</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC578'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span> <span class="p">(</span><span class="nv">$ishtml</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC579'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">ContentType</span> <span class="o">=</span> <span class="s1">&#39;text/html&#39;</span><span class="p">;</span></div><div class='line' id='LC580'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span> <span class="k">else</span> <span class="p">{</span></div><div class='line' id='LC581'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">ContentType</span> <span class="o">=</span> <span class="s1">&#39;text/plain&#39;</span><span class="p">;</span></div><div class='line' id='LC582'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC583'>&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC584'><br/></div><div class='line' id='LC585'>&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC586'><span class="sd">   * Sets Mailer to send message using SMTP.</span></div><div class='line' id='LC587'><span class="sd">   * @return void</span></div><div class='line' id='LC588'><span class="sd">   */</span></div><div class='line' id='LC589'>&nbsp;&nbsp;<span class="k">public</span> <span class="k">function</span> <span class="nf">IsSMTP</span><span class="p">()</span> <span class="p">{</span></div><div class='line' id='LC590'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">Mailer</span> <span class="o">=</span> <span class="s1">&#39;smtp&#39;</span><span class="p">;</span></div><div class='line' id='LC591'>&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC592'><br/></div><div class='line' id='LC593'>&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC594'><span class="sd">   * Sets Mailer to send message using PHP mail() function.</span></div><div class='line' id='LC595'><span class="sd">   * @return void</span></div><div class='line' id='LC596'><span class="sd">   */</span></div><div class='line' id='LC597'>&nbsp;&nbsp;<span class="k">public</span> <span class="k">function</span> <span class="nf">IsMail</span><span class="p">()</span> <span class="p">{</span></div><div class='line' id='LC598'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">Mailer</span> <span class="o">=</span> <span class="s1">&#39;mail&#39;</span><span class="p">;</span></div><div class='line' id='LC599'>&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC600'><br/></div><div class='line' id='LC601'>&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC602'><span class="sd">   * Sets Mailer to send message using the $Sendmail program.</span></div><div class='line' id='LC603'><span class="sd">   * @return void</span></div><div class='line' id='LC604'><span class="sd">   */</span></div><div class='line' id='LC605'>&nbsp;&nbsp;<span class="k">public</span> <span class="k">function</span> <span class="nf">IsSendmail</span><span class="p">()</span> <span class="p">{</span></div><div class='line' id='LC606'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span> <span class="p">(</span><span class="o">!</span><span class="nb">stristr</span><span class="p">(</span><span class="nb">ini_get</span><span class="p">(</span><span class="s1">&#39;sendmail_path&#39;</span><span class="p">),</span> <span class="s1">&#39;sendmail&#39;</span><span class="p">))</span> <span class="p">{</span></div><div class='line' id='LC607'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">Sendmail</span> <span class="o">=</span> <span class="s1">&#39;/var/qmail/bin/sendmail&#39;</span><span class="p">;</span></div><div class='line' id='LC608'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC609'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">Mailer</span> <span class="o">=</span> <span class="s1">&#39;sendmail&#39;</span><span class="p">;</span></div><div class='line' id='LC610'>&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC611'><br/></div><div class='line' id='LC612'>&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC613'><span class="sd">   * Sets Mailer to send message using the qmail MTA.</span></div><div class='line' id='LC614'><span class="sd">   * @return void</span></div><div class='line' id='LC615'><span class="sd">   */</span></div><div class='line' id='LC616'>&nbsp;&nbsp;<span class="k">public</span> <span class="k">function</span> <span class="nf">IsQmail</span><span class="p">()</span> <span class="p">{</span></div><div class='line' id='LC617'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span> <span class="p">(</span><span class="nb">stristr</span><span class="p">(</span><span class="nb">ini_get</span><span class="p">(</span><span class="s1">&#39;sendmail_path&#39;</span><span class="p">),</span> <span class="s1">&#39;qmail&#39;</span><span class="p">))</span> <span class="p">{</span></div><div class='line' id='LC618'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">Sendmail</span> <span class="o">=</span> <span class="s1">&#39;/var/qmail/bin/sendmail&#39;</span><span class="p">;</span></div><div class='line' id='LC619'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC620'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">Mailer</span> <span class="o">=</span> <span class="s1">&#39;sendmail&#39;</span><span class="p">;</span></div><div class='line' id='LC621'>&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC622'><br/></div><div class='line' id='LC623'>&nbsp;&nbsp;<span class="c1">/////////////////////////////////////////////////</span></div><div class='line' id='LC624'>&nbsp;&nbsp;<span class="c1">// METHODS, RECIPIENTS</span></div><div class='line' id='LC625'>&nbsp;&nbsp;<span class="c1">/////////////////////////////////////////////////</span></div><div class='line' id='LC626'><br/></div><div class='line' id='LC627'>&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC628'><span class="sd">   * Adds a &quot;To&quot; address.</span></div><div class='line' id='LC629'><span class="sd">   * @param string $address</span></div><div class='line' id='LC630'><span class="sd">   * @param string $name</span></div><div class='line' id='LC631'><span class="sd">   * @return boolean true on success, false if address already used</span></div><div class='line' id='LC632'><span class="sd">   */</span></div><div class='line' id='LC633'>&nbsp;&nbsp;<span class="k">public</span> <span class="k">function</span> <span class="nf">AddAddress</span><span class="p">(</span><span class="nv">$address</span><span class="p">,</span> <span class="nv">$name</span> <span class="o">=</span> <span class="s1">&#39;&#39;</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC634'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">return</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">AddAnAddress</span><span class="p">(</span><span class="s1">&#39;to&#39;</span><span class="p">,</span> <span class="nv">$address</span><span class="p">,</span> <span class="nv">$name</span><span class="p">);</span></div><div class='line' id='LC635'>&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC636'><br/></div><div class='line' id='LC637'>&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC638'><span class="sd">   * Adds a &quot;Cc&quot; address.</span></div><div class='line' id='LC639'><span class="sd">   * Note: this function works with the SMTP mailer on win32, not with the &quot;mail&quot; mailer.</span></div><div class='line' id='LC640'><span class="sd">   * @param string $address</span></div><div class='line' id='LC641'><span class="sd">   * @param string $name</span></div><div class='line' id='LC642'><span class="sd">   * @return boolean true on success, false if address already used</span></div><div class='line' id='LC643'><span class="sd">   */</span></div><div class='line' id='LC644'>&nbsp;&nbsp;<span class="k">public</span> <span class="k">function</span> <span class="nf">AddCC</span><span class="p">(</span><span class="nv">$address</span><span class="p">,</span> <span class="nv">$name</span> <span class="o">=</span> <span class="s1">&#39;&#39;</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC645'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">return</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">AddAnAddress</span><span class="p">(</span><span class="s1">&#39;cc&#39;</span><span class="p">,</span> <span class="nv">$address</span><span class="p">,</span> <span class="nv">$name</span><span class="p">);</span></div><div class='line' id='LC646'>&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC647'><br/></div><div class='line' id='LC648'>&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC649'><span class="sd">   * Adds a &quot;Bcc&quot; address.</span></div><div class='line' id='LC650'><span class="sd">   * Note: this function works with the SMTP mailer on win32, not with the &quot;mail&quot; mailer.</span></div><div class='line' id='LC651'><span class="sd">   * @param string $address</span></div><div class='line' id='LC652'><span class="sd">   * @param string $name</span></div><div class='line' id='LC653'><span class="sd">   * @return boolean true on success, false if address already used</span></div><div class='line' id='LC654'><span class="sd">   */</span></div><div class='line' id='LC655'>&nbsp;&nbsp;<span class="k">public</span> <span class="k">function</span> <span class="nf">AddBCC</span><span class="p">(</span><span class="nv">$address</span><span class="p">,</span> <span class="nv">$name</span> <span class="o">=</span> <span class="s1">&#39;&#39;</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC656'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">return</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">AddAnAddress</span><span class="p">(</span><span class="s1">&#39;bcc&#39;</span><span class="p">,</span> <span class="nv">$address</span><span class="p">,</span> <span class="nv">$name</span><span class="p">);</span></div><div class='line' id='LC657'>&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC658'><br/></div><div class='line' id='LC659'>&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC660'><span class="sd">   * Adds a &quot;Reply-to&quot; address.</span></div><div class='line' id='LC661'><span class="sd">   * @param string $address</span></div><div class='line' id='LC662'><span class="sd">   * @param string $name</span></div><div class='line' id='LC663'><span class="sd">   * @return boolean</span></div><div class='line' id='LC664'><span class="sd">   */</span></div><div class='line' id='LC665'>&nbsp;&nbsp;<span class="k">public</span> <span class="k">function</span> <span class="nf">AddReplyTo</span><span class="p">(</span><span class="nv">$address</span><span class="p">,</span> <span class="nv">$name</span> <span class="o">=</span> <span class="s1">&#39;&#39;</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC666'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">return</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">AddAnAddress</span><span class="p">(</span><span class="s1">&#39;Reply-To&#39;</span><span class="p">,</span> <span class="nv">$address</span><span class="p">,</span> <span class="nv">$name</span><span class="p">);</span></div><div class='line' id='LC667'>&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC668'><br/></div><div class='line' id='LC669'>&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC670'><span class="sd">   * Adds an address to one of the recipient arrays</span></div><div class='line' id='LC671'><span class="sd">   * Addresses that have been added already return false, but do not throw exceptions</span></div><div class='line' id='LC672'><span class="sd">   * @param string $kind One of &#39;to&#39;, &#39;cc&#39;, &#39;bcc&#39;, &#39;ReplyTo&#39;</span></div><div class='line' id='LC673'><span class="sd">   * @param string $address The email address to send to</span></div><div class='line' id='LC674'><span class="sd">   * @param string $name</span></div><div class='line' id='LC675'><span class="sd">   * @throws phpmailerException</span></div><div class='line' id='LC676'><span class="sd">   * @return boolean true on success, false if address already used or invalid in some way</span></div><div class='line' id='LC677'><span class="sd">   * @access protected</span></div><div class='line' id='LC678'><span class="sd">   */</span></div><div class='line' id='LC679'>&nbsp;&nbsp;<span class="k">protected</span> <span class="k">function</span> <span class="nf">AddAnAddress</span><span class="p">(</span><span class="nv">$kind</span><span class="p">,</span> <span class="nv">$address</span><span class="p">,</span> <span class="nv">$name</span> <span class="o">=</span> <span class="s1">&#39;&#39;</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC680'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span> <span class="p">(</span><span class="o">!</span><span class="nb">preg_match</span><span class="p">(</span><span class="s1">&#39;/^(to|cc|bcc|Reply-To)$/&#39;</span><span class="p">,</span> <span class="nv">$kind</span><span class="p">))</span> <span class="p">{</span></div><div class='line' id='LC681'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">SetError</span><span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">Lang</span><span class="p">(</span><span class="s1">&#39;Invalid recipient array&#39;</span><span class="p">)</span><span class="o">.</span><span class="s1">&#39;: &#39;</span><span class="o">.</span><span class="nv">$kind</span><span class="p">);</span></div><div class='line' id='LC682'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span> <span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">exceptions</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC683'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">throw</span> <span class="k">new</span> <span class="nx">phpmailerException</span><span class="p">(</span><span class="s1">&#39;Invalid recipient array: &#39;</span> <span class="o">.</span> <span class="nv">$kind</span><span class="p">);</span></div><div class='line' id='LC684'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC685'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span> <span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">SMTPDebug</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC686'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">edebug</span><span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">Lang</span><span class="p">(</span><span class="s1">&#39;Invalid recipient array&#39;</span><span class="p">)</span><span class="o">.</span><span class="s1">&#39;: &#39;</span><span class="o">.</span><span class="nv">$kind</span><span class="p">);</span></div><div class='line' id='LC687'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC688'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">return</span> <span class="k">false</span><span class="p">;</span></div><div class='line' id='LC689'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC690'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$address</span> <span class="o">=</span> <span class="nx">trim</span><span class="p">(</span><span class="nv">$address</span><span class="p">);</span></div><div class='line' id='LC691'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$name</span> <span class="o">=</span> <span class="nx">trim</span><span class="p">(</span><span class="nb">preg_replace</span><span class="p">(</span><span class="s1">&#39;/[\r\n]+/&#39;</span><span class="p">,</span> <span class="s1">&#39;&#39;</span><span class="p">,</span> <span class="nv">$name</span><span class="p">));</span> <span class="c1">//Strip breaks and trim</span></div><div class='line' id='LC692'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span> <span class="p">(</span><span class="o">!</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">ValidateAddress</span><span class="p">(</span><span class="nv">$address</span><span class="p">))</span> <span class="p">{</span></div><div class='line' id='LC693'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">SetError</span><span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">Lang</span><span class="p">(</span><span class="s1">&#39;invalid_address&#39;</span><span class="p">)</span><span class="o">.</span><span class="s1">&#39;: &#39;</span><span class="o">.</span> <span class="nv">$address</span><span class="p">);</span></div><div class='line' id='LC694'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span> <span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">exceptions</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC695'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">throw</span> <span class="k">new</span> <span class="nx">phpmailerException</span><span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">Lang</span><span class="p">(</span><span class="s1">&#39;invalid_address&#39;</span><span class="p">)</span><span class="o">.</span><span class="s1">&#39;: &#39;</span><span class="o">.</span><span class="nv">$address</span><span class="p">);</span></div><div class='line' id='LC696'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC697'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span> <span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">SMTPDebug</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC698'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">edebug</span><span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">Lang</span><span class="p">(</span><span class="s1">&#39;invalid_address&#39;</span><span class="p">)</span><span class="o">.</span><span class="s1">&#39;: &#39;</span><span class="o">.</span><span class="nv">$address</span><span class="p">);</span></div><div class='line' id='LC699'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC700'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">return</span> <span class="k">false</span><span class="p">;</span></div><div class='line' id='LC701'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC702'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span> <span class="p">(</span><span class="nv">$kind</span> <span class="o">!=</span> <span class="s1">&#39;Reply-To&#39;</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC703'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span> <span class="p">(</span><span class="o">!</span><span class="nb">isset</span><span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">all_recipients</span><span class="p">[</span><span class="nx">strtolower</span><span class="p">(</span><span class="nv">$address</span><span class="p">)]))</span> <span class="p">{</span></div><div class='line' id='LC704'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nb">array_push</span><span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="nv">$kind</span><span class="p">,</span> <span class="k">array</span><span class="p">(</span><span class="nv">$address</span><span class="p">,</span> <span class="nv">$name</span><span class="p">));</span></div><div class='line' id='LC705'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">all_recipients</span><span class="p">[</span><span class="nx">strtolower</span><span class="p">(</span><span class="nv">$address</span><span class="p">)]</span> <span class="o">=</span> <span class="k">true</span><span class="p">;</span></div><div class='line' id='LC706'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">return</span> <span class="k">true</span><span class="p">;</span></div><div class='line' id='LC707'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC708'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span> <span class="k">else</span> <span class="p">{</span></div><div class='line' id='LC709'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span> <span class="p">(</span><span class="o">!</span><span class="nb">array_key_exists</span><span class="p">(</span><span class="nx">strtolower</span><span class="p">(</span><span class="nv">$address</span><span class="p">),</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">ReplyTo</span><span class="p">))</span> <span class="p">{</span></div><div class='line' id='LC710'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">ReplyTo</span><span class="p">[</span><span class="nx">strtolower</span><span class="p">(</span><span class="nv">$address</span><span class="p">)]</span> <span class="o">=</span> <span class="k">array</span><span class="p">(</span><span class="nv">$address</span><span class="p">,</span> <span class="nv">$name</span><span class="p">);</span></div><div class='line' id='LC711'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">return</span> <span class="k">true</span><span class="p">;</span></div><div class='line' id='LC712'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC713'>&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC714'>&nbsp;&nbsp;<span class="k">return</span> <span class="k">false</span><span class="p">;</span></div><div class='line' id='LC715'><span class="p">}</span></div><div class='line' id='LC716'><br/></div><div class='line' id='LC717'>&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC718'><span class="sd">   * Set the From and FromName properties</span></div><div class='line' id='LC719'><span class="sd">   * @param string $address</span></div><div class='line' id='LC720'><span class="sd">   * @param string $name</span></div><div class='line' id='LC721'><span class="sd">   * @param boolean $auto Whether to also set the Sender address, defaults to true</span></div><div class='line' id='LC722'><span class="sd">   * @throws phpmailerException</span></div><div class='line' id='LC723'><span class="sd">   * @return boolean</span></div><div class='line' id='LC724'><span class="sd">   */</span></div><div class='line' id='LC725'>&nbsp;&nbsp;<span class="k">public</span> <span class="k">function</span> <span class="nf">SetFrom</span><span class="p">(</span><span class="nv">$address</span><span class="p">,</span> <span class="nv">$name</span> <span class="o">=</span> <span class="s1">&#39;&#39;</span><span class="p">,</span> <span class="nv">$auto</span> <span class="o">=</span> <span class="k">true</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC726'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$address</span> <span class="o">=</span> <span class="nx">trim</span><span class="p">(</span><span class="nv">$address</span><span class="p">);</span></div><div class='line' id='LC727'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$name</span> <span class="o">=</span> <span class="nx">trim</span><span class="p">(</span><span class="nb">preg_replace</span><span class="p">(</span><span class="s1">&#39;/[\r\n]+/&#39;</span><span class="p">,</span> <span class="s1">&#39;&#39;</span><span class="p">,</span> <span class="nv">$name</span><span class="p">));</span> <span class="c1">//Strip breaks and trim</span></div><div class='line' id='LC728'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span> <span class="p">(</span><span class="o">!</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">ValidateAddress</span><span class="p">(</span><span class="nv">$address</span><span class="p">))</span> <span class="p">{</span></div><div class='line' id='LC729'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">SetError</span><span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">Lang</span><span class="p">(</span><span class="s1">&#39;invalid_address&#39;</span><span class="p">)</span><span class="o">.</span><span class="s1">&#39;: &#39;</span><span class="o">.</span> <span class="nv">$address</span><span class="p">);</span></div><div class='line' id='LC730'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span> <span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">exceptions</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC731'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">throw</span> <span class="k">new</span> <span class="nx">phpmailerException</span><span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">Lang</span><span class="p">(</span><span class="s1">&#39;invalid_address&#39;</span><span class="p">)</span><span class="o">.</span><span class="s1">&#39;: &#39;</span><span class="o">.</span><span class="nv">$address</span><span class="p">);</span></div><div class='line' id='LC732'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC733'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span> <span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">SMTPDebug</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC734'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">edebug</span><span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">Lang</span><span class="p">(</span><span class="s1">&#39;invalid_address&#39;</span><span class="p">)</span><span class="o">.</span><span class="s1">&#39;: &#39;</span><span class="o">.</span><span class="nv">$address</span><span class="p">);</span></div><div class='line' id='LC735'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC736'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">return</span> <span class="k">false</span><span class="p">;</span></div><div class='line' id='LC737'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC738'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">From</span> <span class="o">=</span> <span class="nv">$address</span><span class="p">;</span></div><div class='line' id='LC739'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">FromName</span> <span class="o">=</span> <span class="nv">$name</span><span class="p">;</span></div><div class='line' id='LC740'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span> <span class="p">(</span><span class="nv">$auto</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC741'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span> <span class="p">(</span><span class="k">empty</span><span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">Sender</span><span class="p">))</span> <span class="p">{</span></div><div class='line' id='LC742'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">Sender</span> <span class="o">=</span> <span class="nv">$address</span><span class="p">;</span></div><div class='line' id='LC743'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC744'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC745'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">return</span> <span class="k">true</span><span class="p">;</span></div><div class='line' id='LC746'>&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC747'><br/></div><div class='line' id='LC748'>&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC749'><span class="sd">   * Check that a string looks roughly like an email address should</span></div><div class='line' id='LC750'><span class="sd">   * Static so it can be used without instantiation, public so people can overload</span></div><div class='line' id='LC751'><span class="sd">   * Conforms to RFC5322: Uses *correct* regex on which FILTER_VALIDATE_EMAIL is</span></div><div class='line' id='LC752'><span class="sd">   * based; So why not use FILTER_VALIDATE_EMAIL? Because it was broken to</span></div><div class='line' id='LC753'><span class="sd">   * not allow a@b type valid addresses :(</span></div><div class='line' id='LC754'><span class="sd">   * @link http://squiloople.com/2009/12/20/email-address-validation/</span></div><div class='line' id='LC755'><span class="sd">   * @copyright regex Copyright Michael Rushton 2009-10 | http://squiloople.com/ | Feel free to use and redistribute this code. But please keep this copyright notice.</span></div><div class='line' id='LC756'><span class="sd">   * @param string $address The email address to check</span></div><div class='line' id='LC757'><span class="sd">   * @return boolean</span></div><div class='line' id='LC758'><span class="sd">   * @static</span></div><div class='line' id='LC759'><span class="sd">   * @access public</span></div><div class='line' id='LC760'><span class="sd">   */</span></div><div class='line' id='LC761'>&nbsp;&nbsp;<span class="k">public</span> <span class="k">static</span> <span class="k">function</span> <span class="nf">ValidateAddress</span><span class="p">(</span><span class="nv">$address</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC762'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span> <span class="p">(</span><span class="nb">defined</span><span class="p">(</span><span class="s1">&#39;PCRE_VERSION&#39;</span><span class="p">))</span> <span class="p">{</span> <span class="c1">//Check this instead of extension_loaded so it works when that function is disabled</span></div><div class='line' id='LC763'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span> <span class="p">(</span><span class="nb">version_compare</span><span class="p">(</span><span class="nx">PCRE_VERSION</span><span class="p">,</span> <span class="s1">&#39;8.0&#39;</span><span class="p">)</span> <span class="o">&gt;=</span> <span class="mi">0</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC764'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">return</span> <span class="p">(</span><span class="nx">boolean</span><span class="p">)</span><span class="nb">preg_match</span><span class="p">(</span><span class="s1">&#39;/^(?!(?&gt;(?1)&quot;?(?&gt;\\\[ -~]|[^&quot;])&quot;?(?1)){255,})(?!(?&gt;(?1)&quot;?(?&gt;\\\[ -~]|[^&quot;])&quot;?(?1)){65,}@)((?&gt;(?&gt;(?&gt;((?&gt;(?&gt;(?&gt;\x0D\x0A)?[\t ])+|(?&gt;[\t ]*\x0D\x0A)?[\t ]+)?)(\((?&gt;(?2)(?&gt;[\x01-\x08\x0B\x0C\x0E-\&#39;*-\[\]-\x7F]|\\\[\x00-\x7F]|(?3)))*(?2)\)))+(?2))|(?2))?)([!#-\&#39;*+\/-9=?^-~-]+|&quot;(?&gt;(?2)(?&gt;[\x01-\x08\x0B\x0C\x0E-!#-\[\]-\x7F]|\\\[\x00-\x7F]))*(?2)&quot;)(?&gt;(?1)\.(?1)(?4))*(?1)@(?!(?1)[a-z0-9-]{64,})(?1)(?&gt;([a-z0-9](?&gt;[a-z0-9-]*[a-z0-9])?)(?&gt;(?1)\.(?!(?1)[a-z0-9-]{64,})(?1)(?5)){0,126}|\[(?:(?&gt;IPv6:(?&gt;([a-f0-9]{1,4})(?&gt;:(?6)){7}|(?!(?:.*[a-f0-9][:\]]){8,})((?6)(?&gt;:(?6)){0,6})?::(?7)?))|(?&gt;(?&gt;IPv6:(?&gt;(?6)(?&gt;:(?6)){5}:|(?!(?:.*[a-f0-9]:){6,})(?8)?::(?&gt;((?6)(?&gt;:(?6)){0,4}):)?))?(25[0-5]|2[0-4][0-9]|1[0-9]{2}|[1-9]?[0-9])(?&gt;\.(?9)){3}))\])(?1)$/isD&#39;</span><span class="p">,</span> <span class="nv">$address</span><span class="p">);</span></div><div class='line' id='LC765'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span> <span class="k">else</span> <span class="p">{</span></div><div class='line' id='LC766'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">//Fall back to an older regex that doesn&#39;t need a recent PCRE</span></div><div class='line' id='LC767'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">return</span> <span class="p">(</span><span class="nx">boolean</span><span class="p">)</span><span class="nb">preg_match</span><span class="p">(</span><span class="s1">&#39;/^(?!(?&gt;&quot;?(?&gt;\\\[ -~]|[^&quot;])&quot;?){255,})(?!(?&gt;&quot;?(?&gt;\\\[ -~]|[^&quot;])&quot;?){65,}@)(?&gt;[!#-\&#39;*+\/-9=?^-~-]+|&quot;(?&gt;(?&gt;[\x01-\x08\x0B\x0C\x0E-!#-\[\]-\x7F]|\\\[\x00-\xFF]))*&quot;)(?&gt;\.(?&gt;[!#-\&#39;*+\/-9=?^-~-]+|&quot;(?&gt;(?&gt;[\x01-\x08\x0B\x0C\x0E-!#-\[\]-\x7F]|\\\[\x00-\xFF]))*&quot;))*@(?&gt;(?![a-z0-9-]{64,})(?&gt;[a-z0-9](?&gt;[a-z0-9-]*[a-z0-9])?)(?&gt;\.(?![a-z0-9-]{64,})(?&gt;[a-z0-9](?&gt;[a-z0-9-]*[a-z0-9])?)){0,126}|\[(?:(?&gt;IPv6:(?&gt;(?&gt;[a-f0-9]{1,4})(?&gt;:[a-f0-9]{1,4}){7}|(?!(?:.*[a-f0-9][:\]]){8,})(?&gt;[a-f0-9]{1,4}(?&gt;:[a-f0-9]{1,4}){0,6})?::(?&gt;[a-f0-9]{1,4}(?&gt;:[a-f0-9]{1,4}){0,6})?))|(?&gt;(?&gt;IPv6:(?&gt;[a-f0-9]{1,4}(?&gt;:[a-f0-9]{1,4}){5}:|(?!(?:.*[a-f0-9]:){6,})(?&gt;[a-f0-9]{1,4}(?&gt;:[a-f0-9]{1,4}){0,4})?::(?&gt;(?:[a-f0-9]{1,4}(?&gt;:[a-f0-9]{1,4}){0,4}):)?))?(?&gt;25[0-5]|2[0-4][0-9]|1[0-9]{2}|[1-9]?[0-9])(?&gt;\.(?&gt;25[0-5]|2[0-4][0-9]|1[0-9]{2}|[1-9]?[0-9])){3}))\])$/isD&#39;</span><span class="p">,</span> <span class="nv">$address</span><span class="p">);</span></div><div class='line' id='LC768'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC769'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span> <span class="k">else</span> <span class="p">{</span></div><div class='line' id='LC770'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">//No PCRE! Do something _very_ approximate!</span></div><div class='line' id='LC771'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">//Check the address is 3 chars or longer and contains an @ that&#39;s not the first or last char</span></div><div class='line' id='LC772'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">return</span> <span class="p">(</span><span class="nb">strlen</span><span class="p">(</span><span class="nv">$address</span><span class="p">)</span> <span class="o">&gt;=</span> <span class="mi">3</span> <span class="k">and</span> <span class="nb">strpos</span><span class="p">(</span><span class="nv">$address</span><span class="p">,</span> <span class="s1">&#39;@&#39;</span><span class="p">)</span> <span class="o">&gt;=</span> <span class="mi">1</span> <span class="k">and</span> <span class="nb">strpos</span><span class="p">(</span><span class="nv">$address</span><span class="p">,</span> <span class="s1">&#39;@&#39;</span><span class="p">)</span> <span class="o">!=</span> <span class="nb">strlen</span><span class="p">(</span><span class="nv">$address</span><span class="p">)</span> <span class="o">-</span> <span class="mi">1</span><span class="p">);</span></div><div class='line' id='LC773'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC774'>&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC775'><br/></div><div class='line' id='LC776'>&nbsp;&nbsp;<span class="c1">/////////////////////////////////////////////////</span></div><div class='line' id='LC777'>&nbsp;&nbsp;<span class="c1">// METHODS, MAIL SENDING</span></div><div class='line' id='LC778'>&nbsp;&nbsp;<span class="c1">/////////////////////////////////////////////////</span></div><div class='line' id='LC779'><br/></div><div class='line' id='LC780'>&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC781'><span class="sd">   * Creates message and assigns Mailer. If the message is</span></div><div class='line' id='LC782'><span class="sd">   * not sent successfully then it returns false.  Use the ErrorInfo</span></div><div class='line' id='LC783'><span class="sd">   * variable to view description of the error.</span></div><div class='line' id='LC784'><span class="sd">   * @throws phpmailerException</span></div><div class='line' id='LC785'><span class="sd">   * @return bool</span></div><div class='line' id='LC786'><span class="sd">   */</span></div><div class='line' id='LC787'>&nbsp;&nbsp;<span class="k">public</span> <span class="k">function</span> <span class="nf">Send</span><span class="p">()</span> <span class="p">{</span></div><div class='line' id='LC788'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">try</span> <span class="p">{</span></div><div class='line' id='LC789'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span><span class="p">(</span><span class="o">!</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">PreSend</span><span class="p">())</span> <span class="k">return</span> <span class="k">false</span><span class="p">;</span></div><div class='line' id='LC790'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">return</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">PostSend</span><span class="p">();</span></div><div class='line' id='LC791'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span> <span class="k">catch</span> <span class="p">(</span><span class="nx">phpmailerException</span> <span class="nv">$e</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC792'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">mailHeader</span> <span class="o">=</span> <span class="s1">&#39;&#39;</span><span class="p">;</span></div><div class='line' id='LC793'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">SetError</span><span class="p">(</span><span class="nv">$e</span><span class="o">-&gt;</span><span class="na">getMessage</span><span class="p">());</span></div><div class='line' id='LC794'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span> <span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">exceptions</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC795'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">throw</span> <span class="nv">$e</span><span class="p">;</span></div><div class='line' id='LC796'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC797'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">return</span> <span class="k">false</span><span class="p">;</span></div><div class='line' id='LC798'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC799'>&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC800'><br/></div><div class='line' id='LC801'>&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC802'><span class="sd">   * Prep mail by constructing all message entities</span></div><div class='line' id='LC803'><span class="sd">   * @throws phpmailerException</span></div><div class='line' id='LC804'><span class="sd">   * @return bool</span></div><div class='line' id='LC805'><span class="sd">   */</span></div><div class='line' id='LC806'>&nbsp;&nbsp;<span class="k">public</span> <span class="k">function</span> <span class="nf">PreSend</span><span class="p">()</span> <span class="p">{</span></div><div class='line' id='LC807'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">try</span> <span class="p">{</span></div><div class='line' id='LC808'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">mailHeader</span> <span class="o">=</span> <span class="s2">&quot;&quot;</span><span class="p">;</span></div><div class='line' id='LC809'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span> <span class="p">((</span><span class="nb">count</span><span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">to</span><span class="p">)</span> <span class="o">+</span> <span class="nb">count</span><span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">cc</span><span class="p">)</span> <span class="o">+</span> <span class="nb">count</span><span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">bcc</span><span class="p">))</span> <span class="o">&lt;</span> <span class="mi">1</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC810'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">throw</span> <span class="k">new</span> <span class="nx">phpmailerException</span><span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">Lang</span><span class="p">(</span><span class="s1">&#39;provide_address&#39;</span><span class="p">),</span> <span class="nx">self</span><span class="o">::</span><span class="na">STOP_CRITICAL</span><span class="p">);</span></div><div class='line' id='LC811'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC812'><br/></div><div class='line' id='LC813'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// Set whether the message is multipart/alternative</span></div><div class='line' id='LC814'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span><span class="p">(</span><span class="o">!</span><span class="k">empty</span><span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">AltBody</span><span class="p">))</span> <span class="p">{</span></div><div class='line' id='LC815'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">ContentType</span> <span class="o">=</span> <span class="s1">&#39;multipart/alternative&#39;</span><span class="p">;</span></div><div class='line' id='LC816'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC817'><br/></div><div class='line' id='LC818'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">error_count</span> <span class="o">=</span> <span class="mi">0</span><span class="p">;</span> <span class="c1">// reset errors</span></div><div class='line' id='LC819'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">SetMessageType</span><span class="p">();</span></div><div class='line' id='LC820'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">//Refuse to send an empty message unless we are specifically allowing it</span></div><div class='line' id='LC821'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span> <span class="p">(</span><span class="o">!</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">AllowEmpty</span> <span class="k">and</span> <span class="k">empty</span><span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">Body</span><span class="p">))</span> <span class="p">{</span></div><div class='line' id='LC822'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">throw</span> <span class="k">new</span> <span class="nx">phpmailerException</span><span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">Lang</span><span class="p">(</span><span class="s1">&#39;empty_message&#39;</span><span class="p">),</span> <span class="nx">self</span><span class="o">::</span><span class="na">STOP_CRITICAL</span><span class="p">);</span></div><div class='line' id='LC823'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC824'><br/></div><div class='line' id='LC825'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">MIMEHeader</span> <span class="o">=</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">CreateHeader</span><span class="p">();</span></div><div class='line' id='LC826'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">MIMEBody</span> <span class="o">=</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">CreateBody</span><span class="p">();</span></div><div class='line' id='LC827'><br/></div><div class='line' id='LC828'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// To capture the complete message when using mail(), create</span></div><div class='line' id='LC829'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// an extra header list which CreateHeader() doesn&#39;t fold in</span></div><div class='line' id='LC830'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span> <span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">Mailer</span> <span class="o">==</span> <span class="s1">&#39;mail&#39;</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC831'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span> <span class="p">(</span><span class="nb">count</span><span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">to</span><span class="p">)</span> <span class="o">&gt;</span> <span class="mi">0</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC832'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">mailHeader</span> <span class="o">.=</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">AddrAppend</span><span class="p">(</span><span class="s2">&quot;To&quot;</span><span class="p">,</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">to</span><span class="p">);</span></div><div class='line' id='LC833'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span> <span class="k">else</span> <span class="p">{</span></div><div class='line' id='LC834'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">mailHeader</span> <span class="o">.=</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">HeaderLine</span><span class="p">(</span><span class="s2">&quot;To&quot;</span><span class="p">,</span> <span class="s2">&quot;undisclosed-recipients:;&quot;</span><span class="p">);</span></div><div class='line' id='LC835'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC836'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">mailHeader</span> <span class="o">.=</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">HeaderLine</span><span class="p">(</span><span class="s1">&#39;Subject&#39;</span><span class="p">,</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">EncodeHeader</span><span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">SecureHeader</span><span class="p">(</span><span class="nx">trim</span><span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">Subject</span><span class="p">))));</span></div><div class='line' id='LC837'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC838'><br/></div><div class='line' id='LC839'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// digitally sign with DKIM if enabled</span></div><div class='line' id='LC840'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span> <span class="p">(</span><span class="o">!</span><span class="k">empty</span><span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">DKIM_domain</span><span class="p">)</span> <span class="o">&amp;&amp;</span> <span class="o">!</span><span class="k">empty</span><span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">DKIM_private</span><span class="p">)</span> <span class="o">&amp;&amp;</span> <span class="o">!</span><span class="k">empty</span><span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">DKIM_selector</span><span class="p">)</span> <span class="o">&amp;&amp;</span> <span class="o">!</span><span class="k">empty</span><span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">DKIM_domain</span><span class="p">)</span> <span class="o">&amp;&amp;</span> <span class="nb">file_exists</span><span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">DKIM_private</span><span class="p">))</span> <span class="p">{</span></div><div class='line' id='LC841'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$header_dkim</span> <span class="o">=</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">DKIM_Add</span><span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">MIMEHeader</span> <span class="o">.</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">mailHeader</span><span class="p">,</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">EncodeHeader</span><span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">SecureHeader</span><span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">Subject</span><span class="p">)),</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">MIMEBody</span><span class="p">);</span></div><div class='line' id='LC842'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">MIMEHeader</span> <span class="o">=</span> <span class="nb">str_replace</span><span class="p">(</span><span class="s2">&quot;</span><span class="se">\r\n</span><span class="s2">&quot;</span><span class="p">,</span> <span class="s2">&quot;</span><span class="se">\n</span><span class="s2">&quot;</span><span class="p">,</span> <span class="nv">$header_dkim</span><span class="p">)</span> <span class="o">.</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">MIMEHeader</span><span class="p">;</span></div><div class='line' id='LC843'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC844'><br/></div><div class='line' id='LC845'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">return</span> <span class="k">true</span><span class="p">;</span></div><div class='line' id='LC846'><br/></div><div class='line' id='LC847'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span> <span class="k">catch</span> <span class="p">(</span><span class="nx">phpmailerException</span> <span class="nv">$e</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC848'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">SetError</span><span class="p">(</span><span class="nv">$e</span><span class="o">-&gt;</span><span class="na">getMessage</span><span class="p">());</span></div><div class='line' id='LC849'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span> <span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">exceptions</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC850'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">throw</span> <span class="nv">$e</span><span class="p">;</span></div><div class='line' id='LC851'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC852'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">return</span> <span class="k">false</span><span class="p">;</span></div><div class='line' id='LC853'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC854'>&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC855'><br/></div><div class='line' id='LC856'>&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC857'><span class="sd">   * Actual Email transport function</span></div><div class='line' id='LC858'><span class="sd">   * Send the email via the selected mechanism</span></div><div class='line' id='LC859'><span class="sd">   * @throws phpmailerException</span></div><div class='line' id='LC860'><span class="sd">   * @return bool</span></div><div class='line' id='LC861'><span class="sd">   */</span></div><div class='line' id='LC862'>&nbsp;&nbsp;<span class="k">public</span> <span class="k">function</span> <span class="nf">PostSend</span><span class="p">()</span> <span class="p">{</span></div><div class='line' id='LC863'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">try</span> <span class="p">{</span></div><div class='line' id='LC864'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// Choose the mailer and send through it</span></div><div class='line' id='LC865'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">switch</span><span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">Mailer</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC866'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">case</span> <span class="s1">&#39;sendmail&#39;</span><span class="o">:</span></div><div class='line' id='LC867'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">return</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">SendmailSend</span><span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">MIMEHeader</span><span class="p">,</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">MIMEBody</span><span class="p">);</span></div><div class='line' id='LC868'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">case</span> <span class="s1">&#39;smtp&#39;</span><span class="o">:</span></div><div class='line' id='LC869'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">return</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">SmtpSend</span><span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">MIMEHeader</span><span class="p">,</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">MIMEBody</span><span class="p">);</span></div><div class='line' id='LC870'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">case</span> <span class="s1">&#39;mail&#39;</span><span class="o">:</span></div><div class='line' id='LC871'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">return</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">MailSend</span><span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">MIMEHeader</span><span class="p">,</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">MIMEBody</span><span class="p">);</span></div><div class='line' id='LC872'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">default</span><span class="o">:</span></div><div class='line' id='LC873'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">return</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">MailSend</span><span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">MIMEHeader</span><span class="p">,</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">MIMEBody</span><span class="p">);</span></div><div class='line' id='LC874'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC875'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span> <span class="k">catch</span> <span class="p">(</span><span class="nx">phpmailerException</span> <span class="nv">$e</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC876'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">SetError</span><span class="p">(</span><span class="nv">$e</span><span class="o">-&gt;</span><span class="na">getMessage</span><span class="p">());</span></div><div class='line' id='LC877'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span> <span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">exceptions</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC878'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">throw</span> <span class="nv">$e</span><span class="p">;</span></div><div class='line' id='LC879'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC880'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span> <span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">SMTPDebug</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC881'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">edebug</span><span class="p">(</span><span class="nv">$e</span><span class="o">-&gt;</span><span class="na">getMessage</span><span class="p">()</span><span class="o">.</span><span class="s2">&quot;</span><span class="se">\n</span><span class="s2">&quot;</span><span class="p">);</span></div><div class='line' id='LC882'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC883'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC884'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">return</span> <span class="k">false</span><span class="p">;</span></div><div class='line' id='LC885'>&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC886'><br/></div><div class='line' id='LC887'>&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC888'><span class="sd">   * Sends mail using the $Sendmail program.</span></div><div class='line' id='LC889'><span class="sd">   * @param string $header The message headers</span></div><div class='line' id='LC890'><span class="sd">   * @param string $body The message body</span></div><div class='line' id='LC891'><span class="sd">   * @throws phpmailerException</span></div><div class='line' id='LC892'><span class="sd">   * @access protected</span></div><div class='line' id='LC893'><span class="sd">   * @return bool</span></div><div class='line' id='LC894'><span class="sd">   */</span></div><div class='line' id='LC895'>&nbsp;&nbsp;<span class="k">protected</span> <span class="k">function</span> <span class="nf">SendmailSend</span><span class="p">(</span><span class="nv">$header</span><span class="p">,</span> <span class="nv">$body</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC896'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span> <span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">Sender</span> <span class="o">!=</span> <span class="s1">&#39;&#39;</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC897'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$sendmail</span> <span class="o">=</span> <span class="nb">sprintf</span><span class="p">(</span><span class="s2">&quot;%s -oi -f%s -t&quot;</span><span class="p">,</span> <span class="nb">escapeshellcmd</span><span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">Sendmail</span><span class="p">),</span> <span class="nb">escapeshellarg</span><span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">Sender</span><span class="p">));</span></div><div class='line' id='LC898'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span> <span class="k">else</span> <span class="p">{</span></div><div class='line' id='LC899'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$sendmail</span> <span class="o">=</span> <span class="nb">sprintf</span><span class="p">(</span><span class="s2">&quot;%s -oi -t&quot;</span><span class="p">,</span> <span class="nb">escapeshellcmd</span><span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">Sendmail</span><span class="p">));</span></div><div class='line' id='LC900'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC901'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span> <span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">SingleTo</span> <span class="o">===</span> <span class="k">true</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC902'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">foreach</span> <span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">SingleToArray</span> <span class="k">as</span> <span class="nv">$val</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC903'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span><span class="p">(</span><span class="o">!@</span><span class="nv">$mail</span> <span class="o">=</span> <span class="nb">popen</span><span class="p">(</span><span class="nv">$sendmail</span><span class="p">,</span> <span class="s1">&#39;w&#39;</span><span class="p">))</span> <span class="p">{</span></div><div class='line' id='LC904'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">throw</span> <span class="k">new</span> <span class="nx">phpmailerException</span><span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">Lang</span><span class="p">(</span><span class="s1">&#39;execute&#39;</span><span class="p">)</span> <span class="o">.</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">Sendmail</span><span class="p">,</span> <span class="nx">self</span><span class="o">::</span><span class="na">STOP_CRITICAL</span><span class="p">);</span></div><div class='line' id='LC905'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC906'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nb">fputs</span><span class="p">(</span><span class="nv">$mail</span><span class="p">,</span> <span class="s2">&quot;To: &quot;</span> <span class="o">.</span> <span class="nv">$val</span> <span class="o">.</span> <span class="s2">&quot;</span><span class="se">\n</span><span class="s2">&quot;</span><span class="p">);</span></div><div class='line' id='LC907'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nb">fputs</span><span class="p">(</span><span class="nv">$mail</span><span class="p">,</span> <span class="nv">$header</span><span class="p">);</span></div><div class='line' id='LC908'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nb">fputs</span><span class="p">(</span><span class="nv">$mail</span><span class="p">,</span> <span class="nv">$body</span><span class="p">);</span></div><div class='line' id='LC909'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$result</span> <span class="o">=</span> <span class="nb">pclose</span><span class="p">(</span><span class="nv">$mail</span><span class="p">);</span></div><div class='line' id='LC910'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// implement call back function if it exists</span></div><div class='line' id='LC911'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$isSent</span> <span class="o">=</span> <span class="p">(</span><span class="nv">$result</span> <span class="o">==</span> <span class="mi">0</span><span class="p">)</span> <span class="o">?</span> <span class="mi">1</span> <span class="o">:</span> <span class="mi">0</span><span class="p">;</span></div><div class='line' id='LC912'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">doCallback</span><span class="p">(</span><span class="nv">$isSent</span><span class="p">,</span> <span class="nv">$val</span><span class="p">,</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">cc</span><span class="p">,</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">bcc</span><span class="p">,</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">Subject</span><span class="p">,</span> <span class="nv">$body</span><span class="p">);</span></div><div class='line' id='LC913'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span><span class="p">(</span><span class="nv">$result</span> <span class="o">!=</span> <span class="mi">0</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC914'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">throw</span> <span class="k">new</span> <span class="nx">phpmailerException</span><span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">Lang</span><span class="p">(</span><span class="s1">&#39;execute&#39;</span><span class="p">)</span> <span class="o">.</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">Sendmail</span><span class="p">,</span> <span class="nx">self</span><span class="o">::</span><span class="na">STOP_CRITICAL</span><span class="p">);</span></div><div class='line' id='LC915'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC916'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC917'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span> <span class="k">else</span> <span class="p">{</span></div><div class='line' id='LC918'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span><span class="p">(</span><span class="o">!@</span><span class="nv">$mail</span> <span class="o">=</span> <span class="nb">popen</span><span class="p">(</span><span class="nv">$sendmail</span><span class="p">,</span> <span class="s1">&#39;w&#39;</span><span class="p">))</span> <span class="p">{</span></div><div class='line' id='LC919'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">throw</span> <span class="k">new</span> <span class="nx">phpmailerException</span><span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">Lang</span><span class="p">(</span><span class="s1">&#39;execute&#39;</span><span class="p">)</span> <span class="o">.</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">Sendmail</span><span class="p">,</span> <span class="nx">self</span><span class="o">::</span><span class="na">STOP_CRITICAL</span><span class="p">);</span></div><div class='line' id='LC920'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC921'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nb">fputs</span><span class="p">(</span><span class="nv">$mail</span><span class="p">,</span> <span class="nv">$header</span><span class="p">);</span></div><div class='line' id='LC922'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nb">fputs</span><span class="p">(</span><span class="nv">$mail</span><span class="p">,</span> <span class="nv">$body</span><span class="p">);</span></div><div class='line' id='LC923'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$result</span> <span class="o">=</span> <span class="nb">pclose</span><span class="p">(</span><span class="nv">$mail</span><span class="p">);</span></div><div class='line' id='LC924'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// implement call back function if it exists</span></div><div class='line' id='LC925'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$isSent</span> <span class="o">=</span> <span class="p">(</span><span class="nv">$result</span> <span class="o">==</span> <span class="mi">0</span><span class="p">)</span> <span class="o">?</span> <span class="mi">1</span> <span class="o">:</span> <span class="mi">0</span><span class="p">;</span></div><div class='line' id='LC926'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">doCallback</span><span class="p">(</span><span class="nv">$isSent</span><span class="p">,</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">to</span><span class="p">,</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">cc</span><span class="p">,</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">bcc</span><span class="p">,</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">Subject</span><span class="p">,</span> <span class="nv">$body</span><span class="p">);</span></div><div class='line' id='LC927'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span><span class="p">(</span><span class="nv">$result</span> <span class="o">!=</span> <span class="mi">0</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC928'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">throw</span> <span class="k">new</span> <span class="nx">phpmailerException</span><span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">Lang</span><span class="p">(</span><span class="s1">&#39;execute&#39;</span><span class="p">)</span> <span class="o">.</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">Sendmail</span><span class="p">,</span> <span class="nx">self</span><span class="o">::</span><span class="na">STOP_CRITICAL</span><span class="p">);</span></div><div class='line' id='LC929'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC930'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC931'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">return</span> <span class="k">true</span><span class="p">;</span></div><div class='line' id='LC932'>&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC933'><br/></div><div class='line' id='LC934'>&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC935'><span class="sd">   * Sends mail using the PHP mail() function.</span></div><div class='line' id='LC936'><span class="sd">   * @param string $header The message headers</span></div><div class='line' id='LC937'><span class="sd">   * @param string $body The message body</span></div><div class='line' id='LC938'><span class="sd">   * @throws phpmailerException</span></div><div class='line' id='LC939'><span class="sd">   * @access protected</span></div><div class='line' id='LC940'><span class="sd">   * @return bool</span></div><div class='line' id='LC941'><span class="sd">   */</span></div><div class='line' id='LC942'>&nbsp;&nbsp;<span class="k">protected</span> <span class="k">function</span> <span class="nf">MailSend</span><span class="p">(</span><span class="nv">$header</span><span class="p">,</span> <span class="nv">$body</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC943'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$toArr</span> <span class="o">=</span> <span class="k">array</span><span class="p">();</span></div><div class='line' id='LC944'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">foreach</span><span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">to</span> <span class="k">as</span> <span class="nv">$t</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC945'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$toArr</span><span class="p">[]</span> <span class="o">=</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">AddrFormat</span><span class="p">(</span><span class="nv">$t</span><span class="p">);</span></div><div class='line' id='LC946'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC947'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$to</span> <span class="o">=</span> <span class="nb">implode</span><span class="p">(</span><span class="s1">&#39;, &#39;</span><span class="p">,</span> <span class="nv">$toArr</span><span class="p">);</span></div><div class='line' id='LC948'><br/></div><div class='line' id='LC949'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span> <span class="p">(</span><span class="k">empty</span><span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">Sender</span><span class="p">))</span> <span class="p">{</span></div><div class='line' id='LC950'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$params</span> <span class="o">=</span> <span class="s2">&quot; &quot;</span><span class="p">;</span></div><div class='line' id='LC951'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span> <span class="k">else</span> <span class="p">{</span></div><div class='line' id='LC952'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$params</span> <span class="o">=</span> <span class="nb">sprintf</span><span class="p">(</span><span class="s2">&quot;-f%s&quot;</span><span class="p">,</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">Sender</span><span class="p">);</span></div><div class='line' id='LC953'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC954'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span> <span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">Sender</span> <span class="o">!=</span> <span class="s1">&#39;&#39;</span> <span class="k">and</span> <span class="o">!</span><span class="nb">ini_get</span><span class="p">(</span><span class="s1">&#39;safe_mode&#39;</span><span class="p">))</span> <span class="p">{</span></div><div class='line' id='LC955'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$old_from</span> <span class="o">=</span> <span class="nb">ini_get</span><span class="p">(</span><span class="s1">&#39;sendmail_from&#39;</span><span class="p">);</span></div><div class='line' id='LC956'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nb">ini_set</span><span class="p">(</span><span class="s1">&#39;sendmail_from&#39;</span><span class="p">,</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">Sender</span><span class="p">);</span></div><div class='line' id='LC957'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC958'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$rt</span> <span class="o">=</span> <span class="k">false</span><span class="p">;</span></div><div class='line' id='LC959'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span> <span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">SingleTo</span> <span class="o">===</span> <span class="k">true</span> <span class="o">&amp;&amp;</span> <span class="nb">count</span><span class="p">(</span><span class="nv">$toArr</span><span class="p">)</span> <span class="o">&gt;</span> <span class="mi">1</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC960'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">foreach</span> <span class="p">(</span><span class="nv">$toArr</span> <span class="k">as</span> <span class="nv">$val</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC961'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$rt</span> <span class="o">=</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">mail_passthru</span><span class="p">(</span><span class="nv">$val</span><span class="p">,</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">Subject</span><span class="p">,</span> <span class="nv">$body</span><span class="p">,</span> <span class="nv">$header</span><span class="p">,</span> <span class="nv">$params</span><span class="p">);</span></div><div class='line' id='LC962'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// implement call back function if it exists</span></div><div class='line' id='LC963'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$isSent</span> <span class="o">=</span> <span class="p">(</span><span class="nv">$rt</span> <span class="o">==</span> <span class="mi">1</span><span class="p">)</span> <span class="o">?</span> <span class="mi">1</span> <span class="o">:</span> <span class="mi">0</span><span class="p">;</span></div><div class='line' id='LC964'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">doCallback</span><span class="p">(</span><span class="nv">$isSent</span><span class="p">,</span> <span class="nv">$val</span><span class="p">,</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">cc</span><span class="p">,</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">bcc</span><span class="p">,</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">Subject</span><span class="p">,</span> <span class="nv">$body</span><span class="p">);</span></div><div class='line' id='LC965'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC966'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span> <span class="k">else</span> <span class="p">{</span></div><div class='line' id='LC967'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$rt</span> <span class="o">=</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">mail_passthru</span><span class="p">(</span><span class="nv">$to</span><span class="p">,</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">Subject</span><span class="p">,</span> <span class="nv">$body</span><span class="p">,</span> <span class="nv">$header</span><span class="p">,</span> <span class="nv">$params</span><span class="p">);</span></div><div class='line' id='LC968'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// implement call back function if it exists</span></div><div class='line' id='LC969'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$isSent</span> <span class="o">=</span> <span class="p">(</span><span class="nv">$rt</span> <span class="o">==</span> <span class="mi">1</span><span class="p">)</span> <span class="o">?</span> <span class="mi">1</span> <span class="o">:</span> <span class="mi">0</span><span class="p">;</span></div><div class='line' id='LC970'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">doCallback</span><span class="p">(</span><span class="nv">$isSent</span><span class="p">,</span> <span class="nv">$to</span><span class="p">,</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">cc</span><span class="p">,</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">bcc</span><span class="p">,</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">Subject</span><span class="p">,</span> <span class="nv">$body</span><span class="p">);</span></div><div class='line' id='LC971'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC972'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span> <span class="p">(</span><span class="nb">isset</span><span class="p">(</span><span class="nv">$old_from</span><span class="p">))</span> <span class="p">{</span></div><div class='line' id='LC973'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nb">ini_set</span><span class="p">(</span><span class="s1">&#39;sendmail_from&#39;</span><span class="p">,</span> <span class="nv">$old_from</span><span class="p">);</span></div><div class='line' id='LC974'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC975'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span><span class="p">(</span><span class="o">!</span><span class="nv">$rt</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC976'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">throw</span> <span class="k">new</span> <span class="nx">phpmailerException</span><span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">Lang</span><span class="p">(</span><span class="s1">&#39;instantiate&#39;</span><span class="p">),</span> <span class="nx">self</span><span class="o">::</span><span class="na">STOP_CRITICAL</span><span class="p">);</span></div><div class='line' id='LC977'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC978'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">return</span> <span class="k">true</span><span class="p">;</span></div><div class='line' id='LC979'>&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC980'><br/></div><div class='line' id='LC981'>&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC982'><span class="sd">   * Sends mail via SMTP using PhpSMTP</span></div><div class='line' id='LC983'><span class="sd">   * Returns false if there is a bad MAIL FROM, RCPT, or DATA input.</span></div><div class='line' id='LC984'><span class="sd">   * @param string $header The message headers</span></div><div class='line' id='LC985'><span class="sd">   * @param string $body The message body</span></div><div class='line' id='LC986'><span class="sd">   * @throws phpmailerException</span></div><div class='line' id='LC987'><span class="sd">   * @uses SMTP</span></div><div class='line' id='LC988'><span class="sd">   * @access protected</span></div><div class='line' id='LC989'><span class="sd">   * @return bool</span></div><div class='line' id='LC990'><span class="sd">   */</span></div><div class='line' id='LC991'>&nbsp;&nbsp;<span class="k">protected</span> <span class="k">function</span> <span class="nf">SmtpSend</span><span class="p">(</span><span class="nv">$header</span><span class="p">,</span> <span class="nv">$body</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC992'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">require_once</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">PluginDir</span> <span class="o">.</span> <span class="s1">&#39;class.smtp.php&#39;</span><span class="p">;</span></div><div class='line' id='LC993'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$bad_rcpt</span> <span class="o">=</span> <span class="k">array</span><span class="p">();</span></div><div class='line' id='LC994'><br/></div><div class='line' id='LC995'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span><span class="p">(</span><span class="o">!</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">SmtpConnect</span><span class="p">())</span> <span class="p">{</span></div><div class='line' id='LC996'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">throw</span> <span class="k">new</span> <span class="nx">phpmailerException</span><span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">Lang</span><span class="p">(</span><span class="s1">&#39;smtp_connect_failed&#39;</span><span class="p">),</span> <span class="nx">self</span><span class="o">::</span><span class="na">STOP_CRITICAL</span><span class="p">);</span></div><div class='line' id='LC997'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC998'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$smtp_from</span> <span class="o">=</span> <span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">Sender</span> <span class="o">==</span> <span class="s1">&#39;&#39;</span><span class="p">)</span> <span class="o">?</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">From</span> <span class="o">:</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">Sender</span><span class="p">;</span></div><div class='line' id='LC999'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span><span class="p">(</span><span class="o">!</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">smtp</span><span class="o">-&gt;</span><span class="na">Mail</span><span class="p">(</span><span class="nv">$smtp_from</span><span class="p">))</span> <span class="p">{</span></div><div class='line' id='LC1000'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">SetError</span><span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">Lang</span><span class="p">(</span><span class="s1">&#39;from_failed&#39;</span><span class="p">)</span> <span class="o">.</span> <span class="nv">$smtp_from</span> <span class="o">.</span> <span class="s1">&#39; : &#39;</span> <span class="o">.</span><span class="nb">implode</span><span class="p">(</span><span class="s1">&#39;,&#39;</span><span class="p">,</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">smtp</span><span class="o">-&gt;</span><span class="na">getError</span><span class="p">()));</span></div><div class='line' id='LC1001'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">throw</span> <span class="k">new</span> <span class="nx">phpmailerException</span><span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">ErrorInfo</span><span class="p">,</span> <span class="nx">self</span><span class="o">::</span><span class="na">STOP_CRITICAL</span><span class="p">);</span></div><div class='line' id='LC1002'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC1003'><br/></div><div class='line' id='LC1004'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// Attempt to send attach all recipients</span></div><div class='line' id='LC1005'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">foreach</span><span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">to</span> <span class="k">as</span> <span class="nv">$to</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC1006'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span> <span class="p">(</span><span class="o">!</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">smtp</span><span class="o">-&gt;</span><span class="na">Recipient</span><span class="p">(</span><span class="nv">$to</span><span class="p">[</span><span class="mi">0</span><span class="p">]))</span> <span class="p">{</span></div><div class='line' id='LC1007'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$bad_rcpt</span><span class="p">[]</span> <span class="o">=</span> <span class="nv">$to</span><span class="p">[</span><span class="mi">0</span><span class="p">];</span></div><div class='line' id='LC1008'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// implement call back function if it exists</span></div><div class='line' id='LC1009'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$isSent</span> <span class="o">=</span> <span class="mi">0</span><span class="p">;</span></div><div class='line' id='LC1010'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">doCallback</span><span class="p">(</span><span class="nv">$isSent</span><span class="p">,</span> <span class="nv">$to</span><span class="p">[</span><span class="mi">0</span><span class="p">],</span> <span class="s1">&#39;&#39;</span><span class="p">,</span> <span class="s1">&#39;&#39;</span><span class="p">,</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">Subject</span><span class="p">,</span> <span class="nv">$body</span><span class="p">);</span></div><div class='line' id='LC1011'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span> <span class="k">else</span> <span class="p">{</span></div><div class='line' id='LC1012'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// implement call back function if it exists</span></div><div class='line' id='LC1013'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$isSent</span> <span class="o">=</span> <span class="mi">1</span><span class="p">;</span></div><div class='line' id='LC1014'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">doCallback</span><span class="p">(</span><span class="nv">$isSent</span><span class="p">,</span> <span class="nv">$to</span><span class="p">[</span><span class="mi">0</span><span class="p">],</span> <span class="s1">&#39;&#39;</span><span class="p">,</span> <span class="s1">&#39;&#39;</span><span class="p">,</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">Subject</span><span class="p">,</span> <span class="nv">$body</span><span class="p">);</span></div><div class='line' id='LC1015'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC1016'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC1017'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">foreach</span><span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">cc</span> <span class="k">as</span> <span class="nv">$cc</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC1018'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span> <span class="p">(</span><span class="o">!</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">smtp</span><span class="o">-&gt;</span><span class="na">Recipient</span><span class="p">(</span><span class="nv">$cc</span><span class="p">[</span><span class="mi">0</span><span class="p">]))</span> <span class="p">{</span></div><div class='line' id='LC1019'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$bad_rcpt</span><span class="p">[]</span> <span class="o">=</span> <span class="nv">$cc</span><span class="p">[</span><span class="mi">0</span><span class="p">];</span></div><div class='line' id='LC1020'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// implement call back function if it exists</span></div><div class='line' id='LC1021'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$isSent</span> <span class="o">=</span> <span class="mi">0</span><span class="p">;</span></div><div class='line' id='LC1022'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">doCallback</span><span class="p">(</span><span class="nv">$isSent</span><span class="p">,</span> <span class="s1">&#39;&#39;</span><span class="p">,</span> <span class="nv">$cc</span><span class="p">[</span><span class="mi">0</span><span class="p">],</span> <span class="s1">&#39;&#39;</span><span class="p">,</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">Subject</span><span class="p">,</span> <span class="nv">$body</span><span class="p">);</span></div><div class='line' id='LC1023'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span> <span class="k">else</span> <span class="p">{</span></div><div class='line' id='LC1024'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// implement call back function if it exists</span></div><div class='line' id='LC1025'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$isSent</span> <span class="o">=</span> <span class="mi">1</span><span class="p">;</span></div><div class='line' id='LC1026'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">doCallback</span><span class="p">(</span><span class="nv">$isSent</span><span class="p">,</span> <span class="s1">&#39;&#39;</span><span class="p">,</span> <span class="nv">$cc</span><span class="p">[</span><span class="mi">0</span><span class="p">],</span> <span class="s1">&#39;&#39;</span><span class="p">,</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">Subject</span><span class="p">,</span> <span class="nv">$body</span><span class="p">);</span></div><div class='line' id='LC1027'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC1028'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC1029'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">foreach</span><span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">bcc</span> <span class="k">as</span> <span class="nv">$bcc</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC1030'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span> <span class="p">(</span><span class="o">!</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">smtp</span><span class="o">-&gt;</span><span class="na">Recipient</span><span class="p">(</span><span class="nv">$bcc</span><span class="p">[</span><span class="mi">0</span><span class="p">]))</span> <span class="p">{</span></div><div class='line' id='LC1031'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$bad_rcpt</span><span class="p">[]</span> <span class="o">=</span> <span class="nv">$bcc</span><span class="p">[</span><span class="mi">0</span><span class="p">];</span></div><div class='line' id='LC1032'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// implement call back function if it exists</span></div><div class='line' id='LC1033'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$isSent</span> <span class="o">=</span> <span class="mi">0</span><span class="p">;</span></div><div class='line' id='LC1034'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">doCallback</span><span class="p">(</span><span class="nv">$isSent</span><span class="p">,</span> <span class="s1">&#39;&#39;</span><span class="p">,</span> <span class="s1">&#39;&#39;</span><span class="p">,</span> <span class="nv">$bcc</span><span class="p">[</span><span class="mi">0</span><span class="p">],</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">Subject</span><span class="p">,</span> <span class="nv">$body</span><span class="p">);</span></div><div class='line' id='LC1035'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span> <span class="k">else</span> <span class="p">{</span></div><div class='line' id='LC1036'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// implement call back function if it exists</span></div><div class='line' id='LC1037'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$isSent</span> <span class="o">=</span> <span class="mi">1</span><span class="p">;</span></div><div class='line' id='LC1038'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">doCallback</span><span class="p">(</span><span class="nv">$isSent</span><span class="p">,</span> <span class="s1">&#39;&#39;</span><span class="p">,</span> <span class="s1">&#39;&#39;</span><span class="p">,</span> <span class="nv">$bcc</span><span class="p">[</span><span class="mi">0</span><span class="p">],</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">Subject</span><span class="p">,</span> <span class="nv">$body</span><span class="p">);</span></div><div class='line' id='LC1039'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC1040'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC1041'><br/></div><div class='line' id='LC1042'><br/></div><div class='line' id='LC1043'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span> <span class="p">(</span><span class="nb">count</span><span class="p">(</span><span class="nv">$bad_rcpt</span><span class="p">)</span> <span class="o">&gt;</span> <span class="mi">0</span> <span class="p">)</span> <span class="p">{</span> <span class="c1">//Create error message for any bad addresses</span></div><div class='line' id='LC1044'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$badaddresses</span> <span class="o">=</span> <span class="nb">implode</span><span class="p">(</span><span class="s1">&#39;, &#39;</span><span class="p">,</span> <span class="nv">$bad_rcpt</span><span class="p">);</span></div><div class='line' id='LC1045'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">throw</span> <span class="k">new</span> <span class="nx">phpmailerException</span><span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">Lang</span><span class="p">(</span><span class="s1">&#39;recipients_failed&#39;</span><span class="p">)</span> <span class="o">.</span> <span class="nv">$badaddresses</span><span class="p">);</span></div><div class='line' id='LC1046'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC1047'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span><span class="p">(</span><span class="o">!</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">smtp</span><span class="o">-&gt;</span><span class="na">Data</span><span class="p">(</span><span class="nv">$header</span> <span class="o">.</span> <span class="nv">$body</span><span class="p">))</span> <span class="p">{</span></div><div class='line' id='LC1048'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">throw</span> <span class="k">new</span> <span class="nx">phpmailerException</span><span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">Lang</span><span class="p">(</span><span class="s1">&#39;data_not_accepted&#39;</span><span class="p">),</span> <span class="nx">self</span><span class="o">::</span><span class="na">STOP_CRITICAL</span><span class="p">);</span></div><div class='line' id='LC1049'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC1050'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span><span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">SMTPKeepAlive</span> <span class="o">==</span> <span class="k">true</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC1051'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">smtp</span><span class="o">-&gt;</span><span class="na">Reset</span><span class="p">();</span></div><div class='line' id='LC1052'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span> <span class="k">else</span> <span class="p">{</span></div><div class='line' id='LC1053'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">smtp</span><span class="o">-&gt;</span><span class="na">Quit</span><span class="p">();</span></div><div class='line' id='LC1054'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">smtp</span><span class="o">-&gt;</span><span class="na">Close</span><span class="p">();</span></div><div class='line' id='LC1055'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC1056'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">return</span> <span class="k">true</span><span class="p">;</span></div><div class='line' id='LC1057'>&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC1058'><br/></div><div class='line' id='LC1059'>&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC1060'><span class="sd">   * Initiates a connection to an SMTP server.</span></div><div class='line' id='LC1061'><span class="sd">   * Returns false if the operation failed.</span></div><div class='line' id='LC1062'><span class="sd">   * @param array $options An array of options compatible with stream_context_create()</span></div><div class='line' id='LC1063'><span class="sd">   * @uses SMTP</span></div><div class='line' id='LC1064'><span class="sd">   * @access public</span></div><div class='line' id='LC1065'><span class="sd">   * @throws phpmailerException</span></div><div class='line' id='LC1066'><span class="sd">   * @return bool</span></div><div class='line' id='LC1067'><span class="sd">   */</span></div><div class='line' id='LC1068'>&nbsp;&nbsp;<span class="k">public</span> <span class="k">function</span> <span class="nf">SmtpConnect</span><span class="p">(</span><span class="nv">$options</span> <span class="o">=</span> <span class="k">array</span><span class="p">())</span> <span class="p">{</span></div><div class='line' id='LC1069'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span><span class="p">(</span><span class="nb">is_null</span><span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">smtp</span><span class="p">))</span> <span class="p">{</span></div><div class='line' id='LC1070'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">smtp</span> <span class="o">=</span> <span class="k">new</span> <span class="nx">SMTP</span><span class="p">;</span></div><div class='line' id='LC1071'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC1072'><br/></div><div class='line' id='LC1073'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">//Already connected?</span></div><div class='line' id='LC1074'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span> <span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">smtp</span><span class="o">-&gt;</span><span class="na">Connected</span><span class="p">())</span> <span class="p">{</span></div><div class='line' id='LC1075'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">return</span> <span class="k">true</span><span class="p">;</span></div><div class='line' id='LC1076'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC1077'><br/></div><div class='line' id='LC1078'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">smtp</span><span class="o">-&gt;</span><span class="na">Timeout</span> <span class="o">=</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">Timeout</span><span class="p">;</span></div><div class='line' id='LC1079'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">smtp</span><span class="o">-&gt;</span><span class="na">do_debug</span> <span class="o">=</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">SMTPDebug</span><span class="p">;</span></div><div class='line' id='LC1080'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">smtp</span><span class="o">-&gt;</span><span class="na">Debugoutput</span> <span class="o">=</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">Debugoutput</span><span class="p">;</span></div><div class='line' id='LC1081'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">smtp</span><span class="o">-&gt;</span><span class="na">do_verp</span> <span class="o">=</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">do_verp</span><span class="p">;</span></div><div class='line' id='LC1082'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$index</span> <span class="o">=</span> <span class="mi">0</span><span class="p">;</span></div><div class='line' id='LC1083'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$tls</span> <span class="o">=</span> <span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">SMTPSecure</span> <span class="o">==</span> <span class="s1">&#39;tls&#39;</span><span class="p">);</span></div><div class='line' id='LC1084'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$ssl</span> <span class="o">=</span> <span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">SMTPSecure</span> <span class="o">==</span> <span class="s1">&#39;ssl&#39;</span><span class="p">);</span></div><div class='line' id='LC1085'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$hosts</span> <span class="o">=</span> <span class="nb">explode</span><span class="p">(</span><span class="s1">&#39;;&#39;</span><span class="p">,</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">Host</span><span class="p">);</span></div><div class='line' id='LC1086'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$lastexception</span> <span class="o">=</span> <span class="k">null</span><span class="p">;</span></div><div class='line' id='LC1087'><br/></div><div class='line' id='LC1088'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">foreach</span> <span class="p">(</span><span class="nv">$hosts</span> <span class="k">as</span> <span class="nv">$hostentry</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC1089'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$hostinfo</span> <span class="o">=</span> <span class="k">array</span><span class="p">();</span></div><div class='line' id='LC1090'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$host</span> <span class="o">=</span> <span class="nv">$hostentry</span><span class="p">;</span></div><div class='line' id='LC1091'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$port</span> <span class="o">=</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">Port</span><span class="p">;</span></div><div class='line' id='LC1092'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span> <span class="p">(</span><span class="nb">preg_match</span><span class="p">(</span><span class="s1">&#39;/^(.+):([0-9]+)$/&#39;</span><span class="p">,</span> <span class="nv">$hostentry</span><span class="p">,</span> <span class="nv">$hostinfo</span><span class="p">))</span> <span class="p">{</span> <span class="c1">//If $hostentry contains &#39;address:port&#39;, override default</span></div><div class='line' id='LC1093'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$host</span> <span class="o">=</span> <span class="nv">$hostinfo</span><span class="p">[</span><span class="mi">1</span><span class="p">];</span></div><div class='line' id='LC1094'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$port</span> <span class="o">=</span> <span class="nv">$hostinfo</span><span class="p">[</span><span class="mi">2</span><span class="p">];</span></div><div class='line' id='LC1095'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC1096'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span> <span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">smtp</span><span class="o">-&gt;</span><span class="na">Connect</span><span class="p">((</span><span class="nv">$ssl</span> <span class="o">?</span> <span class="s1">&#39;ssl://&#39;</span><span class="o">:</span><span class="s1">&#39;&#39;</span><span class="p">)</span><span class="o">.</span><span class="nv">$host</span><span class="p">,</span> <span class="nv">$port</span><span class="p">,</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">Timeout</span><span class="p">,</span> <span class="nv">$options</span><span class="p">))</span> <span class="p">{</span></div><div class='line' id='LC1097'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">try</span> <span class="p">{</span></div><div class='line' id='LC1098'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span> <span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">Helo</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC1099'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$hello</span> <span class="o">=</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">Helo</span><span class="p">;</span></div><div class='line' id='LC1100'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span> <span class="k">else</span> <span class="p">{</span></div><div class='line' id='LC1101'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$hello</span> <span class="o">=</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">ServerHostname</span><span class="p">();</span></div><div class='line' id='LC1102'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC1103'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">smtp</span><span class="o">-&gt;</span><span class="na">Hello</span><span class="p">(</span><span class="nv">$hello</span><span class="p">);</span></div><div class='line' id='LC1104'><br/></div><div class='line' id='LC1105'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span> <span class="p">(</span><span class="nv">$tls</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC1106'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span> <span class="p">(</span><span class="o">!</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">smtp</span><span class="o">-&gt;</span><span class="na">StartTLS</span><span class="p">())</span> <span class="p">{</span></div><div class='line' id='LC1107'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">throw</span> <span class="k">new</span> <span class="nx">phpmailerException</span><span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">Lang</span><span class="p">(</span><span class="s1">&#39;connect_host&#39;</span><span class="p">));</span></div><div class='line' id='LC1108'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC1109'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">//We must resend HELO after tls negotiation</span></div><div class='line' id='LC1110'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">smtp</span><span class="o">-&gt;</span><span class="na">Hello</span><span class="p">(</span><span class="nv">$hello</span><span class="p">);</span></div><div class='line' id='LC1111'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC1112'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span> <span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">SMTPAuth</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC1113'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span> <span class="p">(</span><span class="o">!</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">smtp</span><span class="o">-&gt;</span><span class="na">Authenticate</span><span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">Username</span><span class="p">,</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">Password</span><span class="p">,</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">AuthType</span><span class="p">,</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">Realm</span><span class="p">,</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">Workstation</span><span class="p">))</span> <span class="p">{</span></div><div class='line' id='LC1114'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">throw</span> <span class="k">new</span> <span class="nx">phpmailerException</span><span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">Lang</span><span class="p">(</span><span class="s1">&#39;authenticate&#39;</span><span class="p">));</span></div><div class='line' id='LC1115'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC1116'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC1117'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">return</span> <span class="k">true</span><span class="p">;</span></div><div class='line' id='LC1118'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span> <span class="k">catch</span> <span class="p">(</span><span class="nx">phpmailerException</span> <span class="nv">$e</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC1119'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$lastexception</span> <span class="o">=</span> <span class="nv">$e</span><span class="p">;</span></div><div class='line' id='LC1120'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">//We must have connected, but then failed TLS or Auth, so close connection nicely</span></div><div class='line' id='LC1121'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">smtp</span><span class="o">-&gt;</span><span class="na">Quit</span><span class="p">();</span></div><div class='line' id='LC1122'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC1123'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC1124'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC1125'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">//If we get here, all connection attempts have failed, so close connection hard</span></div><div class='line' id='LC1126'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">smtp</span><span class="o">-&gt;</span><span class="na">Close</span><span class="p">();</span></div><div class='line' id='LC1127'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">//As we&#39;ve caught all exceptions, just report whatever the last one was</span></div><div class='line' id='LC1128'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span> <span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">exceptions</span> <span class="k">and</span> <span class="o">!</span><span class="nb">is_null</span><span class="p">(</span><span class="nv">$lastexception</span><span class="p">))</span> <span class="p">{</span></div><div class='line' id='LC1129'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">throw</span> <span class="nv">$lastexception</span><span class="p">;</span></div><div class='line' id='LC1130'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC1131'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">return</span> <span class="k">false</span><span class="p">;</span></div><div class='line' id='LC1132'>&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC1133'><br/></div><div class='line' id='LC1134'>&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC1135'><span class="sd">   * Closes the active SMTP session if one exists.</span></div><div class='line' id='LC1136'><span class="sd">   * @return void</span></div><div class='line' id='LC1137'><span class="sd">   */</span></div><div class='line' id='LC1138'>&nbsp;&nbsp;<span class="k">public</span> <span class="k">function</span> <span class="nf">SmtpClose</span><span class="p">()</span> <span class="p">{</span></div><div class='line' id='LC1139'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span> <span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">smtp</span> <span class="o">!==</span> <span class="k">null</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC1140'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span><span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">smtp</span><span class="o">-&gt;</span><span class="na">Connected</span><span class="p">())</span> <span class="p">{</span></div><div class='line' id='LC1141'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">smtp</span><span class="o">-&gt;</span><span class="na">Quit</span><span class="p">();</span></div><div class='line' id='LC1142'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">smtp</span><span class="o">-&gt;</span><span class="na">Close</span><span class="p">();</span></div><div class='line' id='LC1143'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC1144'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC1145'>&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC1146'><br/></div><div class='line' id='LC1147'>&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC1148'><span class="sd">   * Sets the language for all class error messages.</span></div><div class='line' id='LC1149'><span class="sd">   * Returns false if it cannot load the language file.  The default language is English.</span></div><div class='line' id='LC1150'><span class="sd">   * @param string $langcode ISO 639-1 2-character language code (e.g. Portuguese: &quot;br&quot;)</span></div><div class='line' id='LC1151'><span class="sd">   * @param string $lang_path Path to the language file directory</span></div><div class='line' id='LC1152'><span class="sd">   * @return bool</span></div><div class='line' id='LC1153'><span class="sd">   * @access public</span></div><div class='line' id='LC1154'><span class="sd">   */</span></div><div class='line' id='LC1155'>&nbsp;&nbsp;<span class="k">function</span> <span class="nf">SetLanguage</span><span class="p">(</span><span class="nv">$langcode</span> <span class="o">=</span> <span class="s1">&#39;en&#39;</span><span class="p">,</span> <span class="nv">$lang_path</span> <span class="o">=</span> <span class="s1">&#39;language/&#39;</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC1156'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">//Define full set of translatable strings</span></div><div class='line' id='LC1157'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$PHPMAILER_LANG</span> <span class="o">=</span> <span class="k">array</span><span class="p">(</span></div><div class='line' id='LC1158'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="s1">&#39;authenticate&#39;</span>         <span class="o">=&gt;</span> <span class="s1">&#39;SMTP Error: Could not authenticate.&#39;</span><span class="p">,</span></div><div class='line' id='LC1159'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="s1">&#39;connect_host&#39;</span>         <span class="o">=&gt;</span> <span class="s1">&#39;SMTP Error: Could not connect to SMTP host.&#39;</span><span class="p">,</span></div><div class='line' id='LC1160'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="s1">&#39;data_not_accepted&#39;</span>    <span class="o">=&gt;</span> <span class="s1">&#39;SMTP Error: Data not accepted.&#39;</span><span class="p">,</span></div><div class='line' id='LC1161'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="s1">&#39;empty_message&#39;</span>        <span class="o">=&gt;</span> <span class="s1">&#39;Message body empty&#39;</span><span class="p">,</span></div><div class='line' id='LC1162'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="s1">&#39;encoding&#39;</span>             <span class="o">=&gt;</span> <span class="s1">&#39;Unknown encoding: &#39;</span><span class="p">,</span></div><div class='line' id='LC1163'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="s1">&#39;execute&#39;</span>              <span class="o">=&gt;</span> <span class="s1">&#39;Could not execute: &#39;</span><span class="p">,</span></div><div class='line' id='LC1164'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="s1">&#39;file_access&#39;</span>          <span class="o">=&gt;</span> <span class="s1">&#39;Could not access file: &#39;</span><span class="p">,</span></div><div class='line' id='LC1165'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="s1">&#39;file_open&#39;</span>            <span class="o">=&gt;</span> <span class="s1">&#39;File Error: Could not open file: &#39;</span><span class="p">,</span></div><div class='line' id='LC1166'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="s1">&#39;from_failed&#39;</span>          <span class="o">=&gt;</span> <span class="s1">&#39;The following From address failed: &#39;</span><span class="p">,</span></div><div class='line' id='LC1167'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="s1">&#39;instantiate&#39;</span>          <span class="o">=&gt;</span> <span class="s1">&#39;Could not instantiate mail function.&#39;</span><span class="p">,</span></div><div class='line' id='LC1168'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="s1">&#39;invalid_address&#39;</span>      <span class="o">=&gt;</span> <span class="s1">&#39;Invalid address&#39;</span><span class="p">,</span></div><div class='line' id='LC1169'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="s1">&#39;mailer_not_supported&#39;</span> <span class="o">=&gt;</span> <span class="s1">&#39; mailer is not supported.&#39;</span><span class="p">,</span></div><div class='line' id='LC1170'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="s1">&#39;provide_address&#39;</span>      <span class="o">=&gt;</span> <span class="s1">&#39;You must provide at least one recipient email address.&#39;</span><span class="p">,</span></div><div class='line' id='LC1171'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="s1">&#39;recipients_failed&#39;</span>    <span class="o">=&gt;</span> <span class="s1">&#39;SMTP Error: The following recipients failed: &#39;</span><span class="p">,</span></div><div class='line' id='LC1172'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="s1">&#39;signing&#39;</span>              <span class="o">=&gt;</span> <span class="s1">&#39;Signing Error: &#39;</span><span class="p">,</span></div><div class='line' id='LC1173'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="s1">&#39;smtp_connect_failed&#39;</span>  <span class="o">=&gt;</span> <span class="s1">&#39;SMTP Connect() failed.&#39;</span><span class="p">,</span></div><div class='line' id='LC1174'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="s1">&#39;smtp_error&#39;</span>           <span class="o">=&gt;</span> <span class="s1">&#39;SMTP server error: &#39;</span><span class="p">,</span></div><div class='line' id='LC1175'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="s1">&#39;variable_set&#39;</span>         <span class="o">=&gt;</span> <span class="s1">&#39;Cannot set or reset variable: &#39;</span></div><div class='line' id='LC1176'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">);</span></div><div class='line' id='LC1177'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">//Overwrite language-specific strings. This way we&#39;ll never have missing translations - no more &quot;language string failed to load&quot;!</span></div><div class='line' id='LC1178'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$l</span> <span class="o">=</span> <span class="k">true</span><span class="p">;</span></div><div class='line' id='LC1179'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span> <span class="p">(</span><span class="nv">$langcode</span> <span class="o">!=</span> <span class="s1">&#39;en&#39;</span><span class="p">)</span> <span class="p">{</span> <span class="c1">//There is no English translation file</span></div><div class='line' id='LC1180'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$l</span> <span class="o">=</span> <span class="o">@</span><span class="k">include</span> <span class="nv">$lang_path</span><span class="o">.</span><span class="s1">&#39;phpmailer.lang-&#39;</span><span class="o">.</span><span class="nv">$langcode</span><span class="o">.</span><span class="s1">&#39;.php&#39;</span><span class="p">;</span></div><div class='line' id='LC1181'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC1182'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">language</span> <span class="o">=</span> <span class="nv">$PHPMAILER_LANG</span><span class="p">;</span></div><div class='line' id='LC1183'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">return</span> <span class="p">(</span><span class="nv">$l</span> <span class="o">==</span> <span class="k">true</span><span class="p">);</span> <span class="c1">//Returns false if language not found</span></div><div class='line' id='LC1184'>&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC1185'><br/></div><div class='line' id='LC1186'>&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC1187'><span class="sd">  * Return the current array of language strings</span></div><div class='line' id='LC1188'><span class="sd">  * @return array</span></div><div class='line' id='LC1189'><span class="sd">  */</span></div><div class='line' id='LC1190'>&nbsp;&nbsp;<span class="k">public</span> <span class="k">function</span> <span class="nf">GetTranslations</span><span class="p">()</span> <span class="p">{</span></div><div class='line' id='LC1191'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">return</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">language</span><span class="p">;</span></div><div class='line' id='LC1192'>&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC1193'><br/></div><div class='line' id='LC1194'>&nbsp;&nbsp;<span class="c1">/////////////////////////////////////////////////</span></div><div class='line' id='LC1195'>&nbsp;&nbsp;<span class="c1">// METHODS, MESSAGE CREATION</span></div><div class='line' id='LC1196'>&nbsp;&nbsp;<span class="c1">/////////////////////////////////////////////////</span></div><div class='line' id='LC1197'><br/></div><div class='line' id='LC1198'>&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC1199'><span class="sd">   * Creates recipient headers.</span></div><div class='line' id='LC1200'><span class="sd">   * @access public</span></div><div class='line' id='LC1201'><span class="sd">   * @param string $type</span></div><div class='line' id='LC1202'><span class="sd">   * @param array $addr</span></div><div class='line' id='LC1203'><span class="sd">   * @return string</span></div><div class='line' id='LC1204'><span class="sd">   */</span></div><div class='line' id='LC1205'>&nbsp;&nbsp;<span class="k">public</span> <span class="k">function</span> <span class="nf">AddrAppend</span><span class="p">(</span><span class="nv">$type</span><span class="p">,</span> <span class="nv">$addr</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC1206'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$addr_str</span> <span class="o">=</span> <span class="nv">$type</span> <span class="o">.</span> <span class="s1">&#39;: &#39;</span><span class="p">;</span></div><div class='line' id='LC1207'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$addresses</span> <span class="o">=</span> <span class="k">array</span><span class="p">();</span></div><div class='line' id='LC1208'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">foreach</span> <span class="p">(</span><span class="nv">$addr</span> <span class="k">as</span> <span class="nv">$a</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC1209'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$addresses</span><span class="p">[]</span> <span class="o">=</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">AddrFormat</span><span class="p">(</span><span class="nv">$a</span><span class="p">);</span></div><div class='line' id='LC1210'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC1211'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$addr_str</span> <span class="o">.=</span> <span class="nb">implode</span><span class="p">(</span><span class="s1">&#39;, &#39;</span><span class="p">,</span> <span class="nv">$addresses</span><span class="p">);</span></div><div class='line' id='LC1212'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$addr_str</span> <span class="o">.=</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">LE</span><span class="p">;</span></div><div class='line' id='LC1213'><br/></div><div class='line' id='LC1214'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">return</span> <span class="nv">$addr_str</span><span class="p">;</span></div><div class='line' id='LC1215'>&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC1216'><br/></div><div class='line' id='LC1217'>&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC1218'><span class="sd">   * Formats an address correctly.</span></div><div class='line' id='LC1219'><span class="sd">   * @access public</span></div><div class='line' id='LC1220'><span class="sd">   * @param string $addr</span></div><div class='line' id='LC1221'><span class="sd">   * @return string</span></div><div class='line' id='LC1222'><span class="sd">   */</span></div><div class='line' id='LC1223'>&nbsp;&nbsp;<span class="k">public</span> <span class="k">function</span> <span class="nf">AddrFormat</span><span class="p">(</span><span class="nv">$addr</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC1224'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span> <span class="p">(</span><span class="k">empty</span><span class="p">(</span><span class="nv">$addr</span><span class="p">[</span><span class="mi">1</span><span class="p">]))</span> <span class="p">{</span></div><div class='line' id='LC1225'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">return</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">SecureHeader</span><span class="p">(</span><span class="nv">$addr</span><span class="p">[</span><span class="mi">0</span><span class="p">]);</span></div><div class='line' id='LC1226'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span> <span class="k">else</span> <span class="p">{</span></div><div class='line' id='LC1227'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">return</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">EncodeHeader</span><span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">SecureHeader</span><span class="p">(</span><span class="nv">$addr</span><span class="p">[</span><span class="mi">1</span><span class="p">]),</span> <span class="s1">&#39;phrase&#39;</span><span class="p">)</span> <span class="o">.</span> <span class="s2">&quot; &lt;&quot;</span> <span class="o">.</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">SecureHeader</span><span class="p">(</span><span class="nv">$addr</span><span class="p">[</span><span class="mi">0</span><span class="p">])</span> <span class="o">.</span> <span class="s2">&quot;&gt;&quot;</span><span class="p">;</span></div><div class='line' id='LC1228'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC1229'>&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC1230'><br/></div><div class='line' id='LC1231'>&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC1232'><span class="sd">   * Wraps message for use with mailers that do not</span></div><div class='line' id='LC1233'><span class="sd">   * automatically perform wrapping and for quoted-printable.</span></div><div class='line' id='LC1234'><span class="sd">   * Original written by philippe.</span></div><div class='line' id='LC1235'><span class="sd">   * @param string $message The message to wrap</span></div><div class='line' id='LC1236'><span class="sd">   * @param integer $length The line length to wrap to</span></div><div class='line' id='LC1237'><span class="sd">   * @param boolean $qp_mode Whether to run in Quoted-Printable mode</span></div><div class='line' id='LC1238'><span class="sd">   * @access public</span></div><div class='line' id='LC1239'><span class="sd">   * @return string</span></div><div class='line' id='LC1240'><span class="sd">   */</span></div><div class='line' id='LC1241'>&nbsp;&nbsp;<span class="k">public</span> <span class="k">function</span> <span class="nf">WrapText</span><span class="p">(</span><span class="nv">$message</span><span class="p">,</span> <span class="nv">$length</span><span class="p">,</span> <span class="nv">$qp_mode</span> <span class="o">=</span> <span class="k">false</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC1242'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$soft_break</span> <span class="o">=</span> <span class="p">(</span><span class="nv">$qp_mode</span><span class="p">)</span> <span class="o">?</span> <span class="nb">sprintf</span><span class="p">(</span><span class="s2">&quot; =%s&quot;</span><span class="p">,</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">LE</span><span class="p">)</span> <span class="o">:</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">LE</span><span class="p">;</span></div><div class='line' id='LC1243'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// If utf-8 encoding is used, we will need to make sure we don&#39;t</span></div><div class='line' id='LC1244'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// split multibyte characters when we wrap</span></div><div class='line' id='LC1245'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$is_utf8</span> <span class="o">=</span> <span class="p">(</span><span class="nx">strtolower</span><span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">CharSet</span><span class="p">)</span> <span class="o">==</span> <span class="s2">&quot;utf-8&quot;</span><span class="p">);</span></div><div class='line' id='LC1246'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$lelen</span> <span class="o">=</span> <span class="nb">strlen</span><span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">LE</span><span class="p">);</span></div><div class='line' id='LC1247'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$crlflen</span> <span class="o">=</span> <span class="nb">strlen</span><span class="p">(</span><span class="nx">self</span><span class="o">::</span><span class="na">CRLF</span><span class="p">);</span></div><div class='line' id='LC1248'><br/></div><div class='line' id='LC1249'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$message</span> <span class="o">=</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">FixEOL</span><span class="p">(</span><span class="nv">$message</span><span class="p">);</span></div><div class='line' id='LC1250'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span> <span class="p">(</span><span class="nx">substr</span><span class="p">(</span><span class="nv">$message</span><span class="p">,</span> <span class="o">-</span><span class="nv">$lelen</span><span class="p">)</span> <span class="o">==</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">LE</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC1251'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$message</span> <span class="o">=</span> <span class="nx">substr</span><span class="p">(</span><span class="nv">$message</span><span class="p">,</span> <span class="mi">0</span><span class="p">,</span> <span class="o">-</span><span class="nv">$lelen</span><span class="p">);</span></div><div class='line' id='LC1252'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC1253'><br/></div><div class='line' id='LC1254'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$line</span> <span class="o">=</span> <span class="nb">explode</span><span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">LE</span><span class="p">,</span> <span class="nv">$message</span><span class="p">);</span>   <span class="c1">// Magic. We know FixEOL uses $LE</span></div><div class='line' id='LC1255'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$message</span> <span class="o">=</span> <span class="s1">&#39;&#39;</span><span class="p">;</span></div><div class='line' id='LC1256'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">for</span> <span class="p">(</span><span class="nv">$i</span> <span class="o">=</span> <span class="mi">0</span> <span class="p">;</span><span class="nv">$i</span> <span class="o">&lt;</span> <span class="nb">count</span><span class="p">(</span><span class="nv">$line</span><span class="p">);</span> <span class="nv">$i</span><span class="o">++</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC1257'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$line_part</span> <span class="o">=</span> <span class="nb">explode</span><span class="p">(</span><span class="s1">&#39; &#39;</span><span class="p">,</span> <span class="nv">$line</span><span class="p">[</span><span class="nv">$i</span><span class="p">]);</span></div><div class='line' id='LC1258'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$buf</span> <span class="o">=</span> <span class="s1">&#39;&#39;</span><span class="p">;</span></div><div class='line' id='LC1259'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">for</span> <span class="p">(</span><span class="nv">$e</span> <span class="o">=</span> <span class="mi">0</span><span class="p">;</span> <span class="nv">$e</span><span class="o">&lt;</span><span class="nb">count</span><span class="p">(</span><span class="nv">$line_part</span><span class="p">);</span> <span class="nv">$e</span><span class="o">++</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC1260'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$word</span> <span class="o">=</span> <span class="nv">$line_part</span><span class="p">[</span><span class="nv">$e</span><span class="p">];</span></div><div class='line' id='LC1261'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span> <span class="p">(</span><span class="nv">$qp_mode</span> <span class="k">and</span> <span class="p">(</span><span class="nb">strlen</span><span class="p">(</span><span class="nv">$word</span><span class="p">)</span> <span class="o">&gt;</span> <span class="nv">$length</span><span class="p">))</span> <span class="p">{</span></div><div class='line' id='LC1262'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$space_left</span> <span class="o">=</span> <span class="nv">$length</span> <span class="o">-</span> <span class="nb">strlen</span><span class="p">(</span><span class="nv">$buf</span><span class="p">)</span> <span class="o">-</span> <span class="nv">$crlflen</span><span class="p">;</span></div><div class='line' id='LC1263'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span> <span class="p">(</span><span class="nv">$e</span> <span class="o">!=</span> <span class="mi">0</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC1264'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span> <span class="p">(</span><span class="nv">$space_left</span> <span class="o">&gt;</span> <span class="mi">20</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC1265'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$len</span> <span class="o">=</span> <span class="nv">$space_left</span><span class="p">;</span></div><div class='line' id='LC1266'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span> <span class="p">(</span><span class="nv">$is_utf8</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC1267'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$len</span> <span class="o">=</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">UTF8CharBoundary</span><span class="p">(</span><span class="nv">$word</span><span class="p">,</span> <span class="nv">$len</span><span class="p">);</span></div><div class='line' id='LC1268'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span> <span class="k">elseif</span> <span class="p">(</span><span class="nx">substr</span><span class="p">(</span><span class="nv">$word</span><span class="p">,</span> <span class="nv">$len</span> <span class="o">-</span> <span class="mi">1</span><span class="p">,</span> <span class="mi">1</span><span class="p">)</span> <span class="o">==</span> <span class="s2">&quot;=&quot;</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC1269'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$len</span><span class="o">--</span><span class="p">;</span></div><div class='line' id='LC1270'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span> <span class="k">elseif</span> <span class="p">(</span><span class="nx">substr</span><span class="p">(</span><span class="nv">$word</span><span class="p">,</span> <span class="nv">$len</span> <span class="o">-</span> <span class="mi">2</span><span class="p">,</span> <span class="mi">1</span><span class="p">)</span> <span class="o">==</span> <span class="s2">&quot;=&quot;</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC1271'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$len</span> <span class="o">-=</span> <span class="mi">2</span><span class="p">;</span></div><div class='line' id='LC1272'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC1273'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$part</span> <span class="o">=</span> <span class="nx">substr</span><span class="p">(</span><span class="nv">$word</span><span class="p">,</span> <span class="mi">0</span><span class="p">,</span> <span class="nv">$len</span><span class="p">);</span></div><div class='line' id='LC1274'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$word</span> <span class="o">=</span> <span class="nx">substr</span><span class="p">(</span><span class="nv">$word</span><span class="p">,</span> <span class="nv">$len</span><span class="p">);</span></div><div class='line' id='LC1275'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$buf</span> <span class="o">.=</span> <span class="s1">&#39; &#39;</span> <span class="o">.</span> <span class="nv">$part</span><span class="p">;</span></div><div class='line' id='LC1276'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$message</span> <span class="o">.=</span> <span class="nv">$buf</span> <span class="o">.</span> <span class="nb">sprintf</span><span class="p">(</span><span class="s2">&quot;=%s&quot;</span><span class="p">,</span> <span class="nx">self</span><span class="o">::</span><span class="na">CRLF</span><span class="p">);</span></div><div class='line' id='LC1277'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span> <span class="k">else</span> <span class="p">{</span></div><div class='line' id='LC1278'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$message</span> <span class="o">.=</span> <span class="nv">$buf</span> <span class="o">.</span> <span class="nv">$soft_break</span><span class="p">;</span></div><div class='line' id='LC1279'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC1280'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$buf</span> <span class="o">=</span> <span class="s1">&#39;&#39;</span><span class="p">;</span></div><div class='line' id='LC1281'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC1282'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">while</span> <span class="p">(</span><span class="nb">strlen</span><span class="p">(</span><span class="nv">$word</span><span class="p">)</span> <span class="o">&gt;</span> <span class="mi">0</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC1283'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span> <span class="p">(</span><span class="nv">$length</span> <span class="o">&lt;=</span> <span class="mi">0</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC1284'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">break</span><span class="p">;</span></div><div class='line' id='LC1285'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC1286'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$len</span> <span class="o">=</span> <span class="nv">$length</span><span class="p">;</span></div><div class='line' id='LC1287'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span> <span class="p">(</span><span class="nv">$is_utf8</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC1288'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$len</span> <span class="o">=</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">UTF8CharBoundary</span><span class="p">(</span><span class="nv">$word</span><span class="p">,</span> <span class="nv">$len</span><span class="p">);</span></div><div class='line' id='LC1289'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span> <span class="k">elseif</span> <span class="p">(</span><span class="nx">substr</span><span class="p">(</span><span class="nv">$word</span><span class="p">,</span> <span class="nv">$len</span> <span class="o">-</span> <span class="mi">1</span><span class="p">,</span> <span class="mi">1</span><span class="p">)</span> <span class="o">==</span> <span class="s2">&quot;=&quot;</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC1290'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$len</span><span class="o">--</span><span class="p">;</span></div><div class='line' id='LC1291'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span> <span class="k">elseif</span> <span class="p">(</span><span class="nx">substr</span><span class="p">(</span><span class="nv">$word</span><span class="p">,</span> <span class="nv">$len</span> <span class="o">-</span> <span class="mi">2</span><span class="p">,</span> <span class="mi">1</span><span class="p">)</span> <span class="o">==</span> <span class="s2">&quot;=&quot;</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC1292'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$len</span> <span class="o">-=</span> <span class="mi">2</span><span class="p">;</span></div><div class='line' id='LC1293'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC1294'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$part</span> <span class="o">=</span> <span class="nx">substr</span><span class="p">(</span><span class="nv">$word</span><span class="p">,</span> <span class="mi">0</span><span class="p">,</span> <span class="nv">$len</span><span class="p">);</span></div><div class='line' id='LC1295'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$word</span> <span class="o">=</span> <span class="nx">substr</span><span class="p">(</span><span class="nv">$word</span><span class="p">,</span> <span class="nv">$len</span><span class="p">);</span></div><div class='line' id='LC1296'><br/></div><div class='line' id='LC1297'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span> <span class="p">(</span><span class="nb">strlen</span><span class="p">(</span><span class="nv">$word</span><span class="p">)</span> <span class="o">&gt;</span> <span class="mi">0</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC1298'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$message</span> <span class="o">.=</span> <span class="nv">$part</span> <span class="o">.</span> <span class="nb">sprintf</span><span class="p">(</span><span class="s2">&quot;=%s&quot;</span><span class="p">,</span> <span class="nx">self</span><span class="o">::</span><span class="na">CRLF</span><span class="p">);</span></div><div class='line' id='LC1299'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span> <span class="k">else</span> <span class="p">{</span></div><div class='line' id='LC1300'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$buf</span> <span class="o">=</span> <span class="nv">$part</span><span class="p">;</span></div><div class='line' id='LC1301'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC1302'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC1303'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span> <span class="k">else</span> <span class="p">{</span></div><div class='line' id='LC1304'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$buf_o</span> <span class="o">=</span> <span class="nv">$buf</span><span class="p">;</span></div><div class='line' id='LC1305'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$buf</span> <span class="o">.=</span> <span class="p">(</span><span class="nv">$e</span> <span class="o">==</span> <span class="mi">0</span><span class="p">)</span> <span class="o">?</span> <span class="nv">$word</span> <span class="o">:</span> <span class="p">(</span><span class="s1">&#39; &#39;</span> <span class="o">.</span> <span class="nv">$word</span><span class="p">);</span></div><div class='line' id='LC1306'><br/></div><div class='line' id='LC1307'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span> <span class="p">(</span><span class="nb">strlen</span><span class="p">(</span><span class="nv">$buf</span><span class="p">)</span> <span class="o">&gt;</span> <span class="nv">$length</span> <span class="k">and</span> <span class="nv">$buf_o</span> <span class="o">!=</span> <span class="s1">&#39;&#39;</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC1308'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$message</span> <span class="o">.=</span> <span class="nv">$buf_o</span> <span class="o">.</span> <span class="nv">$soft_break</span><span class="p">;</span></div><div class='line' id='LC1309'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$buf</span> <span class="o">=</span> <span class="nv">$word</span><span class="p">;</span></div><div class='line' id='LC1310'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC1311'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC1312'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC1313'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$message</span> <span class="o">.=</span> <span class="nv">$buf</span> <span class="o">.</span> <span class="nx">self</span><span class="o">::</span><span class="na">CRLF</span><span class="p">;</span></div><div class='line' id='LC1314'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC1315'><br/></div><div class='line' id='LC1316'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">return</span> <span class="nv">$message</span><span class="p">;</span></div><div class='line' id='LC1317'>&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC1318'><br/></div><div class='line' id='LC1319'>&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC1320'><span class="sd">   * Finds last character boundary prior to maxLength in a utf-8</span></div><div class='line' id='LC1321'><span class="sd">   * quoted (printable) encoded string.</span></div><div class='line' id='LC1322'><span class="sd">   * Original written by Colin Brown.</span></div><div class='line' id='LC1323'><span class="sd">   * @access public</span></div><div class='line' id='LC1324'><span class="sd">   * @param string $encodedText utf-8 QP text</span></div><div class='line' id='LC1325'><span class="sd">   * @param int    $maxLength   find last character boundary prior to this length</span></div><div class='line' id='LC1326'><span class="sd">   * @return int</span></div><div class='line' id='LC1327'><span class="sd">   */</span></div><div class='line' id='LC1328'>&nbsp;&nbsp;<span class="k">public</span> <span class="k">function</span> <span class="nf">UTF8CharBoundary</span><span class="p">(</span><span class="nv">$encodedText</span><span class="p">,</span> <span class="nv">$maxLength</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC1329'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$foundSplitPos</span> <span class="o">=</span> <span class="k">false</span><span class="p">;</span></div><div class='line' id='LC1330'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$lookBack</span> <span class="o">=</span> <span class="mi">3</span><span class="p">;</span></div><div class='line' id='LC1331'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">while</span> <span class="p">(</span><span class="o">!</span><span class="nv">$foundSplitPos</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC1332'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$lastChunk</span> <span class="o">=</span> <span class="nx">substr</span><span class="p">(</span><span class="nv">$encodedText</span><span class="p">,</span> <span class="nv">$maxLength</span> <span class="o">-</span> <span class="nv">$lookBack</span><span class="p">,</span> <span class="nv">$lookBack</span><span class="p">);</span></div><div class='line' id='LC1333'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$encodedCharPos</span> <span class="o">=</span> <span class="nb">strpos</span><span class="p">(</span><span class="nv">$lastChunk</span><span class="p">,</span> <span class="s2">&quot;=&quot;</span><span class="p">);</span></div><div class='line' id='LC1334'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span> <span class="p">(</span><span class="nv">$encodedCharPos</span> <span class="o">!==</span> <span class="k">false</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC1335'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// Found start of encoded character byte within $lookBack block.</span></div><div class='line' id='LC1336'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// Check the encoded byte value (the 2 chars after the &#39;=&#39;)</span></div><div class='line' id='LC1337'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$hex</span> <span class="o">=</span> <span class="nx">substr</span><span class="p">(</span><span class="nv">$encodedText</span><span class="p">,</span> <span class="nv">$maxLength</span> <span class="o">-</span> <span class="nv">$lookBack</span> <span class="o">+</span> <span class="nv">$encodedCharPos</span> <span class="o">+</span> <span class="mi">1</span><span class="p">,</span> <span class="mi">2</span><span class="p">);</span></div><div class='line' id='LC1338'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$dec</span> <span class="o">=</span> <span class="nx">hexdec</span><span class="p">(</span><span class="nv">$hex</span><span class="p">);</span></div><div class='line' id='LC1339'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span> <span class="p">(</span><span class="nv">$dec</span> <span class="o">&lt;</span> <span class="mi">128</span><span class="p">)</span> <span class="p">{</span> <span class="c1">// Single byte character.</span></div><div class='line' id='LC1340'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// If the encoded char was found at pos 0, it will fit</span></div><div class='line' id='LC1341'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// otherwise reduce maxLength to start of the encoded char</span></div><div class='line' id='LC1342'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$maxLength</span> <span class="o">=</span> <span class="p">(</span><span class="nv">$encodedCharPos</span> <span class="o">==</span> <span class="mi">0</span><span class="p">)</span> <span class="o">?</span> <span class="nv">$maxLength</span> <span class="o">:</span></div><div class='line' id='LC1343'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$maxLength</span> <span class="o">-</span> <span class="p">(</span><span class="nv">$lookBack</span> <span class="o">-</span> <span class="nv">$encodedCharPos</span><span class="p">);</span></div><div class='line' id='LC1344'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$foundSplitPos</span> <span class="o">=</span> <span class="k">true</span><span class="p">;</span></div><div class='line' id='LC1345'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span> <span class="k">elseif</span> <span class="p">(</span><span class="nv">$dec</span> <span class="o">&gt;=</span> <span class="mi">192</span><span class="p">)</span> <span class="p">{</span> <span class="c1">// First byte of a multi byte character</span></div><div class='line' id='LC1346'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// Reduce maxLength to split at start of character</span></div><div class='line' id='LC1347'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$maxLength</span> <span class="o">=</span> <span class="nv">$maxLength</span> <span class="o">-</span> <span class="p">(</span><span class="nv">$lookBack</span> <span class="o">-</span> <span class="nv">$encodedCharPos</span><span class="p">);</span></div><div class='line' id='LC1348'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$foundSplitPos</span> <span class="o">=</span> <span class="k">true</span><span class="p">;</span></div><div class='line' id='LC1349'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span> <span class="k">elseif</span> <span class="p">(</span><span class="nv">$dec</span> <span class="o">&lt;</span> <span class="mi">192</span><span class="p">)</span> <span class="p">{</span> <span class="c1">// Middle byte of a multi byte character, look further back</span></div><div class='line' id='LC1350'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$lookBack</span> <span class="o">+=</span> <span class="mi">3</span><span class="p">;</span></div><div class='line' id='LC1351'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC1352'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span> <span class="k">else</span> <span class="p">{</span></div><div class='line' id='LC1353'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// No encoded character found</span></div><div class='line' id='LC1354'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$foundSplitPos</span> <span class="o">=</span> <span class="k">true</span><span class="p">;</span></div><div class='line' id='LC1355'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC1356'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC1357'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">return</span> <span class="nv">$maxLength</span><span class="p">;</span></div><div class='line' id='LC1358'>&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC1359'><br/></div><div class='line' id='LC1360'><br/></div><div class='line' id='LC1361'>&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC1362'><span class="sd">   * Set the body wrapping.</span></div><div class='line' id='LC1363'><span class="sd">   * @access public</span></div><div class='line' id='LC1364'><span class="sd">   * @return void</span></div><div class='line' id='LC1365'><span class="sd">   */</span></div><div class='line' id='LC1366'>&nbsp;&nbsp;<span class="k">public</span> <span class="k">function</span> <span class="nf">SetWordWrap</span><span class="p">()</span> <span class="p">{</span></div><div class='line' id='LC1367'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span><span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">WordWrap</span> <span class="o">&lt;</span> <span class="mi">1</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC1368'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">return</span><span class="p">;</span></div><div class='line' id='LC1369'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC1370'><br/></div><div class='line' id='LC1371'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">switch</span><span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">message_type</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC1372'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">case</span> <span class="s1">&#39;alt&#39;</span><span class="o">:</span></div><div class='line' id='LC1373'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">case</span> <span class="s1">&#39;alt_inline&#39;</span><span class="o">:</span></div><div class='line' id='LC1374'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">case</span> <span class="s1">&#39;alt_attach&#39;</span><span class="o">:</span></div><div class='line' id='LC1375'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">case</span> <span class="s1">&#39;alt_inline_attach&#39;</span><span class="o">:</span></div><div class='line' id='LC1376'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">AltBody</span> <span class="o">=</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">WrapText</span><span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">AltBody</span><span class="p">,</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">WordWrap</span><span class="p">);</span></div><div class='line' id='LC1377'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">break</span><span class="p">;</span></div><div class='line' id='LC1378'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">default</span><span class="o">:</span></div><div class='line' id='LC1379'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">Body</span> <span class="o">=</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">WrapText</span><span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">Body</span><span class="p">,</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">WordWrap</span><span class="p">);</span></div><div class='line' id='LC1380'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">break</span><span class="p">;</span></div><div class='line' id='LC1381'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC1382'>&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC1383'><br/></div><div class='line' id='LC1384'>&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC1385'><span class="sd">   * Assembles message header.</span></div><div class='line' id='LC1386'><span class="sd">   * @access public</span></div><div class='line' id='LC1387'><span class="sd">   * @return string The assembled header</span></div><div class='line' id='LC1388'><span class="sd">   */</span></div><div class='line' id='LC1389'>&nbsp;&nbsp;<span class="k">public</span> <span class="k">function</span> <span class="nf">CreateHeader</span><span class="p">()</span> <span class="p">{</span></div><div class='line' id='LC1390'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$result</span> <span class="o">=</span> <span class="s1">&#39;&#39;</span><span class="p">;</span></div><div class='line' id='LC1391'><br/></div><div class='line' id='LC1392'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// Set the boundaries</span></div><div class='line' id='LC1393'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$uniq_id</span> <span class="o">=</span> <span class="nb">md5</span><span class="p">(</span><span class="nb">uniqid</span><span class="p">(</span><span class="nb">time</span><span class="p">()));</span></div><div class='line' id='LC1394'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">boundary</span><span class="p">[</span><span class="mi">1</span><span class="p">]</span> <span class="o">=</span> <span class="s1">&#39;b1_&#39;</span> <span class="o">.</span> <span class="nv">$uniq_id</span><span class="p">;</span></div><div class='line' id='LC1395'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">boundary</span><span class="p">[</span><span class="mi">2</span><span class="p">]</span> <span class="o">=</span> <span class="s1">&#39;b2_&#39;</span> <span class="o">.</span> <span class="nv">$uniq_id</span><span class="p">;</span></div><div class='line' id='LC1396'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">boundary</span><span class="p">[</span><span class="mi">3</span><span class="p">]</span> <span class="o">=</span> <span class="s1">&#39;b3_&#39;</span> <span class="o">.</span> <span class="nv">$uniq_id</span><span class="p">;</span></div><div class='line' id='LC1397'><br/></div><div class='line' id='LC1398'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span> <span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">MessageDate</span> <span class="o">==</span> <span class="s1">&#39;&#39;</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC1399'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$result</span> <span class="o">.=</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">HeaderLine</span><span class="p">(</span><span class="s1">&#39;Date&#39;</span><span class="p">,</span> <span class="nx">self</span><span class="o">::</span><span class="na">RFCDate</span><span class="p">());</span></div><div class='line' id='LC1400'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span> <span class="k">else</span> <span class="p">{</span></div><div class='line' id='LC1401'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$result</span> <span class="o">.=</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">HeaderLine</span><span class="p">(</span><span class="s1">&#39;Date&#39;</span><span class="p">,</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">MessageDate</span><span class="p">);</span></div><div class='line' id='LC1402'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC1403'><br/></div><div class='line' id='LC1404'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span> <span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">ReturnPath</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC1405'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$result</span> <span class="o">.=</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">HeaderLine</span><span class="p">(</span><span class="s1">&#39;Return-Path&#39;</span><span class="p">,</span> <span class="s1">&#39;&lt;&#39;</span><span class="o">.</span><span class="nx">trim</span><span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">ReturnPath</span><span class="p">)</span><span class="o">.</span><span class="s1">&#39;&gt;&#39;</span><span class="p">);</span></div><div class='line' id='LC1406'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span> <span class="k">elseif</span> <span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">Sender</span> <span class="o">==</span> <span class="s1">&#39;&#39;</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC1407'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$result</span> <span class="o">.=</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">HeaderLine</span><span class="p">(</span><span class="s1">&#39;Return-Path&#39;</span><span class="p">,</span> <span class="s1">&#39;&lt;&#39;</span><span class="o">.</span><span class="nx">trim</span><span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">From</span><span class="p">)</span><span class="o">.</span><span class="s1">&#39;&gt;&#39;</span><span class="p">);</span></div><div class='line' id='LC1408'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span> <span class="k">else</span> <span class="p">{</span></div><div class='line' id='LC1409'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$result</span> <span class="o">.=</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">HeaderLine</span><span class="p">(</span><span class="s1">&#39;Return-Path&#39;</span><span class="p">,</span> <span class="s1">&#39;&lt;&#39;</span><span class="o">.</span><span class="nx">trim</span><span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">Sender</span><span class="p">)</span><span class="o">.</span><span class="s1">&#39;&gt;&#39;</span><span class="p">);</span></div><div class='line' id='LC1410'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC1411'><br/></div><div class='line' id='LC1412'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// To be created automatically by mail()</span></div><div class='line' id='LC1413'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span><span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">Mailer</span> <span class="o">!=</span> <span class="s1">&#39;mail&#39;</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC1414'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span> <span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">SingleTo</span> <span class="o">===</span> <span class="k">true</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC1415'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">foreach</span><span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">to</span> <span class="k">as</span> <span class="nv">$t</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC1416'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">SingleToArray</span><span class="p">[]</span> <span class="o">=</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">AddrFormat</span><span class="p">(</span><span class="nv">$t</span><span class="p">);</span></div><div class='line' id='LC1417'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC1418'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span> <span class="k">else</span> <span class="p">{</span></div><div class='line' id='LC1419'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span><span class="p">(</span><span class="nb">count</span><span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">to</span><span class="p">)</span> <span class="o">&gt;</span> <span class="mi">0</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC1420'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$result</span> <span class="o">.=</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">AddrAppend</span><span class="p">(</span><span class="s1">&#39;To&#39;</span><span class="p">,</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">to</span><span class="p">);</span></div><div class='line' id='LC1421'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span> <span class="k">elseif</span> <span class="p">(</span><span class="nb">count</span><span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">cc</span><span class="p">)</span> <span class="o">==</span> <span class="mi">0</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC1422'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$result</span> <span class="o">.=</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">HeaderLine</span><span class="p">(</span><span class="s1">&#39;To&#39;</span><span class="p">,</span> <span class="s1">&#39;undisclosed-recipients:;&#39;</span><span class="p">);</span></div><div class='line' id='LC1423'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC1424'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC1425'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC1426'><br/></div><div class='line' id='LC1427'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$from</span> <span class="o">=</span> <span class="k">array</span><span class="p">();</span></div><div class='line' id='LC1428'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$from</span><span class="p">[</span><span class="mi">0</span><span class="p">][</span><span class="mi">0</span><span class="p">]</span> <span class="o">=</span> <span class="nx">trim</span><span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">From</span><span class="p">);</span></div><div class='line' id='LC1429'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$from</span><span class="p">[</span><span class="mi">0</span><span class="p">][</span><span class="mi">1</span><span class="p">]</span> <span class="o">=</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">FromName</span><span class="p">;</span></div><div class='line' id='LC1430'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$result</span> <span class="o">.=</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">AddrAppend</span><span class="p">(</span><span class="s1">&#39;From&#39;</span><span class="p">,</span> <span class="nv">$from</span><span class="p">);</span></div><div class='line' id='LC1431'><br/></div><div class='line' id='LC1432'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// sendmail and mail() extract Cc from the header before sending</span></div><div class='line' id='LC1433'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span><span class="p">(</span><span class="nb">count</span><span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">cc</span><span class="p">)</span> <span class="o">&gt;</span> <span class="mi">0</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC1434'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$result</span> <span class="o">.=</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">AddrAppend</span><span class="p">(</span><span class="s1">&#39;Cc&#39;</span><span class="p">,</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">cc</span><span class="p">);</span></div><div class='line' id='LC1435'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC1436'><br/></div><div class='line' id='LC1437'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// sendmail and mail() extract Bcc from the header before sending</span></div><div class='line' id='LC1438'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span><span class="p">(((</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">Mailer</span> <span class="o">==</span> <span class="s1">&#39;sendmail&#39;</span><span class="p">)</span> <span class="o">||</span> <span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">Mailer</span> <span class="o">==</span> <span class="s1">&#39;mail&#39;</span><span class="p">))</span> <span class="o">&amp;&amp;</span> <span class="p">(</span><span class="nb">count</span><span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">bcc</span><span class="p">)</span> <span class="o">&gt;</span> <span class="mi">0</span><span class="p">))</span> <span class="p">{</span></div><div class='line' id='LC1439'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$result</span> <span class="o">.=</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">AddrAppend</span><span class="p">(</span><span class="s1">&#39;Bcc&#39;</span><span class="p">,</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">bcc</span><span class="p">);</span></div><div class='line' id='LC1440'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC1441'><br/></div><div class='line' id='LC1442'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span><span class="p">(</span><span class="nb">count</span><span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">ReplyTo</span><span class="p">)</span> <span class="o">&gt;</span> <span class="mi">0</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC1443'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$result</span> <span class="o">.=</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">AddrAppend</span><span class="p">(</span><span class="s1">&#39;Reply-To&#39;</span><span class="p">,</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">ReplyTo</span><span class="p">);</span></div><div class='line' id='LC1444'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC1445'><br/></div><div class='line' id='LC1446'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// mail() sets the subject itself</span></div><div class='line' id='LC1447'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span><span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">Mailer</span> <span class="o">!=</span> <span class="s1">&#39;mail&#39;</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC1448'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$result</span> <span class="o">.=</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">HeaderLine</span><span class="p">(</span><span class="s1">&#39;Subject&#39;</span><span class="p">,</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">EncodeHeader</span><span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">SecureHeader</span><span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">Subject</span><span class="p">)));</span></div><div class='line' id='LC1449'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC1450'><br/></div><div class='line' id='LC1451'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span><span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">MessageID</span> <span class="o">!=</span> <span class="s1">&#39;&#39;</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC1452'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$result</span> <span class="o">.=</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">HeaderLine</span><span class="p">(</span><span class="s1">&#39;Message-ID&#39;</span><span class="p">,</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">MessageID</span><span class="p">);</span></div><div class='line' id='LC1453'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span> <span class="k">else</span> <span class="p">{</span></div><div class='line' id='LC1454'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$result</span> <span class="o">.=</span> <span class="nb">sprintf</span><span class="p">(</span><span class="s2">&quot;Message-ID: &lt;%s@%s&gt;%s&quot;</span><span class="p">,</span> <span class="nv">$uniq_id</span><span class="p">,</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">ServerHostname</span><span class="p">(),</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">LE</span><span class="p">);</span></div><div class='line' id='LC1455'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC1456'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$result</span> <span class="o">.=</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">HeaderLine</span><span class="p">(</span><span class="s1">&#39;X-Priority&#39;</span><span class="p">,</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">Priority</span><span class="p">);</span></div><div class='line' id='LC1457'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span> <span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">XMailer</span> <span class="o">==</span> <span class="s1">&#39;&#39;</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC1458'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$result</span> <span class="o">.=</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">HeaderLine</span><span class="p">(</span><span class="s1">&#39;X-Mailer&#39;</span><span class="p">,</span> <span class="s1">&#39;PHPMailer &#39;</span><span class="o">.</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">Version</span><span class="o">.</span><span class="s1">&#39; (https://github.com/PHPMailer/PHPMailer/)&#39;</span><span class="p">);</span></div><div class='line' id='LC1459'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span> <span class="k">else</span> <span class="p">{</span></div><div class='line' id='LC1460'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$myXmailer</span> <span class="o">=</span> <span class="nx">trim</span><span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">XMailer</span><span class="p">);</span></div><div class='line' id='LC1461'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span> <span class="p">(</span><span class="nv">$myXmailer</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC1462'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$result</span> <span class="o">.=</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">HeaderLine</span><span class="p">(</span><span class="s1">&#39;X-Mailer&#39;</span><span class="p">,</span> <span class="nv">$myXmailer</span><span class="p">);</span></div><div class='line' id='LC1463'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC1464'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC1465'><br/></div><div class='line' id='LC1466'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span><span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">ConfirmReadingTo</span> <span class="o">!=</span> <span class="s1">&#39;&#39;</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC1467'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$result</span> <span class="o">.=</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">HeaderLine</span><span class="p">(</span><span class="s1">&#39;Disposition-Notification-To&#39;</span><span class="p">,</span> <span class="s1">&#39;&lt;&#39;</span> <span class="o">.</span> <span class="nx">trim</span><span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">ConfirmReadingTo</span><span class="p">)</span> <span class="o">.</span> <span class="s1">&#39;&gt;&#39;</span><span class="p">);</span></div><div class='line' id='LC1468'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC1469'><br/></div><div class='line' id='LC1470'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// Add custom headers</span></div><div class='line' id='LC1471'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">for</span><span class="p">(</span><span class="nv">$index</span> <span class="o">=</span> <span class="mi">0</span><span class="p">;</span> <span class="nv">$index</span> <span class="o">&lt;</span> <span class="nb">count</span><span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">CustomHeader</span><span class="p">);</span> <span class="nv">$index</span><span class="o">++</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC1472'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$result</span> <span class="o">.=</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">HeaderLine</span><span class="p">(</span><span class="nx">trim</span><span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">CustomHeader</span><span class="p">[</span><span class="nv">$index</span><span class="p">][</span><span class="mi">0</span><span class="p">]),</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">EncodeHeader</span><span class="p">(</span><span class="nx">trim</span><span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">CustomHeader</span><span class="p">[</span><span class="nv">$index</span><span class="p">][</span><span class="mi">1</span><span class="p">])));</span></div><div class='line' id='LC1473'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC1474'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span> <span class="p">(</span><span class="o">!</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">sign_key_file</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC1475'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$result</span> <span class="o">.=</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">HeaderLine</span><span class="p">(</span><span class="s1">&#39;MIME-Version&#39;</span><span class="p">,</span> <span class="s1">&#39;1.0&#39;</span><span class="p">);</span></div><div class='line' id='LC1476'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$result</span> <span class="o">.=</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">GetMailMIME</span><span class="p">();</span></div><div class='line' id='LC1477'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC1478'><br/></div><div class='line' id='LC1479'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">return</span> <span class="nv">$result</span><span class="p">;</span></div><div class='line' id='LC1480'>&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC1481'><br/></div><div class='line' id='LC1482'>&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC1483'><span class="sd">   * Returns the message MIME.</span></div><div class='line' id='LC1484'><span class="sd">   * @access public</span></div><div class='line' id='LC1485'><span class="sd">   * @return string</span></div><div class='line' id='LC1486'><span class="sd">   */</span></div><div class='line' id='LC1487'>&nbsp;&nbsp;<span class="k">public</span> <span class="k">function</span> <span class="nf">GetMailMIME</span><span class="p">()</span> <span class="p">{</span></div><div class='line' id='LC1488'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$result</span> <span class="o">=</span> <span class="s1">&#39;&#39;</span><span class="p">;</span></div><div class='line' id='LC1489'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">switch</span><span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">message_type</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC1490'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">case</span> <span class="s1">&#39;inline&#39;</span><span class="o">:</span></div><div class='line' id='LC1491'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$result</span> <span class="o">.=</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">HeaderLine</span><span class="p">(</span><span class="s1">&#39;Content-Type&#39;</span><span class="p">,</span> <span class="s1">&#39;multipart/related;&#39;</span><span class="p">);</span></div><div class='line' id='LC1492'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$result</span> <span class="o">.=</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">TextLine</span><span class="p">(</span><span class="s2">&quot;</span><span class="se">\t</span><span class="s2">boundary=</span><span class="se">\&quot;</span><span class="s2">&quot;</span> <span class="o">.</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">boundary</span><span class="p">[</span><span class="mi">1</span><span class="p">]</span><span class="o">.</span><span class="s1">&#39;&quot;&#39;</span><span class="p">);</span></div><div class='line' id='LC1493'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">break</span><span class="p">;</span></div><div class='line' id='LC1494'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">case</span> <span class="s1">&#39;attach&#39;</span><span class="o">:</span></div><div class='line' id='LC1495'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">case</span> <span class="s1">&#39;inline_attach&#39;</span><span class="o">:</span></div><div class='line' id='LC1496'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">case</span> <span class="s1">&#39;alt_attach&#39;</span><span class="o">:</span></div><div class='line' id='LC1497'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">case</span> <span class="s1">&#39;alt_inline_attach&#39;</span><span class="o">:</span></div><div class='line' id='LC1498'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$result</span> <span class="o">.=</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">HeaderLine</span><span class="p">(</span><span class="s1">&#39;Content-Type&#39;</span><span class="p">,</span> <span class="s1">&#39;multipart/mixed;&#39;</span><span class="p">);</span></div><div class='line' id='LC1499'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$result</span> <span class="o">.=</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">TextLine</span><span class="p">(</span><span class="s2">&quot;</span><span class="se">\t</span><span class="s2">boundary=</span><span class="se">\&quot;</span><span class="s2">&quot;</span> <span class="o">.</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">boundary</span><span class="p">[</span><span class="mi">1</span><span class="p">]</span><span class="o">.</span><span class="s1">&#39;&quot;&#39;</span><span class="p">);</span></div><div class='line' id='LC1500'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">break</span><span class="p">;</span></div><div class='line' id='LC1501'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">case</span> <span class="s1">&#39;alt&#39;</span><span class="o">:</span></div><div class='line' id='LC1502'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">case</span> <span class="s1">&#39;alt_inline&#39;</span><span class="o">:</span></div><div class='line' id='LC1503'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$result</span> <span class="o">.=</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">HeaderLine</span><span class="p">(</span><span class="s1">&#39;Content-Type&#39;</span><span class="p">,</span> <span class="s1">&#39;multipart/alternative;&#39;</span><span class="p">);</span></div><div class='line' id='LC1504'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$result</span> <span class="o">.=</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">TextLine</span><span class="p">(</span><span class="s2">&quot;</span><span class="se">\t</span><span class="s2">boundary=</span><span class="se">\&quot;</span><span class="s2">&quot;</span> <span class="o">.</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">boundary</span><span class="p">[</span><span class="mi">1</span><span class="p">]</span><span class="o">.</span><span class="s1">&#39;&quot;&#39;</span><span class="p">);</span></div><div class='line' id='LC1505'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">break</span><span class="p">;</span></div><div class='line' id='LC1506'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">default</span><span class="o">:</span></div><div class='line' id='LC1507'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// Catches case &#39;plain&#39;: and case &#39;&#39;:</span></div><div class='line' id='LC1508'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$result</span> <span class="o">.=</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">TextLine</span><span class="p">(</span><span class="s1">&#39;Content-Type: &#39;</span><span class="o">.</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">ContentType</span><span class="o">.</span><span class="s1">&#39;; charset=&#39;</span><span class="o">.</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">CharSet</span><span class="p">);</span></div><div class='line' id='LC1509'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">break</span><span class="p">;</span></div><div class='line' id='LC1510'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC1511'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">//RFC1341 part 5 says 7bit is assumed if not specified</span></div><div class='line' id='LC1512'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span> <span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">Encoding</span> <span class="o">!=</span> <span class="s1">&#39;7bit&#39;</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC1513'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$result</span> <span class="o">.=</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">HeaderLine</span><span class="p">(</span><span class="s1">&#39;Content-Transfer-Encoding&#39;</span><span class="p">,</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">Encoding</span><span class="p">);</span></div><div class='line' id='LC1514'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC1515'><br/></div><div class='line' id='LC1516'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span><span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">Mailer</span> <span class="o">!=</span> <span class="s1">&#39;mail&#39;</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC1517'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$result</span> <span class="o">.=</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">LE</span><span class="p">;</span></div><div class='line' id='LC1518'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC1519'><br/></div><div class='line' id='LC1520'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">return</span> <span class="nv">$result</span><span class="p">;</span></div><div class='line' id='LC1521'>&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC1522'><br/></div><div class='line' id='LC1523'>&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC1524'><span class="sd">   * Returns the MIME message (headers and body). Only really valid post PreSend().</span></div><div class='line' id='LC1525'><span class="sd">   * @access public</span></div><div class='line' id='LC1526'><span class="sd">   * @return string</span></div><div class='line' id='LC1527'><span class="sd">   */</span></div><div class='line' id='LC1528'>&nbsp;&nbsp;<span class="k">public</span> <span class="k">function</span> <span class="nf">GetSentMIMEMessage</span><span class="p">()</span> <span class="p">{</span></div><div class='line' id='LC1529'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">return</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">MIMEHeader</span> <span class="o">.</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">mailHeader</span> <span class="o">.</span> <span class="nx">self</span><span class="o">::</span><span class="na">CRLF</span> <span class="o">.</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">MIMEBody</span><span class="p">;</span></div><div class='line' id='LC1530'>&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC1531'><br/></div><div class='line' id='LC1532'><br/></div><div class='line' id='LC1533'>&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC1534'><span class="sd">   * Assembles the message body.  Returns an empty string on failure.</span></div><div class='line' id='LC1535'><span class="sd">   * @access public</span></div><div class='line' id='LC1536'><span class="sd">   * @throws phpmailerException</span></div><div class='line' id='LC1537'><span class="sd">   * @return string The assembled message body</span></div><div class='line' id='LC1538'><span class="sd">   */</span></div><div class='line' id='LC1539'>&nbsp;&nbsp;<span class="k">public</span> <span class="k">function</span> <span class="nf">CreateBody</span><span class="p">()</span> <span class="p">{</span></div><div class='line' id='LC1540'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$body</span> <span class="o">=</span> <span class="s1">&#39;&#39;</span><span class="p">;</span></div><div class='line' id='LC1541'><br/></div><div class='line' id='LC1542'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span> <span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">sign_key_file</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC1543'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$body</span> <span class="o">.=</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">GetMailMIME</span><span class="p">()</span><span class="o">.</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">LE</span><span class="p">;</span></div><div class='line' id='LC1544'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC1545'><br/></div><div class='line' id='LC1546'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">SetWordWrap</span><span class="p">();</span></div><div class='line' id='LC1547'><br/></div><div class='line' id='LC1548'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">switch</span><span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">message_type</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC1549'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">case</span> <span class="s1">&#39;inline&#39;</span><span class="o">:</span></div><div class='line' id='LC1550'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$body</span> <span class="o">.=</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">GetBoundary</span><span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">boundary</span><span class="p">[</span><span class="mi">1</span><span class="p">],</span> <span class="s1">&#39;&#39;</span><span class="p">,</span> <span class="s1">&#39;&#39;</span><span class="p">,</span> <span class="s1">&#39;&#39;</span><span class="p">);</span></div><div class='line' id='LC1551'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$body</span> <span class="o">.=</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">EncodeString</span><span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">Body</span><span class="p">,</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">Encoding</span><span class="p">);</span></div><div class='line' id='LC1552'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$body</span> <span class="o">.=</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">LE</span><span class="o">.</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">LE</span><span class="p">;</span></div><div class='line' id='LC1553'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$body</span> <span class="o">.=</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">AttachAll</span><span class="p">(</span><span class="s1">&#39;inline&#39;</span><span class="p">,</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">boundary</span><span class="p">[</span><span class="mi">1</span><span class="p">]);</span></div><div class='line' id='LC1554'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">break</span><span class="p">;</span></div><div class='line' id='LC1555'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">case</span> <span class="s1">&#39;attach&#39;</span><span class="o">:</span></div><div class='line' id='LC1556'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$body</span> <span class="o">.=</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">GetBoundary</span><span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">boundary</span><span class="p">[</span><span class="mi">1</span><span class="p">],</span> <span class="s1">&#39;&#39;</span><span class="p">,</span> <span class="s1">&#39;&#39;</span><span class="p">,</span> <span class="s1">&#39;&#39;</span><span class="p">);</span></div><div class='line' id='LC1557'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$body</span> <span class="o">.=</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">EncodeString</span><span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">Body</span><span class="p">,</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">Encoding</span><span class="p">);</span></div><div class='line' id='LC1558'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$body</span> <span class="o">.=</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">LE</span><span class="o">.</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">LE</span><span class="p">;</span></div><div class='line' id='LC1559'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$body</span> <span class="o">.=</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">AttachAll</span><span class="p">(</span><span class="s1">&#39;attachment&#39;</span><span class="p">,</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">boundary</span><span class="p">[</span><span class="mi">1</span><span class="p">]);</span></div><div class='line' id='LC1560'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">break</span><span class="p">;</span></div><div class='line' id='LC1561'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">case</span> <span class="s1">&#39;inline_attach&#39;</span><span class="o">:</span></div><div class='line' id='LC1562'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$body</span> <span class="o">.=</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">TextLine</span><span class="p">(</span><span class="s1">&#39;--&#39;</span> <span class="o">.</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">boundary</span><span class="p">[</span><span class="mi">1</span><span class="p">]);</span></div><div class='line' id='LC1563'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$body</span> <span class="o">.=</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">HeaderLine</span><span class="p">(</span><span class="s1">&#39;Content-Type&#39;</span><span class="p">,</span> <span class="s1">&#39;multipart/related;&#39;</span><span class="p">);</span></div><div class='line' id='LC1564'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$body</span> <span class="o">.=</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">TextLine</span><span class="p">(</span><span class="s2">&quot;</span><span class="se">\t</span><span class="s2">boundary=</span><span class="se">\&quot;</span><span class="s2">&quot;</span> <span class="o">.</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">boundary</span><span class="p">[</span><span class="mi">2</span><span class="p">]</span><span class="o">.</span><span class="s1">&#39;&quot;&#39;</span><span class="p">);</span></div><div class='line' id='LC1565'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$body</span> <span class="o">.=</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">LE</span><span class="p">;</span></div><div class='line' id='LC1566'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$body</span> <span class="o">.=</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">GetBoundary</span><span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">boundary</span><span class="p">[</span><span class="mi">2</span><span class="p">],</span> <span class="s1">&#39;&#39;</span><span class="p">,</span> <span class="s1">&#39;&#39;</span><span class="p">,</span> <span class="s1">&#39;&#39;</span><span class="p">);</span></div><div class='line' id='LC1567'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$body</span> <span class="o">.=</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">EncodeString</span><span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">Body</span><span class="p">,</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">Encoding</span><span class="p">);</span></div><div class='line' id='LC1568'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$body</span> <span class="o">.=</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">LE</span><span class="o">.</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">LE</span><span class="p">;</span></div><div class='line' id='LC1569'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$body</span> <span class="o">.=</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">AttachAll</span><span class="p">(</span><span class="s1">&#39;inline&#39;</span><span class="p">,</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">boundary</span><span class="p">[</span><span class="mi">2</span><span class="p">]);</span></div><div class='line' id='LC1570'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$body</span> <span class="o">.=</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">LE</span><span class="p">;</span></div><div class='line' id='LC1571'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$body</span> <span class="o">.=</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">AttachAll</span><span class="p">(</span><span class="s1">&#39;attachment&#39;</span><span class="p">,</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">boundary</span><span class="p">[</span><span class="mi">1</span><span class="p">]);</span></div><div class='line' id='LC1572'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">break</span><span class="p">;</span></div><div class='line' id='LC1573'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">case</span> <span class="s1">&#39;alt&#39;</span><span class="o">:</span></div><div class='line' id='LC1574'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$body</span> <span class="o">.=</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">GetBoundary</span><span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">boundary</span><span class="p">[</span><span class="mi">1</span><span class="p">],</span> <span class="s1">&#39;&#39;</span><span class="p">,</span> <span class="s1">&#39;text/plain&#39;</span><span class="p">,</span> <span class="s1">&#39;&#39;</span><span class="p">);</span></div><div class='line' id='LC1575'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$body</span> <span class="o">.=</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">EncodeString</span><span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">AltBody</span><span class="p">,</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">Encoding</span><span class="p">);</span></div><div class='line' id='LC1576'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$body</span> <span class="o">.=</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">LE</span><span class="o">.</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">LE</span><span class="p">;</span></div><div class='line' id='LC1577'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$body</span> <span class="o">.=</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">GetBoundary</span><span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">boundary</span><span class="p">[</span><span class="mi">1</span><span class="p">],</span> <span class="s1">&#39;&#39;</span><span class="p">,</span> <span class="s1">&#39;text/html&#39;</span><span class="p">,</span> <span class="s1">&#39;&#39;</span><span class="p">);</span></div><div class='line' id='LC1578'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$body</span> <span class="o">.=</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">EncodeString</span><span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">Body</span><span class="p">,</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">Encoding</span><span class="p">);</span></div><div class='line' id='LC1579'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$body</span> <span class="o">.=</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">LE</span><span class="o">.</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">LE</span><span class="p">;</span></div><div class='line' id='LC1580'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$body</span> <span class="o">.=</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">EndBoundary</span><span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">boundary</span><span class="p">[</span><span class="mi">1</span><span class="p">]);</span></div><div class='line' id='LC1581'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">break</span><span class="p">;</span></div><div class='line' id='LC1582'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">case</span> <span class="s1">&#39;alt_inline&#39;</span><span class="o">:</span></div><div class='line' id='LC1583'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$body</span> <span class="o">.=</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">GetBoundary</span><span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">boundary</span><span class="p">[</span><span class="mi">1</span><span class="p">],</span> <span class="s1">&#39;&#39;</span><span class="p">,</span> <span class="s1">&#39;text/plain&#39;</span><span class="p">,</span> <span class="s1">&#39;&#39;</span><span class="p">);</span></div><div class='line' id='LC1584'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$body</span> <span class="o">.=</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">EncodeString</span><span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">AltBody</span><span class="p">,</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">Encoding</span><span class="p">);</span></div><div class='line' id='LC1585'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$body</span> <span class="o">.=</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">LE</span><span class="o">.</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">LE</span><span class="p">;</span></div><div class='line' id='LC1586'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$body</span> <span class="o">.=</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">TextLine</span><span class="p">(</span><span class="s1">&#39;--&#39;</span> <span class="o">.</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">boundary</span><span class="p">[</span><span class="mi">1</span><span class="p">]);</span></div><div class='line' id='LC1587'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$body</span> <span class="o">.=</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">HeaderLine</span><span class="p">(</span><span class="s1">&#39;Content-Type&#39;</span><span class="p">,</span> <span class="s1">&#39;multipart/related;&#39;</span><span class="p">);</span></div><div class='line' id='LC1588'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$body</span> <span class="o">.=</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">TextLine</span><span class="p">(</span><span class="s2">&quot;</span><span class="se">\t</span><span class="s2">boundary=</span><span class="se">\&quot;</span><span class="s2">&quot;</span> <span class="o">.</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">boundary</span><span class="p">[</span><span class="mi">2</span><span class="p">]</span><span class="o">.</span><span class="s1">&#39;&quot;&#39;</span><span class="p">);</span></div><div class='line' id='LC1589'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$body</span> <span class="o">.=</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">LE</span><span class="p">;</span></div><div class='line' id='LC1590'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$body</span> <span class="o">.=</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">GetBoundary</span><span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">boundary</span><span class="p">[</span><span class="mi">2</span><span class="p">],</span> <span class="s1">&#39;&#39;</span><span class="p">,</span> <span class="s1">&#39;text/html&#39;</span><span class="p">,</span> <span class="s1">&#39;&#39;</span><span class="p">);</span></div><div class='line' id='LC1591'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$body</span> <span class="o">.=</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">EncodeString</span><span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">Body</span><span class="p">,</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">Encoding</span><span class="p">);</span></div><div class='line' id='LC1592'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$body</span> <span class="o">.=</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">LE</span><span class="o">.</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">LE</span><span class="p">;</span></div><div class='line' id='LC1593'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$body</span> <span class="o">.=</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">AttachAll</span><span class="p">(</span><span class="s1">&#39;inline&#39;</span><span class="p">,</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">boundary</span><span class="p">[</span><span class="mi">2</span><span class="p">]);</span></div><div class='line' id='LC1594'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$body</span> <span class="o">.=</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">LE</span><span class="p">;</span></div><div class='line' id='LC1595'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$body</span> <span class="o">.=</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">EndBoundary</span><span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">boundary</span><span class="p">[</span><span class="mi">1</span><span class="p">]);</span></div><div class='line' id='LC1596'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">break</span><span class="p">;</span></div><div class='line' id='LC1597'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">case</span> <span class="s1">&#39;alt_attach&#39;</span><span class="o">:</span></div><div class='line' id='LC1598'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$body</span> <span class="o">.=</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">TextLine</span><span class="p">(</span><span class="s1">&#39;--&#39;</span> <span class="o">.</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">boundary</span><span class="p">[</span><span class="mi">1</span><span class="p">]);</span></div><div class='line' id='LC1599'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$body</span> <span class="o">.=</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">HeaderLine</span><span class="p">(</span><span class="s1">&#39;Content-Type&#39;</span><span class="p">,</span> <span class="s1">&#39;multipart/alternative;&#39;</span><span class="p">);</span></div><div class='line' id='LC1600'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$body</span> <span class="o">.=</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">TextLine</span><span class="p">(</span><span class="s2">&quot;</span><span class="se">\t</span><span class="s2">boundary=</span><span class="se">\&quot;</span><span class="s2">&quot;</span> <span class="o">.</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">boundary</span><span class="p">[</span><span class="mi">2</span><span class="p">]</span><span class="o">.</span><span class="s1">&#39;&quot;&#39;</span><span class="p">);</span></div><div class='line' id='LC1601'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$body</span> <span class="o">.=</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">LE</span><span class="p">;</span></div><div class='line' id='LC1602'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$body</span> <span class="o">.=</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">GetBoundary</span><span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">boundary</span><span class="p">[</span><span class="mi">2</span><span class="p">],</span> <span class="s1">&#39;&#39;</span><span class="p">,</span> <span class="s1">&#39;text/plain&#39;</span><span class="p">,</span> <span class="s1">&#39;&#39;</span><span class="p">);</span></div><div class='line' id='LC1603'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$body</span> <span class="o">.=</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">EncodeString</span><span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">AltBody</span><span class="p">,</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">Encoding</span><span class="p">);</span></div><div class='line' id='LC1604'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$body</span> <span class="o">.=</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">LE</span><span class="o">.</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">LE</span><span class="p">;</span></div><div class='line' id='LC1605'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$body</span> <span class="o">.=</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">GetBoundary</span><span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">boundary</span><span class="p">[</span><span class="mi">2</span><span class="p">],</span> <span class="s1">&#39;&#39;</span><span class="p">,</span> <span class="s1">&#39;text/html&#39;</span><span class="p">,</span> <span class="s1">&#39;&#39;</span><span class="p">);</span></div><div class='line' id='LC1606'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$body</span> <span class="o">.=</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">EncodeString</span><span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">Body</span><span class="p">,</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">Encoding</span><span class="p">);</span></div><div class='line' id='LC1607'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$body</span> <span class="o">.=</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">LE</span><span class="o">.</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">LE</span><span class="p">;</span></div><div class='line' id='LC1608'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$body</span> <span class="o">.=</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">EndBoundary</span><span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">boundary</span><span class="p">[</span><span class="mi">2</span><span class="p">]);</span></div><div class='line' id='LC1609'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$body</span> <span class="o">.=</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">LE</span><span class="p">;</span></div><div class='line' id='LC1610'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$body</span> <span class="o">.=</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">AttachAll</span><span class="p">(</span><span class="s1">&#39;attachment&#39;</span><span class="p">,</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">boundary</span><span class="p">[</span><span class="mi">1</span><span class="p">]);</span></div><div class='line' id='LC1611'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">break</span><span class="p">;</span></div><div class='line' id='LC1612'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">case</span> <span class="s1">&#39;alt_inline_attach&#39;</span><span class="o">:</span></div><div class='line' id='LC1613'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$body</span> <span class="o">.=</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">TextLine</span><span class="p">(</span><span class="s1">&#39;--&#39;</span> <span class="o">.</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">boundary</span><span class="p">[</span><span class="mi">1</span><span class="p">]);</span></div><div class='line' id='LC1614'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$body</span> <span class="o">.=</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">HeaderLine</span><span class="p">(</span><span class="s1">&#39;Content-Type&#39;</span><span class="p">,</span> <span class="s1">&#39;multipart/alternative;&#39;</span><span class="p">);</span></div><div class='line' id='LC1615'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$body</span> <span class="o">.=</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">TextLine</span><span class="p">(</span><span class="s2">&quot;</span><span class="se">\t</span><span class="s2">boundary=</span><span class="se">\&quot;</span><span class="s2">&quot;</span> <span class="o">.</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">boundary</span><span class="p">[</span><span class="mi">2</span><span class="p">]</span><span class="o">.</span><span class="s1">&#39;&quot;&#39;</span><span class="p">);</span></div><div class='line' id='LC1616'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$body</span> <span class="o">.=</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">LE</span><span class="p">;</span></div><div class='line' id='LC1617'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$body</span> <span class="o">.=</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">GetBoundary</span><span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">boundary</span><span class="p">[</span><span class="mi">2</span><span class="p">],</span> <span class="s1">&#39;&#39;</span><span class="p">,</span> <span class="s1">&#39;text/plain&#39;</span><span class="p">,</span> <span class="s1">&#39;&#39;</span><span class="p">);</span></div><div class='line' id='LC1618'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$body</span> <span class="o">.=</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">EncodeString</span><span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">AltBody</span><span class="p">,</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">Encoding</span><span class="p">);</span></div><div class='line' id='LC1619'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$body</span> <span class="o">.=</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">LE</span><span class="o">.</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">LE</span><span class="p">;</span></div><div class='line' id='LC1620'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$body</span> <span class="o">.=</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">TextLine</span><span class="p">(</span><span class="s1">&#39;--&#39;</span> <span class="o">.</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">boundary</span><span class="p">[</span><span class="mi">2</span><span class="p">]);</span></div><div class='line' id='LC1621'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$body</span> <span class="o">.=</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">HeaderLine</span><span class="p">(</span><span class="s1">&#39;Content-Type&#39;</span><span class="p">,</span> <span class="s1">&#39;multipart/related;&#39;</span><span class="p">);</span></div><div class='line' id='LC1622'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$body</span> <span class="o">.=</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">TextLine</span><span class="p">(</span><span class="s2">&quot;</span><span class="se">\t</span><span class="s2">boundary=</span><span class="se">\&quot;</span><span class="s2">&quot;</span> <span class="o">.</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">boundary</span><span class="p">[</span><span class="mi">3</span><span class="p">]</span><span class="o">.</span><span class="s1">&#39;&quot;&#39;</span><span class="p">);</span></div><div class='line' id='LC1623'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$body</span> <span class="o">.=</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">LE</span><span class="p">;</span></div><div class='line' id='LC1624'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$body</span> <span class="o">.=</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">GetBoundary</span><span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">boundary</span><span class="p">[</span><span class="mi">3</span><span class="p">],</span> <span class="s1">&#39;&#39;</span><span class="p">,</span> <span class="s1">&#39;text/html&#39;</span><span class="p">,</span> <span class="s1">&#39;&#39;</span><span class="p">);</span></div><div class='line' id='LC1625'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$body</span> <span class="o">.=</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">EncodeString</span><span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">Body</span><span class="p">,</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">Encoding</span><span class="p">);</span></div><div class='line' id='LC1626'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$body</span> <span class="o">.=</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">LE</span><span class="o">.</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">LE</span><span class="p">;</span></div><div class='line' id='LC1627'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$body</span> <span class="o">.=</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">AttachAll</span><span class="p">(</span><span class="s1">&#39;inline&#39;</span><span class="p">,</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">boundary</span><span class="p">[</span><span class="mi">3</span><span class="p">]);</span></div><div class='line' id='LC1628'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$body</span> <span class="o">.=</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">LE</span><span class="p">;</span></div><div class='line' id='LC1629'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$body</span> <span class="o">.=</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">EndBoundary</span><span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">boundary</span><span class="p">[</span><span class="mi">2</span><span class="p">]);</span></div><div class='line' id='LC1630'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$body</span> <span class="o">.=</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">LE</span><span class="p">;</span></div><div class='line' id='LC1631'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$body</span> <span class="o">.=</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">AttachAll</span><span class="p">(</span><span class="s1">&#39;attachment&#39;</span><span class="p">,</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">boundary</span><span class="p">[</span><span class="mi">1</span><span class="p">]);</span></div><div class='line' id='LC1632'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">break</span><span class="p">;</span></div><div class='line' id='LC1633'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">default</span><span class="o">:</span></div><div class='line' id='LC1634'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// catch case &#39;plain&#39; and case &#39;&#39;</span></div><div class='line' id='LC1635'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$body</span> <span class="o">.=</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">EncodeString</span><span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">Body</span><span class="p">,</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">Encoding</span><span class="p">);</span></div><div class='line' id='LC1636'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">break</span><span class="p">;</span></div><div class='line' id='LC1637'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC1638'><br/></div><div class='line' id='LC1639'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span> <span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">IsError</span><span class="p">())</span> <span class="p">{</span></div><div class='line' id='LC1640'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$body</span> <span class="o">=</span> <span class="s1">&#39;&#39;</span><span class="p">;</span></div><div class='line' id='LC1641'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span> <span class="k">elseif</span> <span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">sign_key_file</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC1642'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">try</span> <span class="p">{</span></div><div class='line' id='LC1643'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span> <span class="p">(</span><span class="o">!</span><span class="nb">defined</span><span class="p">(</span><span class="s1">&#39;PKCS7_TEXT&#39;</span><span class="p">))</span> <span class="p">{</span></div><div class='line' id='LC1644'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">throw</span> <span class="k">new</span> <span class="nx">phpmailerException</span><span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">Lang</span><span class="p">(</span><span class="s1">&#39;signing&#39;</span><span class="p">)</span><span class="o">.</span><span class="s1">&#39; OpenSSL extension missing.&#39;</span><span class="p">);</span></div><div class='line' id='LC1645'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC1646'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$file</span> <span class="o">=</span> <span class="nb">tempnam</span><span class="p">(</span><span class="nb">sys_get_temp_dir</span><span class="p">(),</span> <span class="s1">&#39;mail&#39;</span><span class="p">);</span></div><div class='line' id='LC1647'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nb">file_put_contents</span><span class="p">(</span><span class="nv">$file</span><span class="p">,</span> <span class="nv">$body</span><span class="p">);</span> <span class="c1">//TODO check this worked</span></div><div class='line' id='LC1648'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$signed</span> <span class="o">=</span> <span class="nb">tempnam</span><span class="p">(</span><span class="nb">sys_get_temp_dir</span><span class="p">(),</span> <span class="s1">&#39;signed&#39;</span><span class="p">);</span></div><div class='line' id='LC1649'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span> <span class="p">(</span><span class="o">@</span><span class="nb">openssl_pkcs7_sign</span><span class="p">(</span><span class="nv">$file</span><span class="p">,</span> <span class="nv">$signed</span><span class="p">,</span> <span class="s1">&#39;file://&#39;</span><span class="o">.</span><span class="nb">realpath</span><span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">sign_cert_file</span><span class="p">),</span> <span class="k">array</span><span class="p">(</span><span class="s1">&#39;file://&#39;</span><span class="o">.</span><span class="nb">realpath</span><span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">sign_key_file</span><span class="p">),</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">sign_key_pass</span><span class="p">),</span> <span class="k">null</span><span class="p">))</span> <span class="p">{</span></div><div class='line' id='LC1650'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="o">@</span><span class="nb">unlink</span><span class="p">(</span><span class="nv">$file</span><span class="p">);</span></div><div class='line' id='LC1651'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$body</span> <span class="o">=</span> <span class="nb">file_get_contents</span><span class="p">(</span><span class="nv">$signed</span><span class="p">);</span></div><div class='line' id='LC1652'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="o">@</span><span class="nb">unlink</span><span class="p">(</span><span class="nv">$signed</span><span class="p">);</span></div><div class='line' id='LC1653'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span> <span class="k">else</span> <span class="p">{</span></div><div class='line' id='LC1654'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="o">@</span><span class="nb">unlink</span><span class="p">(</span><span class="nv">$file</span><span class="p">);</span></div><div class='line' id='LC1655'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="o">@</span><span class="nb">unlink</span><span class="p">(</span><span class="nv">$signed</span><span class="p">);</span></div><div class='line' id='LC1656'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">throw</span> <span class="k">new</span> <span class="nx">phpmailerException</span><span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">Lang</span><span class="p">(</span><span class="s1">&#39;signing&#39;</span><span class="p">)</span><span class="o">.</span><span class="nb">openssl_error_string</span><span class="p">());</span></div><div class='line' id='LC1657'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC1658'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span> <span class="k">catch</span> <span class="p">(</span><span class="nx">phpmailerException</span> <span class="nv">$e</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC1659'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$body</span> <span class="o">=</span> <span class="s1">&#39;&#39;</span><span class="p">;</span></div><div class='line' id='LC1660'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span> <span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">exceptions</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC1661'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">throw</span> <span class="nv">$e</span><span class="p">;</span></div><div class='line' id='LC1662'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC1663'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC1664'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC1665'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">return</span> <span class="nv">$body</span><span class="p">;</span></div><div class='line' id='LC1666'>&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC1667'><br/></div><div class='line' id='LC1668'>&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC1669'><span class="sd">   * Returns the start of a message boundary.</span></div><div class='line' id='LC1670'><span class="sd">   * @access protected</span></div><div class='line' id='LC1671'><span class="sd">   * @param string $boundary</span></div><div class='line' id='LC1672'><span class="sd">   * @param string $charSet</span></div><div class='line' id='LC1673'><span class="sd">   * @param string $contentType</span></div><div class='line' id='LC1674'><span class="sd">   * @param string $encoding</span></div><div class='line' id='LC1675'><span class="sd">   * @return string</span></div><div class='line' id='LC1676'><span class="sd">   */</span></div><div class='line' id='LC1677'>&nbsp;&nbsp;<span class="k">protected</span> <span class="k">function</span> <span class="nf">GetBoundary</span><span class="p">(</span><span class="nv">$boundary</span><span class="p">,</span> <span class="nv">$charSet</span><span class="p">,</span> <span class="nv">$contentType</span><span class="p">,</span> <span class="nv">$encoding</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC1678'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$result</span> <span class="o">=</span> <span class="s1">&#39;&#39;</span><span class="p">;</span></div><div class='line' id='LC1679'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span><span class="p">(</span><span class="nv">$charSet</span> <span class="o">==</span> <span class="s1">&#39;&#39;</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC1680'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$charSet</span> <span class="o">=</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">CharSet</span><span class="p">;</span></div><div class='line' id='LC1681'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC1682'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span><span class="p">(</span><span class="nv">$contentType</span> <span class="o">==</span> <span class="s1">&#39;&#39;</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC1683'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$contentType</span> <span class="o">=</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">ContentType</span><span class="p">;</span></div><div class='line' id='LC1684'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC1685'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span><span class="p">(</span><span class="nv">$encoding</span> <span class="o">==</span> <span class="s1">&#39;&#39;</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC1686'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$encoding</span> <span class="o">=</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">Encoding</span><span class="p">;</span></div><div class='line' id='LC1687'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC1688'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$result</span> <span class="o">.=</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">TextLine</span><span class="p">(</span><span class="s1">&#39;--&#39;</span> <span class="o">.</span> <span class="nv">$boundary</span><span class="p">);</span></div><div class='line' id='LC1689'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$result</span> <span class="o">.=</span> <span class="nb">sprintf</span><span class="p">(</span><span class="s2">&quot;Content-Type: %s; charset=%s&quot;</span><span class="p">,</span> <span class="nv">$contentType</span><span class="p">,</span> <span class="nv">$charSet</span><span class="p">);</span></div><div class='line' id='LC1690'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$result</span> <span class="o">.=</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">LE</span><span class="p">;</span></div><div class='line' id='LC1691'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$result</span> <span class="o">.=</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">HeaderLine</span><span class="p">(</span><span class="s1">&#39;Content-Transfer-Encoding&#39;</span><span class="p">,</span> <span class="nv">$encoding</span><span class="p">);</span></div><div class='line' id='LC1692'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$result</span> <span class="o">.=</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">LE</span><span class="p">;</span></div><div class='line' id='LC1693'><br/></div><div class='line' id='LC1694'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">return</span> <span class="nv">$result</span><span class="p">;</span></div><div class='line' id='LC1695'>&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC1696'><br/></div><div class='line' id='LC1697'>&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC1698'><span class="sd">   * Returns the end of a message boundary.</span></div><div class='line' id='LC1699'><span class="sd">   * @access protected</span></div><div class='line' id='LC1700'><span class="sd">   * @param string $boundary</span></div><div class='line' id='LC1701'><span class="sd">   * @return string</span></div><div class='line' id='LC1702'><span class="sd">   */</span></div><div class='line' id='LC1703'>&nbsp;&nbsp;<span class="k">protected</span> <span class="k">function</span> <span class="nf">EndBoundary</span><span class="p">(</span><span class="nv">$boundary</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC1704'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">return</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">LE</span> <span class="o">.</span> <span class="s1">&#39;--&#39;</span> <span class="o">.</span> <span class="nv">$boundary</span> <span class="o">.</span> <span class="s1">&#39;--&#39;</span> <span class="o">.</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">LE</span><span class="p">;</span></div><div class='line' id='LC1705'>&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC1706'><br/></div><div class='line' id='LC1707'>&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC1708'><span class="sd">   * Sets the message type.</span></div><div class='line' id='LC1709'><span class="sd">   * @access protected</span></div><div class='line' id='LC1710'><span class="sd">   * @return void</span></div><div class='line' id='LC1711'><span class="sd">   */</span></div><div class='line' id='LC1712'>&nbsp;&nbsp;<span class="k">protected</span> <span class="k">function</span> <span class="nf">SetMessageType</span><span class="p">()</span> <span class="p">{</span></div><div class='line' id='LC1713'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">message_type</span> <span class="o">=</span> <span class="k">array</span><span class="p">();</span></div><div class='line' id='LC1714'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span><span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">AlternativeExists</span><span class="p">())</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">message_type</span><span class="p">[]</span> <span class="o">=</span> <span class="s2">&quot;alt&quot;</span><span class="p">;</span></div><div class='line' id='LC1715'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span><span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">InlineImageExists</span><span class="p">())</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">message_type</span><span class="p">[]</span> <span class="o">=</span> <span class="s2">&quot;inline&quot;</span><span class="p">;</span></div><div class='line' id='LC1716'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span><span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">AttachmentExists</span><span class="p">())</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">message_type</span><span class="p">[]</span> <span class="o">=</span> <span class="s2">&quot;attach&quot;</span><span class="p">;</span></div><div class='line' id='LC1717'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">message_type</span> <span class="o">=</span> <span class="nb">implode</span><span class="p">(</span><span class="s2">&quot;_&quot;</span><span class="p">,</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">message_type</span><span class="p">);</span></div><div class='line' id='LC1718'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span><span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">message_type</span> <span class="o">==</span> <span class="s2">&quot;&quot;</span><span class="p">)</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">message_type</span> <span class="o">=</span> <span class="s2">&quot;plain&quot;</span><span class="p">;</span></div><div class='line' id='LC1719'>&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC1720'><br/></div><div class='line' id='LC1721'>&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC1722'><span class="sd">   * Returns a formatted header line.</span></div><div class='line' id='LC1723'><span class="sd">   * @access public</span></div><div class='line' id='LC1724'><span class="sd">   * @param string $name</span></div><div class='line' id='LC1725'><span class="sd">   * @param string $value</span></div><div class='line' id='LC1726'><span class="sd">   * @return string</span></div><div class='line' id='LC1727'><span class="sd">   */</span></div><div class='line' id='LC1728'>&nbsp;&nbsp;<span class="k">public</span> <span class="k">function</span> <span class="nf">HeaderLine</span><span class="p">(</span><span class="nv">$name</span><span class="p">,</span> <span class="nv">$value</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC1729'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">return</span> <span class="nv">$name</span> <span class="o">.</span> <span class="s1">&#39;: &#39;</span> <span class="o">.</span> <span class="nv">$value</span> <span class="o">.</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">LE</span><span class="p">;</span></div><div class='line' id='LC1730'>&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC1731'><br/></div><div class='line' id='LC1732'>&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC1733'><span class="sd">   * Returns a formatted mail line.</span></div><div class='line' id='LC1734'><span class="sd">   * @access public</span></div><div class='line' id='LC1735'><span class="sd">   * @param string $value</span></div><div class='line' id='LC1736'><span class="sd">   * @return string</span></div><div class='line' id='LC1737'><span class="sd">   */</span></div><div class='line' id='LC1738'>&nbsp;&nbsp;<span class="k">public</span> <span class="k">function</span> <span class="nf">TextLine</span><span class="p">(</span><span class="nv">$value</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC1739'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">return</span> <span class="nv">$value</span> <span class="o">.</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">LE</span><span class="p">;</span></div><div class='line' id='LC1740'>&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC1741'><br/></div><div class='line' id='LC1742'>&nbsp;&nbsp;<span class="c1">/////////////////////////////////////////////////</span></div><div class='line' id='LC1743'>&nbsp;&nbsp;<span class="c1">// CLASS METHODS, ATTACHMENTS</span></div><div class='line' id='LC1744'>&nbsp;&nbsp;<span class="c1">/////////////////////////////////////////////////</span></div><div class='line' id='LC1745'><br/></div><div class='line' id='LC1746'>&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC1747'><span class="sd">   * Adds an attachment from a path on the filesystem.</span></div><div class='line' id='LC1748'><span class="sd">   * Returns false if the file could not be found</span></div><div class='line' id='LC1749'><span class="sd">   * or accessed.</span></div><div class='line' id='LC1750'><span class="sd">   * @param string $path Path to the attachment.</span></div><div class='line' id='LC1751'><span class="sd">   * @param string $name Overrides the attachment name.</span></div><div class='line' id='LC1752'><span class="sd">   * @param string $encoding File encoding (see $Encoding).</span></div><div class='line' id='LC1753'><span class="sd">   * @param string $type File extension (MIME) type.</span></div><div class='line' id='LC1754'><span class="sd">   * @throws phpmailerException</span></div><div class='line' id='LC1755'><span class="sd">   * @return bool</span></div><div class='line' id='LC1756'><span class="sd">   */</span></div><div class='line' id='LC1757'>&nbsp;&nbsp;<span class="k">public</span> <span class="k">function</span> <span class="nf">AddAttachment</span><span class="p">(</span><span class="nv">$path</span><span class="p">,</span> <span class="nv">$name</span> <span class="o">=</span> <span class="s1">&#39;&#39;</span><span class="p">,</span> <span class="nv">$encoding</span> <span class="o">=</span> <span class="s1">&#39;base64&#39;</span><span class="p">,</span> <span class="nv">$type</span> <span class="o">=</span> <span class="s1">&#39;&#39;</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC1758'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">try</span> <span class="p">{</span></div><div class='line' id='LC1759'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span> <span class="p">(</span> <span class="o">!@</span><span class="nb">is_file</span><span class="p">(</span><span class="nv">$path</span><span class="p">)</span> <span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC1760'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">throw</span> <span class="k">new</span> <span class="nx">phpmailerException</span><span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">Lang</span><span class="p">(</span><span class="s1">&#39;file_access&#39;</span><span class="p">)</span> <span class="o">.</span> <span class="nv">$path</span><span class="p">,</span> <span class="nx">self</span><span class="o">::</span><span class="na">STOP_CONTINUE</span><span class="p">);</span></div><div class='line' id='LC1761'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC1762'><br/></div><div class='line' id='LC1763'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">//If a MIME type is not specified, try to work it out from the file name</span></div><div class='line' id='LC1764'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span> <span class="p">(</span><span class="nv">$type</span> <span class="o">==</span> <span class="s1">&#39;&#39;</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC1765'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$type</span> <span class="o">=</span> <span class="nx">self</span><span class="o">::</span><span class="na">filenameToType</span><span class="p">(</span><span class="nv">$path</span><span class="p">);</span></div><div class='line' id='LC1766'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC1767'><br/></div><div class='line' id='LC1768'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$filename</span> <span class="o">=</span> <span class="nb">basename</span><span class="p">(</span><span class="nv">$path</span><span class="p">);</span></div><div class='line' id='LC1769'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span> <span class="p">(</span> <span class="nv">$name</span> <span class="o">==</span> <span class="s1">&#39;&#39;</span> <span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC1770'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$name</span> <span class="o">=</span> <span class="nv">$filename</span><span class="p">;</span></div><div class='line' id='LC1771'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC1772'><br/></div><div class='line' id='LC1773'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">attachment</span><span class="p">[]</span> <span class="o">=</span> <span class="k">array</span><span class="p">(</span></div><div class='line' id='LC1774'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="mi">0</span> <span class="o">=&gt;</span> <span class="nv">$path</span><span class="p">,</span></div><div class='line' id='LC1775'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="mi">1</span> <span class="o">=&gt;</span> <span class="nv">$filename</span><span class="p">,</span></div><div class='line' id='LC1776'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="mi">2</span> <span class="o">=&gt;</span> <span class="nv">$name</span><span class="p">,</span></div><div class='line' id='LC1777'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="mi">3</span> <span class="o">=&gt;</span> <span class="nv">$encoding</span><span class="p">,</span></div><div class='line' id='LC1778'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="mi">4</span> <span class="o">=&gt;</span> <span class="nv">$type</span><span class="p">,</span></div><div class='line' id='LC1779'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="mi">5</span> <span class="o">=&gt;</span> <span class="k">false</span><span class="p">,</span>  <span class="c1">// isStringAttachment</span></div><div class='line' id='LC1780'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="mi">6</span> <span class="o">=&gt;</span> <span class="s1">&#39;attachment&#39;</span><span class="p">,</span></div><div class='line' id='LC1781'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="mi">7</span> <span class="o">=&gt;</span> <span class="mi">0</span></div><div class='line' id='LC1782'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">);</span></div><div class='line' id='LC1783'><br/></div><div class='line' id='LC1784'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span> <span class="k">catch</span> <span class="p">(</span><span class="nx">phpmailerException</span> <span class="nv">$e</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC1785'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">SetError</span><span class="p">(</span><span class="nv">$e</span><span class="o">-&gt;</span><span class="na">getMessage</span><span class="p">());</span></div><div class='line' id='LC1786'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span> <span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">exceptions</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC1787'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">throw</span> <span class="nv">$e</span><span class="p">;</span></div><div class='line' id='LC1788'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC1789'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span> <span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">SMTPDebug</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC1790'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">edebug</span><span class="p">(</span><span class="nv">$e</span><span class="o">-&gt;</span><span class="na">getMessage</span><span class="p">()</span><span class="o">.</span><span class="s2">&quot;</span><span class="se">\n</span><span class="s2">&quot;</span><span class="p">);</span></div><div class='line' id='LC1791'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC1792'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span> <span class="p">(</span> <span class="nv">$e</span><span class="o">-&gt;</span><span class="na">getCode</span><span class="p">()</span> <span class="o">==</span> <span class="nx">self</span><span class="o">::</span><span class="na">STOP_CRITICAL</span> <span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC1793'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">return</span> <span class="k">false</span><span class="p">;</span></div><div class='line' id='LC1794'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC1795'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC1796'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">return</span> <span class="k">true</span><span class="p">;</span></div><div class='line' id='LC1797'>&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC1798'><br/></div><div class='line' id='LC1799'>&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC1800'><span class="sd">  * Return the current array of attachments</span></div><div class='line' id='LC1801'><span class="sd">  * @return array</span></div><div class='line' id='LC1802'><span class="sd">  */</span></div><div class='line' id='LC1803'>&nbsp;&nbsp;<span class="k">public</span> <span class="k">function</span> <span class="nf">GetAttachments</span><span class="p">()</span> <span class="p">{</span></div><div class='line' id='LC1804'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">return</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">attachment</span><span class="p">;</span></div><div class='line' id='LC1805'>&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC1806'><br/></div><div class='line' id='LC1807'>&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC1808'><span class="sd">   * Attaches all fs, string, and binary attachments to the message.</span></div><div class='line' id='LC1809'><span class="sd">   * Returns an empty string on failure.</span></div><div class='line' id='LC1810'><span class="sd">   * @access protected</span></div><div class='line' id='LC1811'><span class="sd">   * @param string $disposition_type</span></div><div class='line' id='LC1812'><span class="sd">   * @param string $boundary</span></div><div class='line' id='LC1813'><span class="sd">   * @return string</span></div><div class='line' id='LC1814'><span class="sd">   */</span></div><div class='line' id='LC1815'>&nbsp;&nbsp;<span class="k">protected</span> <span class="k">function</span> <span class="nf">AttachAll</span><span class="p">(</span><span class="nv">$disposition_type</span><span class="p">,</span> <span class="nv">$boundary</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC1816'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// Return text of body</span></div><div class='line' id='LC1817'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$mime</span> <span class="o">=</span> <span class="k">array</span><span class="p">();</span></div><div class='line' id='LC1818'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$cidUniq</span> <span class="o">=</span> <span class="k">array</span><span class="p">();</span></div><div class='line' id='LC1819'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$incl</span> <span class="o">=</span> <span class="k">array</span><span class="p">();</span></div><div class='line' id='LC1820'><br/></div><div class='line' id='LC1821'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// Add all attachments</span></div><div class='line' id='LC1822'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">foreach</span> <span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">attachment</span> <span class="k">as</span> <span class="nv">$attachment</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC1823'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// CHECK IF IT IS A VALID DISPOSITION_FILTER</span></div><div class='line' id='LC1824'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span><span class="p">(</span><span class="nv">$attachment</span><span class="p">[</span><span class="mi">6</span><span class="p">]</span> <span class="o">==</span> <span class="nv">$disposition_type</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC1825'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// Check for string attachment</span></div><div class='line' id='LC1826'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$string</span> <span class="o">=</span> <span class="s1">&#39;&#39;</span><span class="p">;</span></div><div class='line' id='LC1827'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$path</span> <span class="o">=</span> <span class="s1">&#39;&#39;</span><span class="p">;</span></div><div class='line' id='LC1828'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$bString</span> <span class="o">=</span> <span class="nv">$attachment</span><span class="p">[</span><span class="mi">5</span><span class="p">];</span></div><div class='line' id='LC1829'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span> <span class="p">(</span><span class="nv">$bString</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC1830'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$string</span> <span class="o">=</span> <span class="nv">$attachment</span><span class="p">[</span><span class="mi">0</span><span class="p">];</span></div><div class='line' id='LC1831'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span> <span class="k">else</span> <span class="p">{</span></div><div class='line' id='LC1832'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$path</span> <span class="o">=</span> <span class="nv">$attachment</span><span class="p">[</span><span class="mi">0</span><span class="p">];</span></div><div class='line' id='LC1833'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC1834'><br/></div><div class='line' id='LC1835'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$inclhash</span> <span class="o">=</span> <span class="nb">md5</span><span class="p">(</span><span class="nb">serialize</span><span class="p">(</span><span class="nv">$attachment</span><span class="p">));</span></div><div class='line' id='LC1836'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span> <span class="p">(</span><span class="nb">in_array</span><span class="p">(</span><span class="nv">$inclhash</span><span class="p">,</span> <span class="nv">$incl</span><span class="p">))</span> <span class="p">{</span> <span class="k">continue</span><span class="p">;</span> <span class="p">}</span></div><div class='line' id='LC1837'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$incl</span><span class="p">[]</span>      <span class="o">=</span> <span class="nv">$inclhash</span><span class="p">;</span></div><div class='line' id='LC1838'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$filename</span>    <span class="o">=</span> <span class="nv">$attachment</span><span class="p">[</span><span class="mi">1</span><span class="p">];</span></div><div class='line' id='LC1839'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$name</span>        <span class="o">=</span> <span class="nv">$attachment</span><span class="p">[</span><span class="mi">2</span><span class="p">];</span></div><div class='line' id='LC1840'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$encoding</span>    <span class="o">=</span> <span class="nv">$attachment</span><span class="p">[</span><span class="mi">3</span><span class="p">];</span></div><div class='line' id='LC1841'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$type</span>        <span class="o">=</span> <span class="nv">$attachment</span><span class="p">[</span><span class="mi">4</span><span class="p">];</span></div><div class='line' id='LC1842'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$disposition</span> <span class="o">=</span> <span class="nv">$attachment</span><span class="p">[</span><span class="mi">6</span><span class="p">];</span></div><div class='line' id='LC1843'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$cid</span>         <span class="o">=</span> <span class="nv">$attachment</span><span class="p">[</span><span class="mi">7</span><span class="p">];</span></div><div class='line' id='LC1844'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span> <span class="p">(</span> <span class="nv">$disposition</span> <span class="o">==</span> <span class="s1">&#39;inline&#39;</span> <span class="o">&amp;&amp;</span> <span class="nb">isset</span><span class="p">(</span><span class="nv">$cidUniq</span><span class="p">[</span><span class="nv">$cid</span><span class="p">])</span> <span class="p">)</span> <span class="p">{</span> <span class="k">continue</span><span class="p">;</span> <span class="p">}</span></div><div class='line' id='LC1845'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$cidUniq</span><span class="p">[</span><span class="nv">$cid</span><span class="p">]</span> <span class="o">=</span> <span class="k">true</span><span class="p">;</span></div><div class='line' id='LC1846'><br/></div><div class='line' id='LC1847'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$mime</span><span class="p">[]</span> <span class="o">=</span> <span class="nb">sprintf</span><span class="p">(</span><span class="s2">&quot;--%s%s&quot;</span><span class="p">,</span> <span class="nv">$boundary</span><span class="p">,</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">LE</span><span class="p">);</span></div><div class='line' id='LC1848'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$mime</span><span class="p">[]</span> <span class="o">=</span> <span class="nb">sprintf</span><span class="p">(</span><span class="s2">&quot;Content-Type: %s; name=</span><span class="se">\&quot;</span><span class="s2">%s</span><span class="se">\&quot;</span><span class="s2">%s&quot;</span><span class="p">,</span> <span class="nv">$type</span><span class="p">,</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">EncodeHeader</span><span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">SecureHeader</span><span class="p">(</span><span class="nv">$name</span><span class="p">)),</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">LE</span><span class="p">);</span></div><div class='line' id='LC1849'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$mime</span><span class="p">[]</span> <span class="o">=</span> <span class="nb">sprintf</span><span class="p">(</span><span class="s2">&quot;Content-Transfer-Encoding: %s%s&quot;</span><span class="p">,</span> <span class="nv">$encoding</span><span class="p">,</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">LE</span><span class="p">);</span></div><div class='line' id='LC1850'><br/></div><div class='line' id='LC1851'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span><span class="p">(</span><span class="nv">$disposition</span> <span class="o">==</span> <span class="s1">&#39;inline&#39;</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC1852'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$mime</span><span class="p">[]</span> <span class="o">=</span> <span class="nb">sprintf</span><span class="p">(</span><span class="s2">&quot;Content-ID: &lt;%s&gt;%s&quot;</span><span class="p">,</span> <span class="nv">$cid</span><span class="p">,</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">LE</span><span class="p">);</span></div><div class='line' id='LC1853'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC1854'><br/></div><div class='line' id='LC1855'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">//If a filename contains any of these chars, it should be quoted, but not otherwise: RFC2183 &amp; RFC2045 5.1</span></div><div class='line' id='LC1856'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">//Fixes a warning in IETF&#39;s msglint MIME checker</span></div><div class='line' id='LC1857'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span> <span class="p">(</span><span class="nb">preg_match</span><span class="p">(</span><span class="s1">&#39;/[ \(\)&lt;&gt;@,;:\\&quot;\/\[\]\?=]/&#39;</span><span class="p">,</span> <span class="nv">$name</span><span class="p">))</span> <span class="p">{</span></div><div class='line' id='LC1858'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$mime</span><span class="p">[]</span> <span class="o">=</span> <span class="nb">sprintf</span><span class="p">(</span><span class="s2">&quot;Content-Disposition: %s; filename=</span><span class="se">\&quot;</span><span class="s2">%s</span><span class="se">\&quot;</span><span class="s2">%s&quot;</span><span class="p">,</span> <span class="nv">$disposition</span><span class="p">,</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">EncodeHeader</span><span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">SecureHeader</span><span class="p">(</span><span class="nv">$name</span><span class="p">)),</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">LE</span><span class="o">.</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">LE</span><span class="p">);</span></div><div class='line' id='LC1859'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span> <span class="k">else</span> <span class="p">{</span></div><div class='line' id='LC1860'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$mime</span><span class="p">[]</span> <span class="o">=</span> <span class="nb">sprintf</span><span class="p">(</span><span class="s2">&quot;Content-Disposition: %s; filename=%s%s&quot;</span><span class="p">,</span> <span class="nv">$disposition</span><span class="p">,</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">EncodeHeader</span><span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">SecureHeader</span><span class="p">(</span><span class="nv">$name</span><span class="p">)),</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">LE</span><span class="o">.</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">LE</span><span class="p">);</span></div><div class='line' id='LC1861'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC1862'><br/></div><div class='line' id='LC1863'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// Encode as string attachment</span></div><div class='line' id='LC1864'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span><span class="p">(</span><span class="nv">$bString</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC1865'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$mime</span><span class="p">[]</span> <span class="o">=</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">EncodeString</span><span class="p">(</span><span class="nv">$string</span><span class="p">,</span> <span class="nv">$encoding</span><span class="p">);</span></div><div class='line' id='LC1866'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span><span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">IsError</span><span class="p">())</span> <span class="p">{</span></div><div class='line' id='LC1867'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">return</span> <span class="s1">&#39;&#39;</span><span class="p">;</span></div><div class='line' id='LC1868'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC1869'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$mime</span><span class="p">[]</span> <span class="o">=</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">LE</span><span class="o">.</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">LE</span><span class="p">;</span></div><div class='line' id='LC1870'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span> <span class="k">else</span> <span class="p">{</span></div><div class='line' id='LC1871'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$mime</span><span class="p">[]</span> <span class="o">=</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">EncodeFile</span><span class="p">(</span><span class="nv">$path</span><span class="p">,</span> <span class="nv">$encoding</span><span class="p">);</span></div><div class='line' id='LC1872'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span><span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">IsError</span><span class="p">())</span> <span class="p">{</span></div><div class='line' id='LC1873'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">return</span> <span class="s1">&#39;&#39;</span><span class="p">;</span></div><div class='line' id='LC1874'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC1875'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$mime</span><span class="p">[]</span> <span class="o">=</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">LE</span><span class="o">.</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">LE</span><span class="p">;</span></div><div class='line' id='LC1876'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC1877'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC1878'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC1879'><br/></div><div class='line' id='LC1880'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$mime</span><span class="p">[]</span> <span class="o">=</span> <span class="nb">sprintf</span><span class="p">(</span><span class="s2">&quot;--%s--%s&quot;</span><span class="p">,</span> <span class="nv">$boundary</span><span class="p">,</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">LE</span><span class="p">);</span></div><div class='line' id='LC1881'><br/></div><div class='line' id='LC1882'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">return</span> <span class="nb">implode</span><span class="p">(</span><span class="s2">&quot;&quot;</span><span class="p">,</span> <span class="nv">$mime</span><span class="p">);</span></div><div class='line' id='LC1883'>&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC1884'><br/></div><div class='line' id='LC1885'>&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC1886'><span class="sd">   * Encodes attachment in requested format.</span></div><div class='line' id='LC1887'><span class="sd">   * Returns an empty string on failure.</span></div><div class='line' id='LC1888'><span class="sd">   * @param string $path The full path to the file</span></div><div class='line' id='LC1889'><span class="sd">   * @param string $encoding The encoding to use; one of &#39;base64&#39;, &#39;7bit&#39;, &#39;8bit&#39;, &#39;binary&#39;, &#39;quoted-printable&#39;</span></div><div class='line' id='LC1890'><span class="sd">   * @throws phpmailerException</span></div><div class='line' id='LC1891'><span class="sd">   * @see EncodeFile()</span></div><div class='line' id='LC1892'><span class="sd">   * @access protected</span></div><div class='line' id='LC1893'><span class="sd">   * @return string</span></div><div class='line' id='LC1894'><span class="sd">   */</span></div><div class='line' id='LC1895'>&nbsp;&nbsp;<span class="k">protected</span> <span class="k">function</span> <span class="nf">EncodeFile</span><span class="p">(</span><span class="nv">$path</span><span class="p">,</span> <span class="nv">$encoding</span> <span class="o">=</span> <span class="s1">&#39;base64&#39;</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC1896'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">try</span> <span class="p">{</span></div><div class='line' id='LC1897'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span> <span class="p">(</span><span class="o">!</span><span class="nb">is_readable</span><span class="p">(</span><span class="nv">$path</span><span class="p">))</span> <span class="p">{</span></div><div class='line' id='LC1898'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">throw</span> <span class="k">new</span> <span class="nx">phpmailerException</span><span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">Lang</span><span class="p">(</span><span class="s1">&#39;file_open&#39;</span><span class="p">)</span> <span class="o">.</span> <span class="nv">$path</span><span class="p">,</span> <span class="nx">self</span><span class="o">::</span><span class="na">STOP_CONTINUE</span><span class="p">);</span></div><div class='line' id='LC1899'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC1900'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$magic_quotes</span> <span class="o">=</span> <span class="nb">get_magic_quotes_runtime</span><span class="p">();</span></div><div class='line' id='LC1901'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span> <span class="p">(</span><span class="nv">$magic_quotes</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC1902'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span> <span class="p">(</span><span class="nb">version_compare</span><span class="p">(</span><span class="k">PHP_VERSION</span><span class="p">,</span> <span class="s1">&#39;5.3.0&#39;</span><span class="p">,</span> <span class="s1">&#39;&lt;&#39;</span><span class="p">))</span> <span class="p">{</span></div><div class='line' id='LC1903'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nb">set_magic_quotes_runtime</span><span class="p">(</span><span class="mi">0</span><span class="p">);</span></div><div class='line' id='LC1904'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span> <span class="k">else</span> <span class="p">{</span></div><div class='line' id='LC1905'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nb">ini_set</span><span class="p">(</span><span class="s1">&#39;magic_quotes_runtime&#39;</span><span class="p">,</span> <span class="mi">0</span><span class="p">);</span></div><div class='line' id='LC1906'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC1907'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC1908'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$file_buffer</span>  <span class="o">=</span> <span class="nb">file_get_contents</span><span class="p">(</span><span class="nv">$path</span><span class="p">);</span></div><div class='line' id='LC1909'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$file_buffer</span>  <span class="o">=</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">EncodeString</span><span class="p">(</span><span class="nv">$file_buffer</span><span class="p">,</span> <span class="nv">$encoding</span><span class="p">);</span></div><div class='line' id='LC1910'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span> <span class="p">(</span><span class="nv">$magic_quotes</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC1911'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span> <span class="p">(</span><span class="nb">version_compare</span><span class="p">(</span><span class="k">PHP_VERSION</span><span class="p">,</span> <span class="s1">&#39;5.3.0&#39;</span><span class="p">,</span> <span class="s1">&#39;&lt;&#39;</span><span class="p">))</span> <span class="p">{</span></div><div class='line' id='LC1912'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nb">set_magic_quotes_runtime</span><span class="p">(</span><span class="nv">$magic_quotes</span><span class="p">);</span></div><div class='line' id='LC1913'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span> <span class="k">else</span> <span class="p">{</span></div><div class='line' id='LC1914'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nb">ini_set</span><span class="p">(</span><span class="s1">&#39;magic_quotes_runtime&#39;</span><span class="p">,</span> <span class="nv">$magic_quotes</span><span class="p">);</span></div><div class='line' id='LC1915'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC1916'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC1917'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">return</span> <span class="nv">$file_buffer</span><span class="p">;</span></div><div class='line' id='LC1918'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span> <span class="k">catch</span> <span class="p">(</span><span class="nx">Exception</span> <span class="nv">$e</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC1919'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">SetError</span><span class="p">(</span><span class="nv">$e</span><span class="o">-&gt;</span><span class="na">getMessage</span><span class="p">());</span></div><div class='line' id='LC1920'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">return</span> <span class="s1">&#39;&#39;</span><span class="p">;</span></div><div class='line' id='LC1921'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC1922'>&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC1923'><br/></div><div class='line' id='LC1924'>&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC1925'><span class="sd">   * Encodes string to requested format.</span></div><div class='line' id='LC1926'><span class="sd">   * Returns an empty string on failure.</span></div><div class='line' id='LC1927'><span class="sd">   * @param string $str The text to encode</span></div><div class='line' id='LC1928'><span class="sd">   * @param string $encoding The encoding to use; one of &#39;base64&#39;, &#39;7bit&#39;, &#39;8bit&#39;, &#39;binary&#39;, &#39;quoted-printable&#39;</span></div><div class='line' id='LC1929'><span class="sd">   * @access public</span></div><div class='line' id='LC1930'><span class="sd">   * @return string</span></div><div class='line' id='LC1931'><span class="sd">   */</span></div><div class='line' id='LC1932'>&nbsp;&nbsp;<span class="k">public</span> <span class="k">function</span> <span class="nf">EncodeString</span><span class="p">(</span><span class="nv">$str</span><span class="p">,</span> <span class="nv">$encoding</span> <span class="o">=</span> <span class="s1">&#39;base64&#39;</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC1933'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$encoded</span> <span class="o">=</span> <span class="s1">&#39;&#39;</span><span class="p">;</span></div><div class='line' id='LC1934'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">switch</span><span class="p">(</span><span class="nx">strtolower</span><span class="p">(</span><span class="nv">$encoding</span><span class="p">))</span> <span class="p">{</span></div><div class='line' id='LC1935'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">case</span> <span class="s1">&#39;base64&#39;</span><span class="o">:</span></div><div class='line' id='LC1936'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$encoded</span> <span class="o">=</span> <span class="nb">chunk_split</span><span class="p">(</span><span class="nb">base64_encode</span><span class="p">(</span><span class="nv">$str</span><span class="p">),</span> <span class="mi">76</span><span class="p">,</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">LE</span><span class="p">);</span></div><div class='line' id='LC1937'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">break</span><span class="p">;</span></div><div class='line' id='LC1938'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">case</span> <span class="s1">&#39;7bit&#39;</span><span class="o">:</span></div><div class='line' id='LC1939'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">case</span> <span class="s1">&#39;8bit&#39;</span><span class="o">:</span></div><div class='line' id='LC1940'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$encoded</span> <span class="o">=</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">FixEOL</span><span class="p">(</span><span class="nv">$str</span><span class="p">);</span></div><div class='line' id='LC1941'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">//Make sure it ends with a line break</span></div><div class='line' id='LC1942'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span> <span class="p">(</span><span class="nx">substr</span><span class="p">(</span><span class="nv">$encoded</span><span class="p">,</span> <span class="o">-</span><span class="p">(</span><span class="nb">strlen</span><span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">LE</span><span class="p">)))</span> <span class="o">!=</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">LE</span><span class="p">)</span></div><div class='line' id='LC1943'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$encoded</span> <span class="o">.=</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">LE</span><span class="p">;</span></div><div class='line' id='LC1944'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">break</span><span class="p">;</span></div><div class='line' id='LC1945'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">case</span> <span class="s1">&#39;binary&#39;</span><span class="o">:</span></div><div class='line' id='LC1946'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$encoded</span> <span class="o">=</span> <span class="nv">$str</span><span class="p">;</span></div><div class='line' id='LC1947'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">break</span><span class="p">;</span></div><div class='line' id='LC1948'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">case</span> <span class="s1">&#39;quoted-printable&#39;</span><span class="o">:</span></div><div class='line' id='LC1949'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$encoded</span> <span class="o">=</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">EncodeQP</span><span class="p">(</span><span class="nv">$str</span><span class="p">);</span></div><div class='line' id='LC1950'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">break</span><span class="p">;</span></div><div class='line' id='LC1951'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">default</span><span class="o">:</span></div><div class='line' id='LC1952'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">SetError</span><span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">Lang</span><span class="p">(</span><span class="s1">&#39;encoding&#39;</span><span class="p">)</span> <span class="o">.</span> <span class="nv">$encoding</span><span class="p">);</span></div><div class='line' id='LC1953'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">break</span><span class="p">;</span></div><div class='line' id='LC1954'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC1955'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">return</span> <span class="nv">$encoded</span><span class="p">;</span></div><div class='line' id='LC1956'>&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC1957'><br/></div><div class='line' id='LC1958'>&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC1959'><span class="sd">   * Encode a header string to best (shortest) of Q, B, quoted or none.</span></div><div class='line' id='LC1960'><span class="sd">   * @access public</span></div><div class='line' id='LC1961'><span class="sd">   * @param string $str</span></div><div class='line' id='LC1962'><span class="sd">   * @param string $position</span></div><div class='line' id='LC1963'><span class="sd">   * @return string</span></div><div class='line' id='LC1964'><span class="sd">   */</span></div><div class='line' id='LC1965'>&nbsp;&nbsp;<span class="k">public</span> <span class="k">function</span> <span class="nf">EncodeHeader</span><span class="p">(</span><span class="nv">$str</span><span class="p">,</span> <span class="nv">$position</span> <span class="o">=</span> <span class="s1">&#39;text&#39;</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC1966'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$x</span> <span class="o">=</span> <span class="mi">0</span><span class="p">;</span></div><div class='line' id='LC1967'><br/></div><div class='line' id='LC1968'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">switch</span> <span class="p">(</span><span class="nx">strtolower</span><span class="p">(</span><span class="nv">$position</span><span class="p">))</span> <span class="p">{</span></div><div class='line' id='LC1969'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">case</span> <span class="s1">&#39;phrase&#39;</span><span class="o">:</span></div><div class='line' id='LC1970'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span> <span class="p">(</span><span class="o">!</span><span class="nb">preg_match</span><span class="p">(</span><span class="s1">&#39;/[\200-\377]/&#39;</span><span class="p">,</span> <span class="nv">$str</span><span class="p">))</span> <span class="p">{</span></div><div class='line' id='LC1971'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// Can&#39;t use addslashes as we don&#39;t know what value has magic_quotes_sybase</span></div><div class='line' id='LC1972'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$encoded</span> <span class="o">=</span> <span class="nb">addcslashes</span><span class="p">(</span><span class="nv">$str</span><span class="p">,</span> <span class="s2">&quot;</span><span class="se">\0</span><span class="s2">..</span><span class="se">\37\177\\\&quot;</span><span class="s2">&quot;</span><span class="p">);</span></div><div class='line' id='LC1973'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span> <span class="p">((</span><span class="nv">$str</span> <span class="o">==</span> <span class="nv">$encoded</span><span class="p">)</span> <span class="o">&amp;&amp;</span> <span class="o">!</span><span class="nb">preg_match</span><span class="p">(</span><span class="s1">&#39;/[^A-Za-z0-9!#$%&amp;\&#39;*+\/=?^_`{|}~ -]/&#39;</span><span class="p">,</span> <span class="nv">$str</span><span class="p">))</span> <span class="p">{</span></div><div class='line' id='LC1974'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">return</span> <span class="p">(</span><span class="nv">$encoded</span><span class="p">);</span></div><div class='line' id='LC1975'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span> <span class="k">else</span> <span class="p">{</span></div><div class='line' id='LC1976'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">return</span> <span class="p">(</span><span class="s2">&quot;</span><span class="se">\&quot;</span><span class="si">$encoded</span><span class="se">\&quot;</span><span class="s2">&quot;</span><span class="p">);</span></div><div class='line' id='LC1977'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC1978'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC1979'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$x</span> <span class="o">=</span> <span class="nb">preg_match_all</span><span class="p">(</span><span class="s1">&#39;/[^\040\041\043-\133\135-\176]/&#39;</span><span class="p">,</span> <span class="nv">$str</span><span class="p">,</span> <span class="nv">$matches</span><span class="p">);</span></div><div class='line' id='LC1980'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">break</span><span class="p">;</span></div><div class='line' id='LC1981'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">case</span> <span class="s1">&#39;comment&#39;</span><span class="o">:</span></div><div class='line' id='LC1982'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$x</span> <span class="o">=</span> <span class="nb">preg_match_all</span><span class="p">(</span><span class="s1">&#39;/[()&quot;]/&#39;</span><span class="p">,</span> <span class="nv">$str</span><span class="p">,</span> <span class="nv">$matches</span><span class="p">);</span></div><div class='line' id='LC1983'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// Fall-through</span></div><div class='line' id='LC1984'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">case</span> <span class="s1">&#39;text&#39;</span><span class="o">:</span></div><div class='line' id='LC1985'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">default</span><span class="o">:</span></div><div class='line' id='LC1986'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$x</span> <span class="o">+=</span> <span class="nb">preg_match_all</span><span class="p">(</span><span class="s1">&#39;/[\000-\010\013\014\016-\037\177-\377]/&#39;</span><span class="p">,</span> <span class="nv">$str</span><span class="p">,</span> <span class="nv">$matches</span><span class="p">);</span></div><div class='line' id='LC1987'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">break</span><span class="p">;</span></div><div class='line' id='LC1988'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC1989'><br/></div><div class='line' id='LC1990'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span> <span class="p">(</span><span class="nv">$x</span> <span class="o">==</span> <span class="mi">0</span><span class="p">)</span> <span class="p">{</span> <span class="c1">//There are no chars that need encoding</span></div><div class='line' id='LC1991'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">return</span> <span class="p">(</span><span class="nv">$str</span><span class="p">);</span></div><div class='line' id='LC1992'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC1993'><br/></div><div class='line' id='LC1994'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$maxlen</span> <span class="o">=</span> <span class="mi">75</span> <span class="o">-</span> <span class="mi">7</span> <span class="o">-</span> <span class="nb">strlen</span><span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">CharSet</span><span class="p">);</span></div><div class='line' id='LC1995'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// Try to select the encoding which should produce the shortest output</span></div><div class='line' id='LC1996'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span> <span class="p">(</span><span class="nv">$x</span> <span class="o">&gt;</span> <span class="nb">strlen</span><span class="p">(</span><span class="nv">$str</span><span class="p">)</span><span class="o">/</span><span class="mi">3</span><span class="p">)</span> <span class="p">{</span> <span class="c1">//More than a third of the content will need encoding, so B encoding will be most efficient</span></div><div class='line' id='LC1997'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$encoding</span> <span class="o">=</span> <span class="s1">&#39;B&#39;</span><span class="p">;</span></div><div class='line' id='LC1998'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span> <span class="p">(</span><span class="nb">function_exists</span><span class="p">(</span><span class="s1">&#39;mb_strlen&#39;</span><span class="p">)</span> <span class="o">&amp;&amp;</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">HasMultiBytes</span><span class="p">(</span><span class="nv">$str</span><span class="p">))</span> <span class="p">{</span></div><div class='line' id='LC1999'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// Use a custom function which correctly encodes and wraps long</span></div><div class='line' id='LC2000'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// multibyte strings without breaking lines within a character</span></div><div class='line' id='LC2001'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$encoded</span> <span class="o">=</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">Base64EncodeWrapMB</span><span class="p">(</span><span class="nv">$str</span><span class="p">,</span> <span class="s2">&quot;</span><span class="se">\n</span><span class="s2">&quot;</span><span class="p">);</span></div><div class='line' id='LC2002'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span> <span class="k">else</span> <span class="p">{</span></div><div class='line' id='LC2003'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$encoded</span> <span class="o">=</span> <span class="nb">base64_encode</span><span class="p">(</span><span class="nv">$str</span><span class="p">);</span></div><div class='line' id='LC2004'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$maxlen</span> <span class="o">-=</span> <span class="nv">$maxlen</span> <span class="o">%</span> <span class="mi">4</span><span class="p">;</span></div><div class='line' id='LC2005'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$encoded</span> <span class="o">=</span> <span class="nx">trim</span><span class="p">(</span><span class="nb">chunk_split</span><span class="p">(</span><span class="nv">$encoded</span><span class="p">,</span> <span class="nv">$maxlen</span><span class="p">,</span> <span class="s2">&quot;</span><span class="se">\n</span><span class="s2">&quot;</span><span class="p">));</span></div><div class='line' id='LC2006'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC2007'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span> <span class="k">else</span> <span class="p">{</span></div><div class='line' id='LC2008'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$encoding</span> <span class="o">=</span> <span class="s1">&#39;Q&#39;</span><span class="p">;</span></div><div class='line' id='LC2009'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$encoded</span> <span class="o">=</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">EncodeQ</span><span class="p">(</span><span class="nv">$str</span><span class="p">,</span> <span class="nv">$position</span><span class="p">);</span></div><div class='line' id='LC2010'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$encoded</span> <span class="o">=</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">WrapText</span><span class="p">(</span><span class="nv">$encoded</span><span class="p">,</span> <span class="nv">$maxlen</span><span class="p">,</span> <span class="k">true</span><span class="p">);</span></div><div class='line' id='LC2011'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$encoded</span> <span class="o">=</span> <span class="nb">str_replace</span><span class="p">(</span><span class="s1">&#39;=&#39;</span><span class="o">.</span><span class="nx">self</span><span class="o">::</span><span class="na">CRLF</span><span class="p">,</span> <span class="s2">&quot;</span><span class="se">\n</span><span class="s2">&quot;</span><span class="p">,</span> <span class="nx">trim</span><span class="p">(</span><span class="nv">$encoded</span><span class="p">));</span></div><div class='line' id='LC2012'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC2013'><br/></div><div class='line' id='LC2014'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$encoded</span> <span class="o">=</span> <span class="nb">preg_replace</span><span class="p">(</span><span class="s1">&#39;/^(.*)$/m&#39;</span><span class="p">,</span> <span class="s2">&quot; =?&quot;</span><span class="o">.</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">CharSet</span><span class="o">.</span><span class="s2">&quot;?</span><span class="si">$encoding</span><span class="s2">?</span><span class="se">\\</span><span class="s2">1?=&quot;</span><span class="p">,</span> <span class="nv">$encoded</span><span class="p">);</span></div><div class='line' id='LC2015'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$encoded</span> <span class="o">=</span> <span class="nx">trim</span><span class="p">(</span><span class="nb">str_replace</span><span class="p">(</span><span class="s2">&quot;</span><span class="se">\n</span><span class="s2">&quot;</span><span class="p">,</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">LE</span><span class="p">,</span> <span class="nv">$encoded</span><span class="p">));</span></div><div class='line' id='LC2016'><br/></div><div class='line' id='LC2017'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">return</span> <span class="nv">$encoded</span><span class="p">;</span></div><div class='line' id='LC2018'>&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC2019'><br/></div><div class='line' id='LC2020'>&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC2021'><span class="sd">   * Checks if a string contains multibyte characters.</span></div><div class='line' id='LC2022'><span class="sd">   * @access public</span></div><div class='line' id='LC2023'><span class="sd">   * @param string $str multi-byte text to wrap encode</span></div><div class='line' id='LC2024'><span class="sd">   * @return bool</span></div><div class='line' id='LC2025'><span class="sd">   */</span></div><div class='line' id='LC2026'>&nbsp;&nbsp;<span class="k">public</span> <span class="k">function</span> <span class="nf">HasMultiBytes</span><span class="p">(</span><span class="nv">$str</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC2027'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span> <span class="p">(</span><span class="nb">function_exists</span><span class="p">(</span><span class="s1">&#39;mb_strlen&#39;</span><span class="p">))</span> <span class="p">{</span></div><div class='line' id='LC2028'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">return</span> <span class="p">(</span><span class="nb">strlen</span><span class="p">(</span><span class="nv">$str</span><span class="p">)</span> <span class="o">&gt;</span> <span class="nb">mb_strlen</span><span class="p">(</span><span class="nv">$str</span><span class="p">,</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">CharSet</span><span class="p">));</span></div><div class='line' id='LC2029'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span> <span class="k">else</span> <span class="p">{</span> <span class="c1">// Assume no multibytes (we can&#39;t handle without mbstring functions anyway)</span></div><div class='line' id='LC2030'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">return</span> <span class="k">false</span><span class="p">;</span></div><div class='line' id='LC2031'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC2032'>&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC2033'><br/></div><div class='line' id='LC2034'>&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC2035'><span class="sd">   * Correctly encodes and wraps long multibyte strings for mail headers</span></div><div class='line' id='LC2036'><span class="sd">   * without breaking lines within a character.</span></div><div class='line' id='LC2037'><span class="sd">   * Adapted from a function by paravoid at http://uk.php.net/manual/en/function.mb-encode-mimeheader.php</span></div><div class='line' id='LC2038'><span class="sd">   * @access public</span></div><div class='line' id='LC2039'><span class="sd">   * @param string $str multi-byte text to wrap encode</span></div><div class='line' id='LC2040'><span class="sd">   * @param string $lf string to use as linefeed/end-of-line</span></div><div class='line' id='LC2041'><span class="sd">   * @return string</span></div><div class='line' id='LC2042'><span class="sd">   */</span></div><div class='line' id='LC2043'>&nbsp;&nbsp;<span class="k">public</span> <span class="k">function</span> <span class="nf">Base64EncodeWrapMB</span><span class="p">(</span><span class="nv">$str</span><span class="p">,</span> <span class="nv">$lf</span><span class="o">=</span><span class="k">null</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC2044'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$start</span> <span class="o">=</span> <span class="s2">&quot;=?&quot;</span><span class="o">.</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">CharSet</span><span class="o">.</span><span class="s2">&quot;?B?&quot;</span><span class="p">;</span></div><div class='line' id='LC2045'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$end</span> <span class="o">=</span> <span class="s2">&quot;?=&quot;</span><span class="p">;</span></div><div class='line' id='LC2046'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$encoded</span> <span class="o">=</span> <span class="s2">&quot;&quot;</span><span class="p">;</span></div><div class='line' id='LC2047'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span> <span class="p">(</span><span class="nv">$lf</span> <span class="o">===</span> <span class="k">null</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC2048'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$lf</span> <span class="o">=</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">LE</span><span class="p">;</span></div><div class='line' id='LC2049'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC2050'><br/></div><div class='line' id='LC2051'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$mb_length</span> <span class="o">=</span> <span class="nb">mb_strlen</span><span class="p">(</span><span class="nv">$str</span><span class="p">,</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">CharSet</span><span class="p">);</span></div><div class='line' id='LC2052'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// Each line must have length &lt;= 75, including $start and $end</span></div><div class='line' id='LC2053'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$length</span> <span class="o">=</span> <span class="mi">75</span> <span class="o">-</span> <span class="nb">strlen</span><span class="p">(</span><span class="nv">$start</span><span class="p">)</span> <span class="o">-</span> <span class="nb">strlen</span><span class="p">(</span><span class="nv">$end</span><span class="p">);</span></div><div class='line' id='LC2054'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// Average multi-byte ratio</span></div><div class='line' id='LC2055'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$ratio</span> <span class="o">=</span> <span class="nv">$mb_length</span> <span class="o">/</span> <span class="nb">strlen</span><span class="p">(</span><span class="nv">$str</span><span class="p">);</span></div><div class='line' id='LC2056'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// Base64 has a 4:3 ratio</span></div><div class='line' id='LC2057'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$offset</span> <span class="o">=</span> <span class="nv">$avgLength</span> <span class="o">=</span> <span class="nx">floor</span><span class="p">(</span><span class="nv">$length</span> <span class="o">*</span> <span class="nv">$ratio</span> <span class="o">*</span> <span class="o">.</span><span class="mi">75</span><span class="p">);</span></div><div class='line' id='LC2058'><br/></div><div class='line' id='LC2059'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">for</span> <span class="p">(</span><span class="nv">$i</span> <span class="o">=</span> <span class="mi">0</span><span class="p">;</span> <span class="nv">$i</span> <span class="o">&lt;</span> <span class="nv">$mb_length</span><span class="p">;</span> <span class="nv">$i</span> <span class="o">+=</span> <span class="nv">$offset</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC2060'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$lookBack</span> <span class="o">=</span> <span class="mi">0</span><span class="p">;</span></div><div class='line' id='LC2061'><br/></div><div class='line' id='LC2062'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">do</span> <span class="p">{</span></div><div class='line' id='LC2063'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$offset</span> <span class="o">=</span> <span class="nv">$avgLength</span> <span class="o">-</span> <span class="nv">$lookBack</span><span class="p">;</span></div><div class='line' id='LC2064'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$chunk</span> <span class="o">=</span> <span class="nb">mb_substr</span><span class="p">(</span><span class="nv">$str</span><span class="p">,</span> <span class="nv">$i</span><span class="p">,</span> <span class="nv">$offset</span><span class="p">,</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">CharSet</span><span class="p">);</span></div><div class='line' id='LC2065'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$chunk</span> <span class="o">=</span> <span class="nb">base64_encode</span><span class="p">(</span><span class="nv">$chunk</span><span class="p">);</span></div><div class='line' id='LC2066'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$lookBack</span><span class="o">++</span><span class="p">;</span></div><div class='line' id='LC2067'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC2068'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">while</span> <span class="p">(</span><span class="nb">strlen</span><span class="p">(</span><span class="nv">$chunk</span><span class="p">)</span> <span class="o">&gt;</span> <span class="nv">$length</span><span class="p">);</span></div><div class='line' id='LC2069'><br/></div><div class='line' id='LC2070'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$encoded</span> <span class="o">.=</span> <span class="nv">$chunk</span> <span class="o">.</span> <span class="nv">$lf</span><span class="p">;</span></div><div class='line' id='LC2071'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC2072'><br/></div><div class='line' id='LC2073'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// Chomp the last linefeed</span></div><div class='line' id='LC2074'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$encoded</span> <span class="o">=</span> <span class="nx">substr</span><span class="p">(</span><span class="nv">$encoded</span><span class="p">,</span> <span class="mi">0</span><span class="p">,</span> <span class="o">-</span><span class="nb">strlen</span><span class="p">(</span><span class="nv">$lf</span><span class="p">));</span></div><div class='line' id='LC2075'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">return</span> <span class="nv">$encoded</span><span class="p">;</span></div><div class='line' id='LC2076'>&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC2077'><br/></div><div class='line' id='LC2078'>&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC2079'><span class="sd">   * Encode string to RFC2045 (6.7) quoted-printable format</span></div><div class='line' id='LC2080'><span class="sd">   * @access public</span></div><div class='line' id='LC2081'><span class="sd">   * @param string $string The text to encode</span></div><div class='line' id='LC2082'><span class="sd">   * @param integer $line_max Number of chars allowed on a line before wrapping</span></div><div class='line' id='LC2083'><span class="sd">   * @return string</span></div><div class='line' id='LC2084'><span class="sd">   * @link PHP version adapted from http://www.php.net/manual/en/function.quoted-printable-decode.php#89417</span></div><div class='line' id='LC2085'><span class="sd">   */</span></div><div class='line' id='LC2086'>&nbsp;&nbsp;<span class="k">public</span> <span class="k">function</span> <span class="nf">EncodeQP</span><span class="p">(</span><span class="nv">$string</span><span class="p">,</span> <span class="nv">$line_max</span> <span class="o">=</span> <span class="mi">76</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC2087'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span> <span class="p">(</span><span class="nb">function_exists</span><span class="p">(</span><span class="s1">&#39;quoted_printable_encode&#39;</span><span class="p">))</span> <span class="p">{</span> <span class="c1">//Use native function if it&#39;s available (&gt;= PHP5.3)</span></div><div class='line' id='LC2088'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">return</span> <span class="nb">quoted_printable_encode</span><span class="p">(</span><span class="nv">$string</span><span class="p">);</span></div><div class='line' id='LC2089'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC2090'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">//Fall back to a pure PHP implementation</span></div><div class='line' id='LC2091'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$string</span> <span class="o">=</span> <span class="nb">str_replace</span><span class="p">(</span><span class="k">array</span><span class="p">(</span><span class="s1">&#39;%20&#39;</span><span class="p">,</span> <span class="s1">&#39;%0D%0A.&#39;</span><span class="p">,</span> <span class="s1">&#39;%0D%0A&#39;</span><span class="p">,</span> <span class="s1">&#39;%&#39;</span><span class="p">),</span> <span class="k">array</span><span class="p">(</span><span class="s1">&#39; &#39;</span><span class="p">,</span> <span class="s2">&quot;</span><span class="se">\r\n</span><span class="s2">=2E&quot;</span><span class="p">,</span> <span class="s2">&quot;</span><span class="se">\r\n</span><span class="s2">&quot;</span><span class="p">,</span> <span class="s1">&#39;=&#39;</span><span class="p">),</span> <span class="nb">rawurlencode</span><span class="p">(</span><span class="nv">$string</span><span class="p">));</span></div><div class='line' id='LC2092'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$string</span> <span class="o">=</span> <span class="nb">preg_replace</span><span class="p">(</span><span class="s1">&#39;/[^\r\n]{&#39;</span><span class="o">.</span><span class="p">(</span><span class="nv">$line_max</span> <span class="o">-</span> <span class="mi">3</span><span class="p">)</span><span class="o">.</span><span class="s1">&#39;}[^=\r\n]{2}/&#39;</span><span class="p">,</span> <span class="s2">&quot;$0=</span><span class="se">\r\n</span><span class="s2">&quot;</span><span class="p">,</span> <span class="nv">$string</span><span class="p">);</span></div><div class='line' id='LC2093'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">return</span> <span class="nv">$string</span><span class="p">;</span></div><div class='line' id='LC2094'>&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC2095'><br/></div><div class='line' id='LC2096'>&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC2097'><span class="sd">   * Wrapper to preserve BC for old QP encoding function that was removed</span></div><div class='line' id='LC2098'><span class="sd">   * @see EncodeQP()</span></div><div class='line' id='LC2099'><span class="sd">   * @access public</span></div><div class='line' id='LC2100'><span class="sd">   * @param string $string</span></div><div class='line' id='LC2101'><span class="sd">   * @param integer $line_max</span></div><div class='line' id='LC2102'><span class="sd">   * @param bool $space_conv</span></div><div class='line' id='LC2103'><span class="sd">   * @return string</span></div><div class='line' id='LC2104'><span class="sd">   */</span></div><div class='line' id='LC2105'>&nbsp;&nbsp;<span class="k">public</span> <span class="k">function</span> <span class="nf">EncodeQPphp</span><span class="p">(</span><span class="nv">$string</span><span class="p">,</span> <span class="nv">$line_max</span> <span class="o">=</span> <span class="mi">76</span><span class="p">,</span> <span class="nv">$space_conv</span> <span class="o">=</span> <span class="k">false</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC2106'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">return</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">EncodeQP</span><span class="p">(</span><span class="nv">$string</span><span class="p">,</span> <span class="nv">$line_max</span><span class="p">);</span></div><div class='line' id='LC2107'>&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC2108'><br/></div><div class='line' id='LC2109'>&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC2110'><span class="sd">   * Encode string to q encoding.</span></div><div class='line' id='LC2111'><span class="sd">   * @link http://tools.ietf.org/html/rfc2047</span></div><div class='line' id='LC2112'><span class="sd">   * @param string $str the text to encode</span></div><div class='line' id='LC2113'><span class="sd">   * @param string $position Where the text is going to be used, see the RFC for what that means</span></div><div class='line' id='LC2114'><span class="sd">   * @access public</span></div><div class='line' id='LC2115'><span class="sd">   * @return string</span></div><div class='line' id='LC2116'><span class="sd">   */</span></div><div class='line' id='LC2117'>&nbsp;&nbsp;<span class="k">public</span> <span class="k">function</span> <span class="nf">EncodeQ</span><span class="p">(</span><span class="nv">$str</span><span class="p">,</span> <span class="nv">$position</span> <span class="o">=</span> <span class="s1">&#39;text&#39;</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC2118'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">//There should not be any EOL in the string</span></div><div class='line' id='LC2119'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$pattern</span> <span class="o">=</span> <span class="s1">&#39;&#39;</span><span class="p">;</span></div><div class='line' id='LC2120'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$encoded</span> <span class="o">=</span> <span class="nb">str_replace</span><span class="p">(</span><span class="k">array</span><span class="p">(</span><span class="s2">&quot;</span><span class="se">\r</span><span class="s2">&quot;</span><span class="p">,</span> <span class="s2">&quot;</span><span class="se">\n</span><span class="s2">&quot;</span><span class="p">),</span> <span class="s1">&#39;&#39;</span><span class="p">,</span> <span class="nv">$str</span><span class="p">);</span></div><div class='line' id='LC2121'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">switch</span> <span class="p">(</span><span class="nx">strtolower</span><span class="p">(</span><span class="nv">$position</span><span class="p">))</span> <span class="p">{</span></div><div class='line' id='LC2122'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">case</span> <span class="s1">&#39;phrase&#39;</span><span class="o">:</span></div><div class='line' id='LC2123'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$pattern</span> <span class="o">=</span> <span class="s1">&#39;^A-Za-z0-9!*+\/ -&#39;</span><span class="p">;</span></div><div class='line' id='LC2124'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">break</span><span class="p">;</span></div><div class='line' id='LC2125'><br/></div><div class='line' id='LC2126'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">case</span> <span class="s1">&#39;comment&#39;</span><span class="o">:</span></div><div class='line' id='LC2127'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$pattern</span> <span class="o">=</span> <span class="s1">&#39;\(\)&quot;&#39;</span><span class="p">;</span></div><div class='line' id='LC2128'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">//note that we don&#39;t break here!</span></div><div class='line' id='LC2129'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">//for this reason we build the $pattern without including delimiters and []</span></div><div class='line' id='LC2130'><br/></div><div class='line' id='LC2131'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">case</span> <span class="s1">&#39;text&#39;</span><span class="o">:</span></div><div class='line' id='LC2132'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">default</span><span class="o">:</span></div><div class='line' id='LC2133'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">//Replace every high ascii, control =, ? and _ characters</span></div><div class='line' id='LC2134'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">//We put \075 (=) as first value to make sure it&#39;s the first one in being converted, preventing double encode</span></div><div class='line' id='LC2135'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$pattern</span> <span class="o">=</span> <span class="s1">&#39;\075\000-\011\013\014\016-\037\077\137\177-\377&#39;</span> <span class="o">.</span> <span class="nv">$pattern</span><span class="p">;</span></div><div class='line' id='LC2136'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">break</span><span class="p">;</span></div><div class='line' id='LC2137'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC2138'><br/></div><div class='line' id='LC2139'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span> <span class="p">(</span><span class="nb">preg_match_all</span><span class="p">(</span><span class="s2">&quot;/[</span><span class="si">{</span><span class="nv">$pattern</span><span class="si">}</span><span class="s2">]/&quot;</span><span class="p">,</span> <span class="nv">$encoded</span><span class="p">,</span> <span class="nv">$matches</span><span class="p">))</span> <span class="p">{</span></div><div class='line' id='LC2140'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">foreach</span> <span class="p">(</span><span class="nb">array_unique</span><span class="p">(</span><span class="nv">$matches</span><span class="p">[</span><span class="mi">0</span><span class="p">])</span> <span class="k">as</span> <span class="nv">$char</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC2141'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$encoded</span> <span class="o">=</span> <span class="nb">str_replace</span><span class="p">(</span><span class="nv">$char</span><span class="p">,</span> <span class="s1">&#39;=&#39;</span> <span class="o">.</span> <span class="nb">sprintf</span><span class="p">(</span><span class="s1">&#39;%02X&#39;</span><span class="p">,</span> <span class="nb">ord</span><span class="p">(</span><span class="nv">$char</span><span class="p">)),</span> <span class="nv">$encoded</span><span class="p">);</span></div><div class='line' id='LC2142'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC2143'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC2144'><br/></div><div class='line' id='LC2145'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">//Replace every spaces to _ (more readable than =20)</span></div><div class='line' id='LC2146'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">return</span> <span class="nb">str_replace</span><span class="p">(</span><span class="s1">&#39; &#39;</span><span class="p">,</span> <span class="s1">&#39;_&#39;</span><span class="p">,</span> <span class="nv">$encoded</span><span class="p">);</span></div><div class='line' id='LC2147'><span class="p">}</span></div><div class='line' id='LC2148'><br/></div><div class='line' id='LC2149'><br/></div><div class='line' id='LC2150'>&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC2151'><span class="sd">   * Adds a string or binary attachment (non-filesystem) to the list.</span></div><div class='line' id='LC2152'><span class="sd">   * This method can be used to attach ascii or binary data,</span></div><div class='line' id='LC2153'><span class="sd">   * such as a BLOB record from a database.</span></div><div class='line' id='LC2154'><span class="sd">   * @param string $string String attachment data.</span></div><div class='line' id='LC2155'><span class="sd">   * @param string $filename Name of the attachment.</span></div><div class='line' id='LC2156'><span class="sd">   * @param string $encoding File encoding (see $Encoding).</span></div><div class='line' id='LC2157'><span class="sd">   * @param string $type File extension (MIME) type.</span></div><div class='line' id='LC2158'><span class="sd">   * @return void</span></div><div class='line' id='LC2159'><span class="sd">   */</span></div><div class='line' id='LC2160'>&nbsp;&nbsp;<span class="k">public</span> <span class="k">function</span> <span class="nf">AddStringAttachment</span><span class="p">(</span><span class="nv">$string</span><span class="p">,</span> <span class="nv">$filename</span><span class="p">,</span> <span class="nv">$encoding</span> <span class="o">=</span> <span class="s1">&#39;base64&#39;</span><span class="p">,</span> <span class="nv">$type</span> <span class="o">=</span> <span class="s1">&#39;&#39;</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC2161'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">//If a MIME type is not specified, try to work it out from the file name</span></div><div class='line' id='LC2162'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span> <span class="p">(</span><span class="nv">$type</span> <span class="o">==</span> <span class="s1">&#39;&#39;</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC2163'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$type</span> <span class="o">=</span> <span class="nx">self</span><span class="o">::</span><span class="na">filenameToType</span><span class="p">(</span><span class="nv">$filename</span><span class="p">);</span></div><div class='line' id='LC2164'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC2165'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// Append to $attachment array</span></div><div class='line' id='LC2166'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">attachment</span><span class="p">[]</span> <span class="o">=</span> <span class="k">array</span><span class="p">(</span></div><div class='line' id='LC2167'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="mi">0</span> <span class="o">=&gt;</span> <span class="nv">$string</span><span class="p">,</span></div><div class='line' id='LC2168'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="mi">1</span> <span class="o">=&gt;</span> <span class="nv">$filename</span><span class="p">,</span></div><div class='line' id='LC2169'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="mi">2</span> <span class="o">=&gt;</span> <span class="nb">basename</span><span class="p">(</span><span class="nv">$filename</span><span class="p">),</span></div><div class='line' id='LC2170'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="mi">3</span> <span class="o">=&gt;</span> <span class="nv">$encoding</span><span class="p">,</span></div><div class='line' id='LC2171'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="mi">4</span> <span class="o">=&gt;</span> <span class="nv">$type</span><span class="p">,</span></div><div class='line' id='LC2172'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="mi">5</span> <span class="o">=&gt;</span> <span class="k">true</span><span class="p">,</span>  <span class="c1">// isStringAttachment</span></div><div class='line' id='LC2173'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="mi">6</span> <span class="o">=&gt;</span> <span class="s1">&#39;attachment&#39;</span><span class="p">,</span></div><div class='line' id='LC2174'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="mi">7</span> <span class="o">=&gt;</span> <span class="mi">0</span></div><div class='line' id='LC2175'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">);</span></div><div class='line' id='LC2176'>&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC2177'><br/></div><div class='line' id='LC2178'>&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC2179'><span class="sd">   * Add an embedded attachment from a file.</span></div><div class='line' id='LC2180'><span class="sd">   * This can include images, sounds, and just about any other document type.</span></div><div class='line' id='LC2181'><span class="sd">   * @param string $path Path to the attachment.</span></div><div class='line' id='LC2182'><span class="sd">   * @param string $cid Content ID of the attachment; Use this to reference</span></div><div class='line' id='LC2183'><span class="sd">   *        the content when using an embedded image in HTML.</span></div><div class='line' id='LC2184'><span class="sd">   * @param string $name Overrides the attachment name.</span></div><div class='line' id='LC2185'><span class="sd">   * @param string $encoding File encoding (see $Encoding).</span></div><div class='line' id='LC2186'><span class="sd">   * @param string $type File MIME type.</span></div><div class='line' id='LC2187'><span class="sd">   * @return bool True on successfully adding an attachment</span></div><div class='line' id='LC2188'><span class="sd">   */</span></div><div class='line' id='LC2189'>&nbsp;&nbsp;<span class="k">public</span> <span class="k">function</span> <span class="nf">AddEmbeddedImage</span><span class="p">(</span><span class="nv">$path</span><span class="p">,</span> <span class="nv">$cid</span><span class="p">,</span> <span class="nv">$name</span> <span class="o">=</span> <span class="s1">&#39;&#39;</span><span class="p">,</span> <span class="nv">$encoding</span> <span class="o">=</span> <span class="s1">&#39;base64&#39;</span><span class="p">,</span> <span class="nv">$type</span> <span class="o">=</span> <span class="s1">&#39;&#39;</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC2190'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span> <span class="p">(</span> <span class="o">!@</span><span class="nb">is_file</span><span class="p">(</span><span class="nv">$path</span><span class="p">)</span> <span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC2191'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">SetError</span><span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">Lang</span><span class="p">(</span><span class="s1">&#39;file_access&#39;</span><span class="p">)</span> <span class="o">.</span> <span class="nv">$path</span><span class="p">);</span></div><div class='line' id='LC2192'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">return</span> <span class="k">false</span><span class="p">;</span></div><div class='line' id='LC2193'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC2194'><br/></div><div class='line' id='LC2195'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">//If a MIME type is not specified, try to work it out from the file name</span></div><div class='line' id='LC2196'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span> <span class="p">(</span><span class="nv">$type</span> <span class="o">==</span> <span class="s1">&#39;&#39;</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC2197'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$type</span> <span class="o">=</span> <span class="nx">self</span><span class="o">::</span><span class="na">filenameToType</span><span class="p">(</span><span class="nv">$path</span><span class="p">);</span></div><div class='line' id='LC2198'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC2199'><br/></div><div class='line' id='LC2200'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$filename</span> <span class="o">=</span> <span class="nb">basename</span><span class="p">(</span><span class="nv">$path</span><span class="p">);</span></div><div class='line' id='LC2201'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span> <span class="p">(</span> <span class="nv">$name</span> <span class="o">==</span> <span class="s1">&#39;&#39;</span> <span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC2202'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$name</span> <span class="o">=</span> <span class="nv">$filename</span><span class="p">;</span></div><div class='line' id='LC2203'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC2204'><br/></div><div class='line' id='LC2205'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// Append to $attachment array</span></div><div class='line' id='LC2206'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">attachment</span><span class="p">[]</span> <span class="o">=</span> <span class="k">array</span><span class="p">(</span></div><div class='line' id='LC2207'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="mi">0</span> <span class="o">=&gt;</span> <span class="nv">$path</span><span class="p">,</span></div><div class='line' id='LC2208'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="mi">1</span> <span class="o">=&gt;</span> <span class="nv">$filename</span><span class="p">,</span></div><div class='line' id='LC2209'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="mi">2</span> <span class="o">=&gt;</span> <span class="nv">$name</span><span class="p">,</span></div><div class='line' id='LC2210'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="mi">3</span> <span class="o">=&gt;</span> <span class="nv">$encoding</span><span class="p">,</span></div><div class='line' id='LC2211'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="mi">4</span> <span class="o">=&gt;</span> <span class="nv">$type</span><span class="p">,</span></div><div class='line' id='LC2212'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="mi">5</span> <span class="o">=&gt;</span> <span class="k">false</span><span class="p">,</span>  <span class="c1">// isStringAttachment</span></div><div class='line' id='LC2213'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="mi">6</span> <span class="o">=&gt;</span> <span class="s1">&#39;inline&#39;</span><span class="p">,</span></div><div class='line' id='LC2214'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="mi">7</span> <span class="o">=&gt;</span> <span class="nv">$cid</span></div><div class='line' id='LC2215'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">);</span></div><div class='line' id='LC2216'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">return</span> <span class="k">true</span><span class="p">;</span></div><div class='line' id='LC2217'>&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC2218'><br/></div><div class='line' id='LC2219'><br/></div><div class='line' id='LC2220'>&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC2221'><span class="sd">   * Add an embedded stringified attachment.</span></div><div class='line' id='LC2222'><span class="sd">   * This can include images, sounds, and just about any other document type.</span></div><div class='line' id='LC2223'><span class="sd">   * Be sure to set the $type to an image type for images:</span></div><div class='line' id='LC2224'><span class="sd">   * JPEG images use &#39;image/jpeg&#39;, GIF uses &#39;image/gif&#39;, PNG uses &#39;image/png&#39;.</span></div><div class='line' id='LC2225'><span class="sd">   * @param string $string The attachment binary data.</span></div><div class='line' id='LC2226'><span class="sd">   * @param string $cid Content ID of the attachment; Use this to reference</span></div><div class='line' id='LC2227'><span class="sd">   *        the content when using an embedded image in HTML.</span></div><div class='line' id='LC2228'><span class="sd">   * @param string $name</span></div><div class='line' id='LC2229'><span class="sd">   * @param string $encoding File encoding (see $Encoding).</span></div><div class='line' id='LC2230'><span class="sd">   * @param string $type MIME type.</span></div><div class='line' id='LC2231'><span class="sd">   * @return bool True on successfully adding an attachment</span></div><div class='line' id='LC2232'><span class="sd">   */</span></div><div class='line' id='LC2233'>&nbsp;&nbsp;<span class="k">public</span> <span class="k">function</span> <span class="nf">AddStringEmbeddedImage</span><span class="p">(</span><span class="nv">$string</span><span class="p">,</span> <span class="nv">$cid</span><span class="p">,</span> <span class="nv">$name</span> <span class="o">=</span> <span class="s1">&#39;&#39;</span><span class="p">,</span> <span class="nv">$encoding</span> <span class="o">=</span> <span class="s1">&#39;base64&#39;</span><span class="p">,</span> <span class="nv">$type</span> <span class="o">=</span> <span class="s1">&#39;&#39;</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC2234'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">//If a MIME type is not specified, try to work it out from the name</span></div><div class='line' id='LC2235'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span> <span class="p">(</span><span class="nv">$type</span> <span class="o">==</span> <span class="s1">&#39;&#39;</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC2236'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$type</span> <span class="o">=</span> <span class="nx">self</span><span class="o">::</span><span class="na">filenameToType</span><span class="p">(</span><span class="nv">$name</span><span class="p">);</span></div><div class='line' id='LC2237'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC2238'><br/></div><div class='line' id='LC2239'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// Append to $attachment array</span></div><div class='line' id='LC2240'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">attachment</span><span class="p">[]</span> <span class="o">=</span> <span class="k">array</span><span class="p">(</span></div><div class='line' id='LC2241'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="mi">0</span> <span class="o">=&gt;</span> <span class="nv">$string</span><span class="p">,</span></div><div class='line' id='LC2242'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="mi">1</span> <span class="o">=&gt;</span> <span class="nv">$name</span><span class="p">,</span></div><div class='line' id='LC2243'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="mi">2</span> <span class="o">=&gt;</span> <span class="nv">$name</span><span class="p">,</span></div><div class='line' id='LC2244'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="mi">3</span> <span class="o">=&gt;</span> <span class="nv">$encoding</span><span class="p">,</span></div><div class='line' id='LC2245'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="mi">4</span> <span class="o">=&gt;</span> <span class="nv">$type</span><span class="p">,</span></div><div class='line' id='LC2246'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="mi">5</span> <span class="o">=&gt;</span> <span class="k">true</span><span class="p">,</span>  <span class="c1">// isStringAttachment</span></div><div class='line' id='LC2247'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="mi">6</span> <span class="o">=&gt;</span> <span class="s1">&#39;inline&#39;</span><span class="p">,</span></div><div class='line' id='LC2248'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="mi">7</span> <span class="o">=&gt;</span> <span class="nv">$cid</span></div><div class='line' id='LC2249'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">);</span></div><div class='line' id='LC2250'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">return</span> <span class="k">true</span><span class="p">;</span></div><div class='line' id='LC2251'>&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC2252'><br/></div><div class='line' id='LC2253'>&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC2254'><span class="sd">   * Returns true if an inline attachment is present.</span></div><div class='line' id='LC2255'><span class="sd">   * @access public</span></div><div class='line' id='LC2256'><span class="sd">   * @return bool</span></div><div class='line' id='LC2257'><span class="sd">   */</span></div><div class='line' id='LC2258'>&nbsp;&nbsp;<span class="k">public</span> <span class="k">function</span> <span class="nf">InlineImageExists</span><span class="p">()</span> <span class="p">{</span></div><div class='line' id='LC2259'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">foreach</span><span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">attachment</span> <span class="k">as</span> <span class="nv">$attachment</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC2260'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span> <span class="p">(</span><span class="nv">$attachment</span><span class="p">[</span><span class="mi">6</span><span class="p">]</span> <span class="o">==</span> <span class="s1">&#39;inline&#39;</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC2261'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">return</span> <span class="k">true</span><span class="p">;</span></div><div class='line' id='LC2262'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC2263'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC2264'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">return</span> <span class="k">false</span><span class="p">;</span></div><div class='line' id='LC2265'>&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC2266'><br/></div><div class='line' id='LC2267'>&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC2268'><span class="sd">   * Returns true if an attachment (non-inline) is present.</span></div><div class='line' id='LC2269'><span class="sd">   * @return bool</span></div><div class='line' id='LC2270'><span class="sd">   */</span></div><div class='line' id='LC2271'>&nbsp;&nbsp;<span class="k">public</span> <span class="k">function</span> <span class="nf">AttachmentExists</span><span class="p">()</span> <span class="p">{</span></div><div class='line' id='LC2272'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">foreach</span><span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">attachment</span> <span class="k">as</span> <span class="nv">$attachment</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC2273'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span> <span class="p">(</span><span class="nv">$attachment</span><span class="p">[</span><span class="mi">6</span><span class="p">]</span> <span class="o">==</span> <span class="s1">&#39;attachment&#39;</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC2274'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">return</span> <span class="k">true</span><span class="p">;</span></div><div class='line' id='LC2275'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC2276'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC2277'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">return</span> <span class="k">false</span><span class="p">;</span></div><div class='line' id='LC2278'>&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC2279'><br/></div><div class='line' id='LC2280'>&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC2281'><span class="sd">   * Does this message have an alternative body set?</span></div><div class='line' id='LC2282'><span class="sd">   * @return bool</span></div><div class='line' id='LC2283'><span class="sd">   */</span></div><div class='line' id='LC2284'>&nbsp;&nbsp;<span class="k">public</span> <span class="k">function</span> <span class="nf">AlternativeExists</span><span class="p">()</span> <span class="p">{</span></div><div class='line' id='LC2285'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">return</span> <span class="o">!</span><span class="k">empty</span><span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">AltBody</span><span class="p">);</span></div><div class='line' id='LC2286'>&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC2287'><br/></div><div class='line' id='LC2288'>&nbsp;&nbsp;<span class="c1">/////////////////////////////////////////////////</span></div><div class='line' id='LC2289'>&nbsp;&nbsp;<span class="c1">// CLASS METHODS, MESSAGE RESET</span></div><div class='line' id='LC2290'>&nbsp;&nbsp;<span class="c1">/////////////////////////////////////////////////</span></div><div class='line' id='LC2291'><br/></div><div class='line' id='LC2292'>&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC2293'><span class="sd">   * Clears all recipients assigned in the TO array.  Returns void.</span></div><div class='line' id='LC2294'><span class="sd">   * @return void</span></div><div class='line' id='LC2295'><span class="sd">   */</span></div><div class='line' id='LC2296'>&nbsp;&nbsp;<span class="k">public</span> <span class="k">function</span> <span class="nf">ClearAddresses</span><span class="p">()</span> <span class="p">{</span></div><div class='line' id='LC2297'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">foreach</span><span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">to</span> <span class="k">as</span> <span class="nv">$to</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC2298'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nb">unset</span><span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">all_recipients</span><span class="p">[</span><span class="nx">strtolower</span><span class="p">(</span><span class="nv">$to</span><span class="p">[</span><span class="mi">0</span><span class="p">])]);</span></div><div class='line' id='LC2299'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC2300'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">to</span> <span class="o">=</span> <span class="k">array</span><span class="p">();</span></div><div class='line' id='LC2301'>&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC2302'><br/></div><div class='line' id='LC2303'>&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC2304'><span class="sd">   * Clears all recipients assigned in the CC array.  Returns void.</span></div><div class='line' id='LC2305'><span class="sd">   * @return void</span></div><div class='line' id='LC2306'><span class="sd">   */</span></div><div class='line' id='LC2307'>&nbsp;&nbsp;<span class="k">public</span> <span class="k">function</span> <span class="nf">ClearCCs</span><span class="p">()</span> <span class="p">{</span></div><div class='line' id='LC2308'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">foreach</span><span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">cc</span> <span class="k">as</span> <span class="nv">$cc</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC2309'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nb">unset</span><span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">all_recipients</span><span class="p">[</span><span class="nx">strtolower</span><span class="p">(</span><span class="nv">$cc</span><span class="p">[</span><span class="mi">0</span><span class="p">])]);</span></div><div class='line' id='LC2310'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC2311'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">cc</span> <span class="o">=</span> <span class="k">array</span><span class="p">();</span></div><div class='line' id='LC2312'>&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC2313'><br/></div><div class='line' id='LC2314'>&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC2315'><span class="sd">   * Clears all recipients assigned in the BCC array.  Returns void.</span></div><div class='line' id='LC2316'><span class="sd">   * @return void</span></div><div class='line' id='LC2317'><span class="sd">   */</span></div><div class='line' id='LC2318'>&nbsp;&nbsp;<span class="k">public</span> <span class="k">function</span> <span class="nf">ClearBCCs</span><span class="p">()</span> <span class="p">{</span></div><div class='line' id='LC2319'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">foreach</span><span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">bcc</span> <span class="k">as</span> <span class="nv">$bcc</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC2320'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nb">unset</span><span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">all_recipients</span><span class="p">[</span><span class="nx">strtolower</span><span class="p">(</span><span class="nv">$bcc</span><span class="p">[</span><span class="mi">0</span><span class="p">])]);</span></div><div class='line' id='LC2321'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC2322'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">bcc</span> <span class="o">=</span> <span class="k">array</span><span class="p">();</span></div><div class='line' id='LC2323'>&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC2324'><br/></div><div class='line' id='LC2325'>&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC2326'><span class="sd">   * Clears all recipients assigned in the ReplyTo array.  Returns void.</span></div><div class='line' id='LC2327'><span class="sd">   * @return void</span></div><div class='line' id='LC2328'><span class="sd">   */</span></div><div class='line' id='LC2329'>&nbsp;&nbsp;<span class="k">public</span> <span class="k">function</span> <span class="nf">ClearReplyTos</span><span class="p">()</span> <span class="p">{</span></div><div class='line' id='LC2330'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">ReplyTo</span> <span class="o">=</span> <span class="k">array</span><span class="p">();</span></div><div class='line' id='LC2331'>&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC2332'><br/></div><div class='line' id='LC2333'>&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC2334'><span class="sd">   * Clears all recipients assigned in the TO, CC and BCC</span></div><div class='line' id='LC2335'><span class="sd">   * array.  Returns void.</span></div><div class='line' id='LC2336'><span class="sd">   * @return void</span></div><div class='line' id='LC2337'><span class="sd">   */</span></div><div class='line' id='LC2338'>&nbsp;&nbsp;<span class="k">public</span> <span class="k">function</span> <span class="nf">ClearAllRecipients</span><span class="p">()</span> <span class="p">{</span></div><div class='line' id='LC2339'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">to</span> <span class="o">=</span> <span class="k">array</span><span class="p">();</span></div><div class='line' id='LC2340'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">cc</span> <span class="o">=</span> <span class="k">array</span><span class="p">();</span></div><div class='line' id='LC2341'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">bcc</span> <span class="o">=</span> <span class="k">array</span><span class="p">();</span></div><div class='line' id='LC2342'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">all_recipients</span> <span class="o">=</span> <span class="k">array</span><span class="p">();</span></div><div class='line' id='LC2343'>&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC2344'><br/></div><div class='line' id='LC2345'>&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC2346'><span class="sd">   * Clears all previously set filesystem, string, and binary</span></div><div class='line' id='LC2347'><span class="sd">   * attachments.  Returns void.</span></div><div class='line' id='LC2348'><span class="sd">   * @return void</span></div><div class='line' id='LC2349'><span class="sd">   */</span></div><div class='line' id='LC2350'>&nbsp;&nbsp;<span class="k">public</span> <span class="k">function</span> <span class="nf">ClearAttachments</span><span class="p">()</span> <span class="p">{</span></div><div class='line' id='LC2351'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">attachment</span> <span class="o">=</span> <span class="k">array</span><span class="p">();</span></div><div class='line' id='LC2352'>&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC2353'><br/></div><div class='line' id='LC2354'>&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC2355'><span class="sd">   * Clears all custom headers.  Returns void.</span></div><div class='line' id='LC2356'><span class="sd">   * @return void</span></div><div class='line' id='LC2357'><span class="sd">   */</span></div><div class='line' id='LC2358'>&nbsp;&nbsp;<span class="k">public</span> <span class="k">function</span> <span class="nf">ClearCustomHeaders</span><span class="p">()</span> <span class="p">{</span></div><div class='line' id='LC2359'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">CustomHeader</span> <span class="o">=</span> <span class="k">array</span><span class="p">();</span></div><div class='line' id='LC2360'>&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC2361'><br/></div><div class='line' id='LC2362'>&nbsp;&nbsp;<span class="c1">/////////////////////////////////////////////////</span></div><div class='line' id='LC2363'>&nbsp;&nbsp;<span class="c1">// CLASS METHODS, MISCELLANEOUS</span></div><div class='line' id='LC2364'>&nbsp;&nbsp;<span class="c1">/////////////////////////////////////////////////</span></div><div class='line' id='LC2365'><br/></div><div class='line' id='LC2366'>&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC2367'><span class="sd">   * Adds the error message to the error container.</span></div><div class='line' id='LC2368'><span class="sd">   * @access protected</span></div><div class='line' id='LC2369'><span class="sd">   * @param string $msg</span></div><div class='line' id='LC2370'><span class="sd">   * @return void</span></div><div class='line' id='LC2371'><span class="sd">   */</span></div><div class='line' id='LC2372'>&nbsp;&nbsp;<span class="k">protected</span> <span class="k">function</span> <span class="nf">SetError</span><span class="p">(</span><span class="nv">$msg</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC2373'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">error_count</span><span class="o">++</span><span class="p">;</span></div><div class='line' id='LC2374'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span> <span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">Mailer</span> <span class="o">==</span> <span class="s1">&#39;smtp&#39;</span> <span class="k">and</span> <span class="o">!</span><span class="nb">is_null</span><span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">smtp</span><span class="p">))</span> <span class="p">{</span></div><div class='line' id='LC2375'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$lasterror</span> <span class="o">=</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">smtp</span><span class="o">-&gt;</span><span class="na">getError</span><span class="p">();</span></div><div class='line' id='LC2376'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span> <span class="p">(</span><span class="o">!</span><span class="k">empty</span><span class="p">(</span><span class="nv">$lasterror</span><span class="p">)</span> <span class="k">and</span> <span class="nb">array_key_exists</span><span class="p">(</span><span class="s1">&#39;smtp_msg&#39;</span><span class="p">,</span> <span class="nv">$lasterror</span><span class="p">))</span> <span class="p">{</span></div><div class='line' id='LC2377'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$msg</span> <span class="o">.=</span> <span class="s1">&#39;&lt;p&gt;&#39;</span> <span class="o">.</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">Lang</span><span class="p">(</span><span class="s1">&#39;smtp_error&#39;</span><span class="p">)</span> <span class="o">.</span> <span class="nv">$lasterror</span><span class="p">[</span><span class="s1">&#39;smtp_msg&#39;</span><span class="p">]</span> <span class="o">.</span> <span class="s2">&quot;&lt;/p&gt;</span><span class="se">\n</span><span class="s2">&quot;</span><span class="p">;</span></div><div class='line' id='LC2378'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC2379'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC2380'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">ErrorInfo</span> <span class="o">=</span> <span class="nv">$msg</span><span class="p">;</span></div><div class='line' id='LC2381'>&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC2382'><br/></div><div class='line' id='LC2383'>&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC2384'><span class="sd">   * Returns the proper RFC 822 formatted date.</span></div><div class='line' id='LC2385'><span class="sd">   * @access public</span></div><div class='line' id='LC2386'><span class="sd">   * @return string</span></div><div class='line' id='LC2387'><span class="sd">   * @static</span></div><div class='line' id='LC2388'><span class="sd">   */</span></div><div class='line' id='LC2389'>&nbsp;&nbsp;<span class="k">public</span> <span class="k">static</span> <span class="k">function</span> <span class="nf">RFCDate</span><span class="p">()</span> <span class="p">{</span></div><div class='line' id='LC2390'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">//Set the time zone to whatever the default is to avoid 500 errors</span></div><div class='line' id='LC2391'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">//Will default to UTC if it&#39;s not set properly in php.ini</span></div><div class='line' id='LC2392'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="nb">date_default_timezone_set</span><span class="p">(</span><span class="o">@</span><span class="nb">date_default_timezone_get</span><span class="p">());</span></div><div class='line' id='LC2393'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">return</span> <span class="nb">date</span><span class="p">(</span><span class="s1">&#39;D, j M Y H:i:s O&#39;</span><span class="p">);</span></div><div class='line' id='LC2394'>&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC2395'><br/></div><div class='line' id='LC2396'>&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC2397'><span class="sd">   * Returns the server hostname or &#39;localhost.localdomain&#39; if unknown.</span></div><div class='line' id='LC2398'><span class="sd">   * @access protected</span></div><div class='line' id='LC2399'><span class="sd">   * @return string</span></div><div class='line' id='LC2400'><span class="sd">   */</span></div><div class='line' id='LC2401'>&nbsp;&nbsp;<span class="k">protected</span> <span class="k">function</span> <span class="nf">ServerHostname</span><span class="p">()</span> <span class="p">{</span></div><div class='line' id='LC2402'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span> <span class="p">(</span><span class="o">!</span><span class="k">empty</span><span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">Hostname</span><span class="p">))</span> <span class="p">{</span></div><div class='line' id='LC2403'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$result</span> <span class="o">=</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">Hostname</span><span class="p">;</span></div><div class='line' id='LC2404'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span> <span class="k">elseif</span> <span class="p">(</span><span class="nb">isset</span><span class="p">(</span><span class="nv">$_SERVER</span><span class="p">[</span><span class="s1">&#39;SERVER_NAME&#39;</span><span class="p">]))</span> <span class="p">{</span></div><div class='line' id='LC2405'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$result</span> <span class="o">=</span> <span class="nv">$_SERVER</span><span class="p">[</span><span class="s1">&#39;SERVER_NAME&#39;</span><span class="p">];</span></div><div class='line' id='LC2406'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span> <span class="k">else</span> <span class="p">{</span></div><div class='line' id='LC2407'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$result</span> <span class="o">=</span> <span class="s1">&#39;localhost.localdomain&#39;</span><span class="p">;</span></div><div class='line' id='LC2408'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC2409'><br/></div><div class='line' id='LC2410'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">return</span> <span class="nv">$result</span><span class="p">;</span></div><div class='line' id='LC2411'>&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC2412'><br/></div><div class='line' id='LC2413'>&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC2414'><span class="sd">   * Returns a message in the appropriate language.</span></div><div class='line' id='LC2415'><span class="sd">   * @access protected</span></div><div class='line' id='LC2416'><span class="sd">   * @param string $key</span></div><div class='line' id='LC2417'><span class="sd">   * @return string</span></div><div class='line' id='LC2418'><span class="sd">   */</span></div><div class='line' id='LC2419'>&nbsp;&nbsp;<span class="k">protected</span> <span class="k">function</span> <span class="nf">Lang</span><span class="p">(</span><span class="nv">$key</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC2420'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span><span class="p">(</span><span class="nb">count</span><span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">language</span><span class="p">)</span> <span class="o">&lt;</span> <span class="mi">1</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC2421'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">SetLanguage</span><span class="p">(</span><span class="s1">&#39;en&#39;</span><span class="p">);</span> <span class="c1">// set the default language</span></div><div class='line' id='LC2422'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC2423'><br/></div><div class='line' id='LC2424'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span><span class="p">(</span><span class="nb">isset</span><span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">language</span><span class="p">[</span><span class="nv">$key</span><span class="p">]))</span> <span class="p">{</span></div><div class='line' id='LC2425'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">return</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">language</span><span class="p">[</span><span class="nv">$key</span><span class="p">];</span></div><div class='line' id='LC2426'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span> <span class="k">else</span> <span class="p">{</span></div><div class='line' id='LC2427'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">return</span> <span class="s1">&#39;Language string failed to load: &#39;</span> <span class="o">.</span> <span class="nv">$key</span><span class="p">;</span></div><div class='line' id='LC2428'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC2429'>&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC2430'><br/></div><div class='line' id='LC2431'>&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC2432'><span class="sd">   * Returns true if an error occurred.</span></div><div class='line' id='LC2433'><span class="sd">   * @access public</span></div><div class='line' id='LC2434'><span class="sd">   * @return bool</span></div><div class='line' id='LC2435'><span class="sd">   */</span></div><div class='line' id='LC2436'>&nbsp;&nbsp;<span class="k">public</span> <span class="k">function</span> <span class="nf">IsError</span><span class="p">()</span> <span class="p">{</span></div><div class='line' id='LC2437'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">return</span> <span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">error_count</span> <span class="o">&gt;</span> <span class="mi">0</span><span class="p">);</span></div><div class='line' id='LC2438'>&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC2439'><br/></div><div class='line' id='LC2440'>&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC2441'><span class="sd">   * Changes every end of line from CRLF, CR or LF to $this-&gt;LE.</span></div><div class='line' id='LC2442'><span class="sd">   * @access public</span></div><div class='line' id='LC2443'><span class="sd">   * @param string $str String to FixEOL</span></div><div class='line' id='LC2444'><span class="sd">   * @return string</span></div><div class='line' id='LC2445'><span class="sd">   */</span></div><div class='line' id='LC2446'>&nbsp;&nbsp;<span class="k">public</span> <span class="k">function</span> <span class="nf">FixEOL</span><span class="p">(</span><span class="nv">$str</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC2447'>	<span class="c1">// condense down to \n</span></div><div class='line' id='LC2448'>	<span class="nv">$nstr</span> <span class="o">=</span> <span class="nb">str_replace</span><span class="p">(</span><span class="k">array</span><span class="p">(</span><span class="s2">&quot;</span><span class="se">\r\n</span><span class="s2">&quot;</span><span class="p">,</span> <span class="s2">&quot;</span><span class="se">\r</span><span class="s2">&quot;</span><span class="p">),</span> <span class="s2">&quot;</span><span class="se">\n</span><span class="s2">&quot;</span><span class="p">,</span> <span class="nv">$str</span><span class="p">);</span></div><div class='line' id='LC2449'>	<span class="c1">// Now convert LE as needed</span></div><div class='line' id='LC2450'>	<span class="k">if</span> <span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">LE</span> <span class="o">!==</span> <span class="s2">&quot;</span><span class="se">\n</span><span class="s2">&quot;</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC2451'>		<span class="nv">$nstr</span> <span class="o">=</span> <span class="nb">str_replace</span><span class="p">(</span><span class="s2">&quot;</span><span class="se">\n</span><span class="s2">&quot;</span><span class="p">,</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">LE</span><span class="p">,</span> <span class="nv">$nstr</span><span class="p">);</span></div><div class='line' id='LC2452'>	<span class="p">}</span></div><div class='line' id='LC2453'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">return</span>  <span class="nv">$nstr</span><span class="p">;</span></div><div class='line' id='LC2454'>&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC2455'><br/></div><div class='line' id='LC2456'>&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC2457'><span class="sd">   * Adds a custom header. $name value can be overloaded to contain</span></div><div class='line' id='LC2458'><span class="sd">   * both header name and value (name:value)</span></div><div class='line' id='LC2459'><span class="sd">   * @access public</span></div><div class='line' id='LC2460'><span class="sd">   * @param string $name custom header name</span></div><div class='line' id='LC2461'><span class="sd">   * @param string $value header value</span></div><div class='line' id='LC2462'><span class="sd">   * @return void</span></div><div class='line' id='LC2463'><span class="sd">   */</span></div><div class='line' id='LC2464'>&nbsp;&nbsp;<span class="k">public</span> <span class="k">function</span> <span class="nf">AddCustomHeader</span><span class="p">(</span><span class="nv">$name</span><span class="p">,</span> <span class="nv">$value</span><span class="o">=</span><span class="k">null</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC2465'>	<span class="k">if</span> <span class="p">(</span><span class="nv">$value</span> <span class="o">===</span> <span class="k">null</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC2466'>		<span class="c1">// Value passed in as name:value</span></div><div class='line' id='LC2467'>		<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">CustomHeader</span><span class="p">[]</span> <span class="o">=</span> <span class="nb">explode</span><span class="p">(</span><span class="s1">&#39;:&#39;</span><span class="p">,</span> <span class="nv">$name</span><span class="p">,</span> <span class="mi">2</span><span class="p">);</span></div><div class='line' id='LC2468'>	<span class="p">}</span> <span class="k">else</span> <span class="p">{</span></div><div class='line' id='LC2469'>		<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">CustomHeader</span><span class="p">[]</span> <span class="o">=</span> <span class="k">array</span><span class="p">(</span><span class="nv">$name</span><span class="p">,</span> <span class="nv">$value</span><span class="p">);</span></div><div class='line' id='LC2470'>	<span class="p">}</span></div><div class='line' id='LC2471'>&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC2472'><br/></div><div class='line' id='LC2473'>&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC2474'><span class="sd">   * Creates a message from an HTML string, making modifications for inline images and backgrounds</span></div><div class='line' id='LC2475'><span class="sd">   * and creates a plain-text version by converting the HTML</span></div><div class='line' id='LC2476'><span class="sd">   * Overwrites any existing values in $this-&gt;Body and $this-&gt;AltBody</span></div><div class='line' id='LC2477'><span class="sd">   * @access public</span></div><div class='line' id='LC2478'><span class="sd">   * @param string $message HTML message string</span></div><div class='line' id='LC2479'><span class="sd">   * @param string $basedir baseline directory for path</span></div><div class='line' id='LC2480'><span class="sd">   * @param bool $advanced Whether to use the advanced HTML to text converter</span></div><div class='line' id='LC2481'><span class="sd">   * @return string $message</span></div><div class='line' id='LC2482'><span class="sd">   */</span></div><div class='line' id='LC2483'>&nbsp;&nbsp;<span class="k">public</span> <span class="k">function</span> <span class="nf">MsgHTML</span><span class="p">(</span><span class="nv">$message</span><span class="p">,</span> <span class="nv">$basedir</span> <span class="o">=</span> <span class="s1">&#39;&#39;</span><span class="p">,</span> <span class="nv">$advanced</span> <span class="o">=</span> <span class="k">false</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC2484'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="nb">preg_match_all</span><span class="p">(</span><span class="s2">&quot;/(src|background)=[</span><span class="se">\&quot;</span><span class="s2">&#39;](.*)[</span><span class="se">\&quot;</span><span class="s2">&#39;]/Ui&quot;</span><span class="p">,</span> <span class="nv">$message</span><span class="p">,</span> <span class="nv">$images</span><span class="p">);</span></div><div class='line' id='LC2485'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span> <span class="p">(</span><span class="nb">isset</span><span class="p">(</span><span class="nv">$images</span><span class="p">[</span><span class="mi">2</span><span class="p">]))</span> <span class="p">{</span></div><div class='line' id='LC2486'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">foreach</span> <span class="p">(</span><span class="nv">$images</span><span class="p">[</span><span class="mi">2</span><span class="p">]</span> <span class="k">as</span> <span class="nv">$i</span> <span class="o">=&gt;</span> <span class="nv">$url</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC2487'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// do not change urls for absolute images (thanks to corvuscorax)</span></div><div class='line' id='LC2488'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span> <span class="p">(</span><span class="o">!</span><span class="nb">preg_match</span><span class="p">(</span><span class="s1">&#39;#^[A-z]+://#&#39;</span><span class="p">,</span> <span class="nv">$url</span><span class="p">))</span> <span class="p">{</span></div><div class='line' id='LC2489'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$filename</span> <span class="o">=</span> <span class="nb">basename</span><span class="p">(</span><span class="nv">$url</span><span class="p">);</span></div><div class='line' id='LC2490'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$directory</span> <span class="o">=</span> <span class="nb">dirname</span><span class="p">(</span><span class="nv">$url</span><span class="p">);</span></div><div class='line' id='LC2491'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span> <span class="p">(</span><span class="nv">$directory</span> <span class="o">==</span> <span class="s1">&#39;.&#39;</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC2492'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$directory</span> <span class="o">=</span> <span class="s1">&#39;&#39;</span><span class="p">;</span></div><div class='line' id='LC2493'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC2494'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$cid</span> <span class="o">=</span> <span class="nb">md5</span><span class="p">(</span><span class="nv">$url</span><span class="p">)</span><span class="o">.</span><span class="s1">&#39;@phpmailer.0&#39;</span><span class="p">;</span> <span class="c1">//RFC2392 S 2</span></div><div class='line' id='LC2495'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span> <span class="p">(</span><span class="nb">strlen</span><span class="p">(</span><span class="nv">$basedir</span><span class="p">)</span> <span class="o">&gt;</span> <span class="mi">1</span> <span class="o">&amp;&amp;</span> <span class="nx">substr</span><span class="p">(</span><span class="nv">$basedir</span><span class="p">,</span> <span class="o">-</span><span class="mi">1</span><span class="p">)</span> <span class="o">!=</span> <span class="s1">&#39;/&#39;</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC2496'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$basedir</span> <span class="o">.=</span> <span class="s1">&#39;/&#39;</span><span class="p">;</span></div><div class='line' id='LC2497'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC2498'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span> <span class="p">(</span><span class="nb">strlen</span><span class="p">(</span><span class="nv">$directory</span><span class="p">)</span> <span class="o">&gt;</span> <span class="mi">1</span> <span class="o">&amp;&amp;</span> <span class="nx">substr</span><span class="p">(</span><span class="nv">$directory</span><span class="p">,</span> <span class="o">-</span><span class="mi">1</span><span class="p">)</span> <span class="o">!=</span> <span class="s1">&#39;/&#39;</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC2499'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$directory</span> <span class="o">.=</span> <span class="s1">&#39;/&#39;</span><span class="p">;</span></div><div class='line' id='LC2500'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC2501'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span> <span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">AddEmbeddedImage</span><span class="p">(</span><span class="nv">$basedir</span><span class="o">.</span><span class="nv">$directory</span><span class="o">.</span><span class="nv">$filename</span><span class="p">,</span> <span class="nv">$cid</span><span class="p">,</span> <span class="nv">$filename</span><span class="p">,</span> <span class="s1">&#39;base64&#39;</span><span class="p">,</span> <span class="nx">self</span><span class="o">::</span><span class="na">_mime_types</span><span class="p">(</span><span class="nx">self</span><span class="o">::</span><span class="na">mb_pathinfo</span><span class="p">(</span><span class="nv">$filename</span><span class="p">,</span> <span class="nx">PATHINFO_EXTENSION</span><span class="p">))))</span> <span class="p">{</span></div><div class='line' id='LC2502'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$message</span> <span class="o">=</span> <span class="nb">preg_replace</span><span class="p">(</span><span class="s2">&quot;/&quot;</span><span class="o">.</span><span class="nv">$images</span><span class="p">[</span><span class="mi">1</span><span class="p">][</span><span class="nv">$i</span><span class="p">]</span><span class="o">.</span><span class="s2">&quot;=[</span><span class="se">\&quot;</span><span class="s2">&#39;]&quot;</span><span class="o">.</span><span class="nb">preg_quote</span><span class="p">(</span><span class="nv">$url</span><span class="p">,</span> <span class="s1">&#39;/&#39;</span><span class="p">)</span><span class="o">.</span><span class="s2">&quot;[</span><span class="se">\&quot;</span><span class="s2">&#39;]/Ui&quot;</span><span class="p">,</span> <span class="nv">$images</span><span class="p">[</span><span class="mi">1</span><span class="p">][</span><span class="nv">$i</span><span class="p">]</span><span class="o">.</span><span class="s2">&quot;=</span><span class="se">\&quot;</span><span class="s2">cid:&quot;</span><span class="o">.</span><span class="nv">$cid</span><span class="o">.</span><span class="s2">&quot;</span><span class="se">\&quot;</span><span class="s2">&quot;</span><span class="p">,</span> <span class="nv">$message</span><span class="p">);</span></div><div class='line' id='LC2503'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC2504'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC2505'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC2506'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC2507'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">IsHTML</span><span class="p">(</span><span class="k">true</span><span class="p">);</span></div><div class='line' id='LC2508'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span> <span class="p">(</span><span class="k">empty</span><span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">AltBody</span><span class="p">))</span> <span class="p">{</span></div><div class='line' id='LC2509'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">AltBody</span> <span class="o">=</span> <span class="s1">&#39;To view this email message, open it in a program that understands HTML!&#39;</span> <span class="o">.</span> <span class="s2">&quot;</span><span class="se">\n\n</span><span class="s2">&quot;</span><span class="p">;</span></div><div class='line' id='LC2510'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC2511'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">//Convert all message body line breaks to CRLF, makes quoted-printable encoding work much better</span></div><div class='line' id='LC2512'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">Body</span> <span class="o">=</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">NormalizeBreaks</span><span class="p">(</span><span class="nv">$message</span><span class="p">);</span></div><div class='line' id='LC2513'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">AltBody</span> <span class="o">=</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">NormalizeBreaks</span><span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">html2text</span><span class="p">(</span><span class="nv">$message</span><span class="p">,</span> <span class="nv">$advanced</span><span class="p">));</span></div><div class='line' id='LC2514'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">return</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">Body</span><span class="p">;</span></div><div class='line' id='LC2515'>&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC2516'><br/></div><div class='line' id='LC2517'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC2518'><span class="sd">     * Convert an HTML string into a plain text version</span></div><div class='line' id='LC2519'><span class="sd">     * @param string $html The HTML text to convert</span></div><div class='line' id='LC2520'><span class="sd">     * @param bool $advanced Should this use the more complex html2text converter or just a simple one?</span></div><div class='line' id='LC2521'><span class="sd">     * @return string</span></div><div class='line' id='LC2522'><span class="sd">     */</span></div><div class='line' id='LC2523'>&nbsp;&nbsp;<span class="k">public</span> <span class="k">function</span> <span class="nf">html2text</span><span class="p">(</span><span class="nv">$html</span><span class="p">,</span> <span class="nv">$advanced</span> <span class="o">=</span> <span class="k">false</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC2524'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span> <span class="p">(</span><span class="nv">$advanced</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC2525'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">require_once</span> <span class="s1">&#39;extras/class.html2text.php&#39;</span><span class="p">;</span></div><div class='line' id='LC2526'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$h</span> <span class="o">=</span> <span class="k">new</span> <span class="nx">html2text</span><span class="p">(</span><span class="nv">$html</span><span class="p">);</span></div><div class='line' id='LC2527'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">return</span> <span class="nv">$h</span><span class="o">-&gt;</span><span class="na">get_text</span><span class="p">();</span></div><div class='line' id='LC2528'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC2529'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">return</span> <span class="nb">html_entity_decode</span><span class="p">(</span><span class="nx">trim</span><span class="p">(</span><span class="nb">strip_tags</span><span class="p">(</span><span class="nb">preg_replace</span><span class="p">(</span><span class="s1">&#39;/&lt;(head|title|style|script)[^&gt;]*&gt;.*?&lt;\/\\1&gt;/s&#39;</span><span class="p">,</span> <span class="s1">&#39;&#39;</span><span class="p">,</span> <span class="nv">$html</span><span class="p">))),</span> <span class="nx">ENT_QUOTES</span><span class="p">,</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">CharSet</span><span class="p">);</span></div><div class='line' id='LC2530'>&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC2531'><br/></div><div class='line' id='LC2532'>&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC2533'><span class="sd">   * Gets the MIME type of the embedded or inline image</span></div><div class='line' id='LC2534'><span class="sd">   * @param string $ext File extension</span></div><div class='line' id='LC2535'><span class="sd">   * @access public</span></div><div class='line' id='LC2536'><span class="sd">   * @return string MIME type of ext</span></div><div class='line' id='LC2537'><span class="sd">   * @static</span></div><div class='line' id='LC2538'><span class="sd">   */</span></div><div class='line' id='LC2539'>&nbsp;&nbsp;<span class="k">public</span> <span class="k">static</span> <span class="k">function</span> <span class="nf">_mime_types</span><span class="p">(</span><span class="nv">$ext</span> <span class="o">=</span> <span class="s1">&#39;&#39;</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC2540'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$mimes</span> <span class="o">=</span> <span class="k">array</span><span class="p">(</span></div><div class='line' id='LC2541'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="s1">&#39;xl&#39;</span>    <span class="o">=&gt;</span>  <span class="s1">&#39;application/excel&#39;</span><span class="p">,</span></div><div class='line' id='LC2542'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="s1">&#39;hqx&#39;</span>   <span class="o">=&gt;</span>  <span class="s1">&#39;application/mac-binhex40&#39;</span><span class="p">,</span></div><div class='line' id='LC2543'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="s1">&#39;cpt&#39;</span>   <span class="o">=&gt;</span>  <span class="s1">&#39;application/mac-compactpro&#39;</span><span class="p">,</span></div><div class='line' id='LC2544'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="s1">&#39;bin&#39;</span>   <span class="o">=&gt;</span>  <span class="s1">&#39;application/macbinary&#39;</span><span class="p">,</span></div><div class='line' id='LC2545'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="s1">&#39;doc&#39;</span>   <span class="o">=&gt;</span>  <span class="s1">&#39;application/msword&#39;</span><span class="p">,</span></div><div class='line' id='LC2546'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="s1">&#39;word&#39;</span>  <span class="o">=&gt;</span>  <span class="s1">&#39;application/msword&#39;</span><span class="p">,</span></div><div class='line' id='LC2547'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="s1">&#39;class&#39;</span> <span class="o">=&gt;</span>  <span class="s1">&#39;application/octet-stream&#39;</span><span class="p">,</span></div><div class='line' id='LC2548'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="s1">&#39;dll&#39;</span>   <span class="o">=&gt;</span>  <span class="s1">&#39;application/octet-stream&#39;</span><span class="p">,</span></div><div class='line' id='LC2549'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="s1">&#39;dms&#39;</span>   <span class="o">=&gt;</span>  <span class="s1">&#39;application/octet-stream&#39;</span><span class="p">,</span></div><div class='line' id='LC2550'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="s1">&#39;exe&#39;</span>   <span class="o">=&gt;</span>  <span class="s1">&#39;application/octet-stream&#39;</span><span class="p">,</span></div><div class='line' id='LC2551'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="s1">&#39;lha&#39;</span>   <span class="o">=&gt;</span>  <span class="s1">&#39;application/octet-stream&#39;</span><span class="p">,</span></div><div class='line' id='LC2552'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="s1">&#39;lzh&#39;</span>   <span class="o">=&gt;</span>  <span class="s1">&#39;application/octet-stream&#39;</span><span class="p">,</span></div><div class='line' id='LC2553'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="s1">&#39;psd&#39;</span>   <span class="o">=&gt;</span>  <span class="s1">&#39;application/octet-stream&#39;</span><span class="p">,</span></div><div class='line' id='LC2554'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="s1">&#39;sea&#39;</span>   <span class="o">=&gt;</span>  <span class="s1">&#39;application/octet-stream&#39;</span><span class="p">,</span></div><div class='line' id='LC2555'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="s1">&#39;so&#39;</span>    <span class="o">=&gt;</span>  <span class="s1">&#39;application/octet-stream&#39;</span><span class="p">,</span></div><div class='line' id='LC2556'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="s1">&#39;oda&#39;</span>   <span class="o">=&gt;</span>  <span class="s1">&#39;application/oda&#39;</span><span class="p">,</span></div><div class='line' id='LC2557'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="s1">&#39;pdf&#39;</span>   <span class="o">=&gt;</span>  <span class="s1">&#39;application/pdf&#39;</span><span class="p">,</span></div><div class='line' id='LC2558'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="s1">&#39;ai&#39;</span>    <span class="o">=&gt;</span>  <span class="s1">&#39;application/postscript&#39;</span><span class="p">,</span></div><div class='line' id='LC2559'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="s1">&#39;eps&#39;</span>   <span class="o">=&gt;</span>  <span class="s1">&#39;application/postscript&#39;</span><span class="p">,</span></div><div class='line' id='LC2560'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="s1">&#39;ps&#39;</span>    <span class="o">=&gt;</span>  <span class="s1">&#39;application/postscript&#39;</span><span class="p">,</span></div><div class='line' id='LC2561'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="s1">&#39;smi&#39;</span>   <span class="o">=&gt;</span>  <span class="s1">&#39;application/smil&#39;</span><span class="p">,</span></div><div class='line' id='LC2562'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="s1">&#39;smil&#39;</span>  <span class="o">=&gt;</span>  <span class="s1">&#39;application/smil&#39;</span><span class="p">,</span></div><div class='line' id='LC2563'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="s1">&#39;mif&#39;</span>   <span class="o">=&gt;</span>  <span class="s1">&#39;application/vnd.mif&#39;</span><span class="p">,</span></div><div class='line' id='LC2564'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="s1">&#39;xls&#39;</span>   <span class="o">=&gt;</span>  <span class="s1">&#39;application/vnd.ms-excel&#39;</span><span class="p">,</span></div><div class='line' id='LC2565'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="s1">&#39;ppt&#39;</span>   <span class="o">=&gt;</span>  <span class="s1">&#39;application/vnd.ms-powerpoint&#39;</span><span class="p">,</span></div><div class='line' id='LC2566'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="s1">&#39;wbxml&#39;</span> <span class="o">=&gt;</span>  <span class="s1">&#39;application/vnd.wap.wbxml&#39;</span><span class="p">,</span></div><div class='line' id='LC2567'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="s1">&#39;wmlc&#39;</span>  <span class="o">=&gt;</span>  <span class="s1">&#39;application/vnd.wap.wmlc&#39;</span><span class="p">,</span></div><div class='line' id='LC2568'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="s1">&#39;dcr&#39;</span>   <span class="o">=&gt;</span>  <span class="s1">&#39;application/x-director&#39;</span><span class="p">,</span></div><div class='line' id='LC2569'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="s1">&#39;dir&#39;</span>   <span class="o">=&gt;</span>  <span class="s1">&#39;application/x-director&#39;</span><span class="p">,</span></div><div class='line' id='LC2570'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="s1">&#39;dxr&#39;</span>   <span class="o">=&gt;</span>  <span class="s1">&#39;application/x-director&#39;</span><span class="p">,</span></div><div class='line' id='LC2571'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="s1">&#39;dvi&#39;</span>   <span class="o">=&gt;</span>  <span class="s1">&#39;application/x-dvi&#39;</span><span class="p">,</span></div><div class='line' id='LC2572'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="s1">&#39;gtar&#39;</span>  <span class="o">=&gt;</span>  <span class="s1">&#39;application/x-gtar&#39;</span><span class="p">,</span></div><div class='line' id='LC2573'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="s1">&#39;php3&#39;</span>  <span class="o">=&gt;</span>  <span class="s1">&#39;application/x-httpd-php&#39;</span><span class="p">,</span></div><div class='line' id='LC2574'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="s1">&#39;php4&#39;</span>  <span class="o">=&gt;</span>  <span class="s1">&#39;application/x-httpd-php&#39;</span><span class="p">,</span></div><div class='line' id='LC2575'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="s1">&#39;php&#39;</span>   <span class="o">=&gt;</span>  <span class="s1">&#39;application/x-httpd-php&#39;</span><span class="p">,</span></div><div class='line' id='LC2576'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="s1">&#39;phtml&#39;</span> <span class="o">=&gt;</span>  <span class="s1">&#39;application/x-httpd-php&#39;</span><span class="p">,</span></div><div class='line' id='LC2577'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="s1">&#39;phps&#39;</span>  <span class="o">=&gt;</span>  <span class="s1">&#39;application/x-httpd-php-source&#39;</span><span class="p">,</span></div><div class='line' id='LC2578'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="s1">&#39;js&#39;</span>    <span class="o">=&gt;</span>  <span class="s1">&#39;application/x-javascript&#39;</span><span class="p">,</span></div><div class='line' id='LC2579'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="s1">&#39;swf&#39;</span>   <span class="o">=&gt;</span>  <span class="s1">&#39;application/x-shockwave-flash&#39;</span><span class="p">,</span></div><div class='line' id='LC2580'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="s1">&#39;sit&#39;</span>   <span class="o">=&gt;</span>  <span class="s1">&#39;application/x-stuffit&#39;</span><span class="p">,</span></div><div class='line' id='LC2581'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="s1">&#39;tar&#39;</span>   <span class="o">=&gt;</span>  <span class="s1">&#39;application/x-tar&#39;</span><span class="p">,</span></div><div class='line' id='LC2582'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="s1">&#39;tgz&#39;</span>   <span class="o">=&gt;</span>  <span class="s1">&#39;application/x-tar&#39;</span><span class="p">,</span></div><div class='line' id='LC2583'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="s1">&#39;xht&#39;</span>   <span class="o">=&gt;</span>  <span class="s1">&#39;application/xhtml+xml&#39;</span><span class="p">,</span></div><div class='line' id='LC2584'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="s1">&#39;xhtml&#39;</span> <span class="o">=&gt;</span>  <span class="s1">&#39;application/xhtml+xml&#39;</span><span class="p">,</span></div><div class='line' id='LC2585'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="s1">&#39;zip&#39;</span>   <span class="o">=&gt;</span>  <span class="s1">&#39;application/zip&#39;</span><span class="p">,</span></div><div class='line' id='LC2586'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="s1">&#39;mid&#39;</span>   <span class="o">=&gt;</span>  <span class="s1">&#39;audio/midi&#39;</span><span class="p">,</span></div><div class='line' id='LC2587'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="s1">&#39;midi&#39;</span>  <span class="o">=&gt;</span>  <span class="s1">&#39;audio/midi&#39;</span><span class="p">,</span></div><div class='line' id='LC2588'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="s1">&#39;mp2&#39;</span>   <span class="o">=&gt;</span>  <span class="s1">&#39;audio/mpeg&#39;</span><span class="p">,</span></div><div class='line' id='LC2589'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="s1">&#39;mp3&#39;</span>   <span class="o">=&gt;</span>  <span class="s1">&#39;audio/mpeg&#39;</span><span class="p">,</span></div><div class='line' id='LC2590'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="s1">&#39;mpga&#39;</span>  <span class="o">=&gt;</span>  <span class="s1">&#39;audio/mpeg&#39;</span><span class="p">,</span></div><div class='line' id='LC2591'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="s1">&#39;aif&#39;</span>   <span class="o">=&gt;</span>  <span class="s1">&#39;audio/x-aiff&#39;</span><span class="p">,</span></div><div class='line' id='LC2592'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="s1">&#39;aifc&#39;</span>  <span class="o">=&gt;</span>  <span class="s1">&#39;audio/x-aiff&#39;</span><span class="p">,</span></div><div class='line' id='LC2593'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="s1">&#39;aiff&#39;</span>  <span class="o">=&gt;</span>  <span class="s1">&#39;audio/x-aiff&#39;</span><span class="p">,</span></div><div class='line' id='LC2594'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="s1">&#39;ram&#39;</span>   <span class="o">=&gt;</span>  <span class="s1">&#39;audio/x-pn-realaudio&#39;</span><span class="p">,</span></div><div class='line' id='LC2595'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="s1">&#39;rm&#39;</span>    <span class="o">=&gt;</span>  <span class="s1">&#39;audio/x-pn-realaudio&#39;</span><span class="p">,</span></div><div class='line' id='LC2596'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="s1">&#39;rpm&#39;</span>   <span class="o">=&gt;</span>  <span class="s1">&#39;audio/x-pn-realaudio-plugin&#39;</span><span class="p">,</span></div><div class='line' id='LC2597'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="s1">&#39;ra&#39;</span>    <span class="o">=&gt;</span>  <span class="s1">&#39;audio/x-realaudio&#39;</span><span class="p">,</span></div><div class='line' id='LC2598'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="s1">&#39;wav&#39;</span>   <span class="o">=&gt;</span>  <span class="s1">&#39;audio/x-wav&#39;</span><span class="p">,</span></div><div class='line' id='LC2599'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="s1">&#39;bmp&#39;</span>   <span class="o">=&gt;</span>  <span class="s1">&#39;image/bmp&#39;</span><span class="p">,</span></div><div class='line' id='LC2600'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="s1">&#39;gif&#39;</span>   <span class="o">=&gt;</span>  <span class="s1">&#39;image/gif&#39;</span><span class="p">,</span></div><div class='line' id='LC2601'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="s1">&#39;jpeg&#39;</span>  <span class="o">=&gt;</span>  <span class="s1">&#39;image/jpeg&#39;</span><span class="p">,</span></div><div class='line' id='LC2602'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="s1">&#39;jpe&#39;</span>   <span class="o">=&gt;</span>  <span class="s1">&#39;image/jpeg&#39;</span><span class="p">,</span></div><div class='line' id='LC2603'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="s1">&#39;jpg&#39;</span>   <span class="o">=&gt;</span>  <span class="s1">&#39;image/jpeg&#39;</span><span class="p">,</span></div><div class='line' id='LC2604'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="s1">&#39;png&#39;</span>   <span class="o">=&gt;</span>  <span class="s1">&#39;image/png&#39;</span><span class="p">,</span></div><div class='line' id='LC2605'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="s1">&#39;tiff&#39;</span>  <span class="o">=&gt;</span>  <span class="s1">&#39;image/tiff&#39;</span><span class="p">,</span></div><div class='line' id='LC2606'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="s1">&#39;tif&#39;</span>   <span class="o">=&gt;</span>  <span class="s1">&#39;image/tiff&#39;</span><span class="p">,</span></div><div class='line' id='LC2607'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="s1">&#39;eml&#39;</span>   <span class="o">=&gt;</span>  <span class="s1">&#39;message/rfc822&#39;</span><span class="p">,</span></div><div class='line' id='LC2608'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="s1">&#39;css&#39;</span>   <span class="o">=&gt;</span>  <span class="s1">&#39;text/css&#39;</span><span class="p">,</span></div><div class='line' id='LC2609'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="s1">&#39;html&#39;</span>  <span class="o">=&gt;</span>  <span class="s1">&#39;text/html&#39;</span><span class="p">,</span></div><div class='line' id='LC2610'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="s1">&#39;htm&#39;</span>   <span class="o">=&gt;</span>  <span class="s1">&#39;text/html&#39;</span><span class="p">,</span></div><div class='line' id='LC2611'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="s1">&#39;shtml&#39;</span> <span class="o">=&gt;</span>  <span class="s1">&#39;text/html&#39;</span><span class="p">,</span></div><div class='line' id='LC2612'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="s1">&#39;log&#39;</span>   <span class="o">=&gt;</span>  <span class="s1">&#39;text/plain&#39;</span><span class="p">,</span></div><div class='line' id='LC2613'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="s1">&#39;text&#39;</span>  <span class="o">=&gt;</span>  <span class="s1">&#39;text/plain&#39;</span><span class="p">,</span></div><div class='line' id='LC2614'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="s1">&#39;txt&#39;</span>   <span class="o">=&gt;</span>  <span class="s1">&#39;text/plain&#39;</span><span class="p">,</span></div><div class='line' id='LC2615'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="s1">&#39;rtx&#39;</span>   <span class="o">=&gt;</span>  <span class="s1">&#39;text/richtext&#39;</span><span class="p">,</span></div><div class='line' id='LC2616'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="s1">&#39;rtf&#39;</span>   <span class="o">=&gt;</span>  <span class="s1">&#39;text/rtf&#39;</span><span class="p">,</span></div><div class='line' id='LC2617'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="s1">&#39;xml&#39;</span>   <span class="o">=&gt;</span>  <span class="s1">&#39;text/xml&#39;</span><span class="p">,</span></div><div class='line' id='LC2618'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="s1">&#39;xsl&#39;</span>   <span class="o">=&gt;</span>  <span class="s1">&#39;text/xml&#39;</span><span class="p">,</span></div><div class='line' id='LC2619'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="s1">&#39;mpeg&#39;</span>  <span class="o">=&gt;</span>  <span class="s1">&#39;video/mpeg&#39;</span><span class="p">,</span></div><div class='line' id='LC2620'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="s1">&#39;mpe&#39;</span>   <span class="o">=&gt;</span>  <span class="s1">&#39;video/mpeg&#39;</span><span class="p">,</span></div><div class='line' id='LC2621'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="s1">&#39;mpg&#39;</span>   <span class="o">=&gt;</span>  <span class="s1">&#39;video/mpeg&#39;</span><span class="p">,</span></div><div class='line' id='LC2622'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="s1">&#39;mov&#39;</span>   <span class="o">=&gt;</span>  <span class="s1">&#39;video/quicktime&#39;</span><span class="p">,</span></div><div class='line' id='LC2623'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="s1">&#39;qt&#39;</span>    <span class="o">=&gt;</span>  <span class="s1">&#39;video/quicktime&#39;</span><span class="p">,</span></div><div class='line' id='LC2624'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="s1">&#39;rv&#39;</span>    <span class="o">=&gt;</span>  <span class="s1">&#39;video/vnd.rn-realvideo&#39;</span><span class="p">,</span></div><div class='line' id='LC2625'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="s1">&#39;avi&#39;</span>   <span class="o">=&gt;</span>  <span class="s1">&#39;video/x-msvideo&#39;</span><span class="p">,</span></div><div class='line' id='LC2626'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="s1">&#39;movie&#39;</span> <span class="o">=&gt;</span>  <span class="s1">&#39;video/x-sgi-movie&#39;</span></div><div class='line' id='LC2627'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">);</span></div><div class='line' id='LC2628'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">return</span> <span class="p">(</span><span class="o">!</span><span class="nb">isset</span><span class="p">(</span><span class="nv">$mimes</span><span class="p">[</span><span class="nx">strtolower</span><span class="p">(</span><span class="nv">$ext</span><span class="p">)]))</span> <span class="o">?</span> <span class="s1">&#39;application/octet-stream&#39;</span> <span class="o">:</span> <span class="nv">$mimes</span><span class="p">[</span><span class="nx">strtolower</span><span class="p">(</span><span class="nv">$ext</span><span class="p">)];</span></div><div class='line' id='LC2629'>&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC2630'><br/></div><div class='line' id='LC2631'>&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC2632'><span class="sd">   * Try to map a file name to a MIME type, default to application/octet-stream</span></div><div class='line' id='LC2633'><span class="sd">   * @param string $filename A file name or full path, does not need to exist as a file</span></div><div class='line' id='LC2634'><span class="sd">   * @return string</span></div><div class='line' id='LC2635'><span class="sd">   * @static</span></div><div class='line' id='LC2636'><span class="sd">   */</span></div><div class='line' id='LC2637'>&nbsp;&nbsp;<span class="k">public</span> <span class="k">static</span> <span class="k">function</span> <span class="nf">filenameToType</span><span class="p">(</span><span class="nv">$filename</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC2638'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">//In case the path is a URL, strip any query string before getting extension</span></div><div class='line' id='LC2639'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$qpos</span> <span class="o">=</span> <span class="nb">strpos</span><span class="p">(</span><span class="nv">$filename</span><span class="p">,</span> <span class="s1">&#39;?&#39;</span><span class="p">);</span></div><div class='line' id='LC2640'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span> <span class="p">(</span><span class="nv">$qpos</span> <span class="o">!==</span> <span class="k">false</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC2641'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$filename</span> <span class="o">=</span> <span class="nx">substr</span><span class="p">(</span><span class="nv">$filename</span><span class="p">,</span> <span class="mi">0</span><span class="p">,</span> <span class="nv">$qpos</span><span class="p">);</span></div><div class='line' id='LC2642'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC2643'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$pathinfo</span> <span class="o">=</span> <span class="nx">self</span><span class="o">::</span><span class="na">mb_pathinfo</span><span class="p">(</span><span class="nv">$filename</span><span class="p">);</span></div><div class='line' id='LC2644'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">return</span> <span class="nx">self</span><span class="o">::</span><span class="na">_mime_types</span><span class="p">(</span><span class="nv">$pathinfo</span><span class="p">[</span><span class="s1">&#39;extension&#39;</span><span class="p">]);</span></div><div class='line' id='LC2645'>&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC2646'><br/></div><div class='line' id='LC2647'>&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC2648'><span class="sd">   * Drop-in replacement for pathinfo(), but multibyte-safe, cross-platform-safe, old-version-safe.</span></div><div class='line' id='LC2649'><span class="sd">   * Works similarly to the one in PHP &gt;= 5.2.0</span></div><div class='line' id='LC2650'><span class="sd">   * @link http://www.php.net/manual/en/function.pathinfo.php#107461</span></div><div class='line' id='LC2651'><span class="sd">   * @param string $path A filename or path, does not need to exist as a file</span></div><div class='line' id='LC2652'><span class="sd">   * @param integer|string $options Either a PATHINFO_* constant, or a string name to return only the specified piece, allows &#39;filename&#39; to work on PHP &lt; 5.2</span></div><div class='line' id='LC2653'><span class="sd">   * @return string|array</span></div><div class='line' id='LC2654'><span class="sd">   * @static</span></div><div class='line' id='LC2655'><span class="sd">   */</span></div><div class='line' id='LC2656'>&nbsp;&nbsp;<span class="k">public</span> <span class="k">static</span> <span class="k">function</span> <span class="nf">mb_pathinfo</span><span class="p">(</span><span class="nv">$path</span><span class="p">,</span> <span class="nv">$options</span> <span class="o">=</span> <span class="k">null</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC2657'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$ret</span> <span class="o">=</span> <span class="k">array</span><span class="p">(</span><span class="s1">&#39;dirname&#39;</span> <span class="o">=&gt;</span> <span class="s1">&#39;&#39;</span><span class="p">,</span> <span class="s1">&#39;basename&#39;</span> <span class="o">=&gt;</span> <span class="s1">&#39;&#39;</span><span class="p">,</span> <span class="s1">&#39;extension&#39;</span> <span class="o">=&gt;</span> <span class="s1">&#39;&#39;</span><span class="p">,</span> <span class="s1">&#39;filename&#39;</span> <span class="o">=&gt;</span> <span class="s1">&#39;&#39;</span><span class="p">);</span></div><div class='line' id='LC2658'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$m</span> <span class="o">=</span> <span class="k">array</span><span class="p">();</span></div><div class='line' id='LC2659'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="nb">preg_match</span><span class="p">(</span><span class="s1">&#39;%^(.*?)[\\\\/]*(([^/\\\\]*?)(\.([^\.\\\\/]+?)|))[\\\\/\.]*$%im&#39;</span><span class="p">,</span> <span class="nv">$path</span><span class="p">,</span> <span class="nv">$m</span><span class="p">);</span></div><div class='line' id='LC2660'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span><span class="p">(</span><span class="nb">array_key_exists</span><span class="p">(</span><span class="mi">1</span><span class="p">,</span> <span class="nv">$m</span><span class="p">))</span> <span class="p">{</span></div><div class='line' id='LC2661'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$ret</span><span class="p">[</span><span class="s1">&#39;dirname&#39;</span><span class="p">]</span> <span class="o">=</span> <span class="nv">$m</span><span class="p">[</span><span class="mi">1</span><span class="p">];</span></div><div class='line' id='LC2662'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC2663'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span><span class="p">(</span><span class="nb">array_key_exists</span><span class="p">(</span><span class="mi">2</span><span class="p">,</span> <span class="nv">$m</span><span class="p">))</span> <span class="p">{</span></div><div class='line' id='LC2664'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$ret</span><span class="p">[</span><span class="s1">&#39;basename&#39;</span><span class="p">]</span> <span class="o">=</span> <span class="nv">$m</span><span class="p">[</span><span class="mi">2</span><span class="p">];</span></div><div class='line' id='LC2665'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC2666'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span><span class="p">(</span><span class="nb">array_key_exists</span><span class="p">(</span><span class="mi">5</span><span class="p">,</span> <span class="nv">$m</span><span class="p">))</span> <span class="p">{</span></div><div class='line' id='LC2667'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$ret</span><span class="p">[</span><span class="s1">&#39;extension&#39;</span><span class="p">]</span> <span class="o">=</span> <span class="nv">$m</span><span class="p">[</span><span class="mi">5</span><span class="p">];</span></div><div class='line' id='LC2668'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC2669'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span><span class="p">(</span><span class="nb">array_key_exists</span><span class="p">(</span><span class="mi">3</span><span class="p">,</span> <span class="nv">$m</span><span class="p">))</span> <span class="p">{</span></div><div class='line' id='LC2670'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$ret</span><span class="p">[</span><span class="s1">&#39;filename&#39;</span><span class="p">]</span> <span class="o">=</span> <span class="nv">$m</span><span class="p">[</span><span class="mi">3</span><span class="p">];</span></div><div class='line' id='LC2671'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC2672'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">switch</span><span class="p">(</span><span class="nv">$options</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC2673'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">case</span> <span class="nx">PATHINFO_DIRNAME</span><span class="o">:</span></div><div class='line' id='LC2674'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">case</span> <span class="s1">&#39;dirname&#39;</span><span class="o">:</span></div><div class='line' id='LC2675'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">return</span> <span class="nv">$ret</span><span class="p">[</span><span class="s1">&#39;dirname&#39;</span><span class="p">];</span></div><div class='line' id='LC2676'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">break</span><span class="p">;</span></div><div class='line' id='LC2677'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">case</span> <span class="nx">PATHINFO_BASENAME</span><span class="o">:</span></div><div class='line' id='LC2678'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">case</span> <span class="s1">&#39;basename&#39;</span><span class="o">:</span></div><div class='line' id='LC2679'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">return</span> <span class="nv">$ret</span><span class="p">[</span><span class="s1">&#39;basename&#39;</span><span class="p">];</span></div><div class='line' id='LC2680'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">break</span><span class="p">;</span></div><div class='line' id='LC2681'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">case</span> <span class="nx">PATHINFO_EXTENSION</span><span class="o">:</span></div><div class='line' id='LC2682'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">case</span> <span class="s1">&#39;extension&#39;</span><span class="o">:</span></div><div class='line' id='LC2683'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">return</span> <span class="nv">$ret</span><span class="p">[</span><span class="s1">&#39;extension&#39;</span><span class="p">];</span></div><div class='line' id='LC2684'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">break</span><span class="p">;</span></div><div class='line' id='LC2685'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">case</span> <span class="nx">PATHINFO_FILENAME</span><span class="o">:</span></div><div class='line' id='LC2686'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">case</span> <span class="s1">&#39;filename&#39;</span><span class="o">:</span></div><div class='line' id='LC2687'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">return</span> <span class="nv">$ret</span><span class="p">[</span><span class="s1">&#39;filename&#39;</span><span class="p">];</span></div><div class='line' id='LC2688'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">break</span><span class="p">;</span></div><div class='line' id='LC2689'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">default</span><span class="o">:</span></div><div class='line' id='LC2690'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">return</span> <span class="nv">$ret</span><span class="p">;</span></div><div class='line' id='LC2691'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC2692'>&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC2693'><br/></div><div class='line' id='LC2694'>&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC2695'><span class="sd">   * Set (or reset) Class Objects (variables)</span></div><div class='line' id='LC2696'><span class="sd">   *</span></div><div class='line' id='LC2697'><span class="sd">   * Usage Example:</span></div><div class='line' id='LC2698'><span class="sd">   * $page-&gt;set(&#39;X-Priority&#39;, &#39;3&#39;);</span></div><div class='line' id='LC2699'><span class="sd">   *</span></div><div class='line' id='LC2700'><span class="sd">   * @access public</span></div><div class='line' id='LC2701'><span class="sd">   * @param string $name</span></div><div class='line' id='LC2702'><span class="sd">   * @param mixed $value</span></div><div class='line' id='LC2703'><span class="sd">   * NOTE: will not work with arrays, there are no arrays to set/reset</span></div><div class='line' id='LC2704'><span class="sd">   * @throws phpmailerException</span></div><div class='line' id='LC2705'><span class="sd">   * @return bool</span></div><div class='line' id='LC2706'><span class="sd">   * @todo Should this not be using __set() magic function?</span></div><div class='line' id='LC2707'><span class="sd">   */</span></div><div class='line' id='LC2708'>&nbsp;&nbsp;<span class="k">public</span> <span class="k">function</span> <span class="nf">set</span><span class="p">(</span><span class="nv">$name</span><span class="p">,</span> <span class="nv">$value</span> <span class="o">=</span> <span class="s1">&#39;&#39;</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC2709'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">try</span> <span class="p">{</span></div><div class='line' id='LC2710'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span> <span class="p">(</span><span class="nb">isset</span><span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="nv">$name</span><span class="p">)</span> <span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC2711'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="nv">$name</span> <span class="o">=</span> <span class="nv">$value</span><span class="p">;</span></div><div class='line' id='LC2712'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span> <span class="k">else</span> <span class="p">{</span></div><div class='line' id='LC2713'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">throw</span> <span class="k">new</span> <span class="nx">phpmailerException</span><span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">Lang</span><span class="p">(</span><span class="s1">&#39;variable_set&#39;</span><span class="p">)</span> <span class="o">.</span> <span class="nv">$name</span><span class="p">,</span> <span class="nx">self</span><span class="o">::</span><span class="na">STOP_CRITICAL</span><span class="p">);</span></div><div class='line' id='LC2714'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC2715'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span> <span class="k">catch</span> <span class="p">(</span><span class="nx">Exception</span> <span class="nv">$e</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC2716'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">SetError</span><span class="p">(</span><span class="nv">$e</span><span class="o">-&gt;</span><span class="na">getMessage</span><span class="p">());</span></div><div class='line' id='LC2717'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span> <span class="p">(</span><span class="nv">$e</span><span class="o">-&gt;</span><span class="na">getCode</span><span class="p">()</span> <span class="o">==</span> <span class="nx">self</span><span class="o">::</span><span class="na">STOP_CRITICAL</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC2718'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">return</span> <span class="k">false</span><span class="p">;</span></div><div class='line' id='LC2719'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC2720'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC2721'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">return</span> <span class="k">true</span><span class="p">;</span></div><div class='line' id='LC2722'>&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC2723'><br/></div><div class='line' id='LC2724'>&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC2725'><span class="sd">   * Strips newlines to prevent header injection.</span></div><div class='line' id='LC2726'><span class="sd">   * @access public</span></div><div class='line' id='LC2727'><span class="sd">   * @param string $str</span></div><div class='line' id='LC2728'><span class="sd">   * @return string</span></div><div class='line' id='LC2729'><span class="sd">   */</span></div><div class='line' id='LC2730'>&nbsp;&nbsp;<span class="k">public</span> <span class="k">function</span> <span class="nf">SecureHeader</span><span class="p">(</span><span class="nv">$str</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC2731'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">return</span> <span class="nx">trim</span><span class="p">(</span><span class="nb">str_replace</span><span class="p">(</span><span class="k">array</span><span class="p">(</span><span class="s2">&quot;</span><span class="se">\r</span><span class="s2">&quot;</span><span class="p">,</span> <span class="s2">&quot;</span><span class="se">\n</span><span class="s2">&quot;</span><span class="p">),</span> <span class="s1">&#39;&#39;</span><span class="p">,</span> <span class="nv">$str</span><span class="p">));</span></div><div class='line' id='LC2732'>&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC2733'><br/></div><div class='line' id='LC2734'>&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC2735'><span class="sd">   * Normalize UNIX LF, Mac CR and Windows CRLF line breaks into a single line break format</span></div><div class='line' id='LC2736'><span class="sd">   * Defaults to CRLF (for message bodies) and preserves consecutive breaks</span></div><div class='line' id='LC2737'><span class="sd">   * @param string $text</span></div><div class='line' id='LC2738'><span class="sd">   * @param string $breaktype What kind of line break to use, defaults to CRLF</span></div><div class='line' id='LC2739'><span class="sd">   * @return string</span></div><div class='line' id='LC2740'><span class="sd">   * @access public</span></div><div class='line' id='LC2741'><span class="sd">   * @static</span></div><div class='line' id='LC2742'><span class="sd">   */</span></div><div class='line' id='LC2743'>&nbsp;&nbsp;<span class="k">public</span> <span class="k">static</span> <span class="k">function</span> <span class="nf">NormalizeBreaks</span><span class="p">(</span><span class="nv">$text</span><span class="p">,</span> <span class="nv">$breaktype</span> <span class="o">=</span> <span class="s2">&quot;</span><span class="se">\r\n</span><span class="s2">&quot;</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC2744'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">return</span> <span class="nb">preg_replace</span><span class="p">(</span><span class="s1">&#39;/(\r\n|\r|\n)/ms&#39;</span><span class="p">,</span> <span class="nv">$breaktype</span><span class="p">,</span> <span class="nv">$text</span><span class="p">);</span></div><div class='line' id='LC2745'>&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC2746'><br/></div><div class='line' id='LC2747'><br/></div><div class='line' id='LC2748'>	<span class="sd">/**</span></div><div class='line' id='LC2749'><span class="sd">   * Set the private key file and password to sign the message.</span></div><div class='line' id='LC2750'><span class="sd">   *</span></div><div class='line' id='LC2751'><span class="sd">   * @access public</span></div><div class='line' id='LC2752'><span class="sd">   * @param string $cert_filename</span></div><div class='line' id='LC2753'><span class="sd">   * @param string $key_filename</span></div><div class='line' id='LC2754'><span class="sd">   * @param string $key_pass Password for private key</span></div><div class='line' id='LC2755'><span class="sd">   */</span></div><div class='line' id='LC2756'>&nbsp;&nbsp;<span class="k">public</span> <span class="k">function</span> <span class="nf">Sign</span><span class="p">(</span><span class="nv">$cert_filename</span><span class="p">,</span> <span class="nv">$key_filename</span><span class="p">,</span> <span class="nv">$key_pass</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC2757'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">sign_cert_file</span> <span class="o">=</span> <span class="nv">$cert_filename</span><span class="p">;</span></div><div class='line' id='LC2758'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">sign_key_file</span> <span class="o">=</span> <span class="nv">$key_filename</span><span class="p">;</span></div><div class='line' id='LC2759'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">sign_key_pass</span> <span class="o">=</span> <span class="nv">$key_pass</span><span class="p">;</span></div><div class='line' id='LC2760'>&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC2761'><br/></div><div class='line' id='LC2762'>&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC2763'><span class="sd">   * Set the private key file and password to sign the message.</span></div><div class='line' id='LC2764'><span class="sd">   *</span></div><div class='line' id='LC2765'><span class="sd">   * @access public</span></div><div class='line' id='LC2766'><span class="sd">   * @param string $txt</span></div><div class='line' id='LC2767'><span class="sd">   * @return string</span></div><div class='line' id='LC2768'><span class="sd">   */</span></div><div class='line' id='LC2769'>&nbsp;&nbsp;<span class="k">public</span> <span class="k">function</span> <span class="nf">DKIM_QP</span><span class="p">(</span><span class="nv">$txt</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC2770'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$line</span> <span class="o">=</span> <span class="s1">&#39;&#39;</span><span class="p">;</span></div><div class='line' id='LC2771'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">for</span> <span class="p">(</span><span class="nv">$i</span> <span class="o">=</span> <span class="mi">0</span><span class="p">;</span> <span class="nv">$i</span> <span class="o">&lt;</span> <span class="nb">strlen</span><span class="p">(</span><span class="nv">$txt</span><span class="p">);</span> <span class="nv">$i</span><span class="o">++</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC2772'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$ord</span> <span class="o">=</span> <span class="nb">ord</span><span class="p">(</span><span class="nv">$txt</span><span class="p">[</span><span class="nv">$i</span><span class="p">]);</span></div><div class='line' id='LC2773'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span> <span class="p">(</span> <span class="p">((</span><span class="mh">0x21</span> <span class="o">&lt;=</span> <span class="nv">$ord</span><span class="p">)</span> <span class="o">&amp;&amp;</span> <span class="p">(</span><span class="nv">$ord</span> <span class="o">&lt;=</span> <span class="mh">0x3A</span><span class="p">))</span> <span class="o">||</span> <span class="nv">$ord</span> <span class="o">==</span> <span class="mh">0x3C</span> <span class="o">||</span> <span class="p">((</span><span class="mh">0x3E</span> <span class="o">&lt;=</span> <span class="nv">$ord</span><span class="p">)</span> <span class="o">&amp;&amp;</span> <span class="p">(</span><span class="nv">$ord</span> <span class="o">&lt;=</span> <span class="mh">0x7E</span><span class="p">))</span> <span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC2774'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$line</span> <span class="o">.=</span> <span class="nv">$txt</span><span class="p">[</span><span class="nv">$i</span><span class="p">];</span></div><div class='line' id='LC2775'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span> <span class="k">else</span> <span class="p">{</span></div><div class='line' id='LC2776'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$line</span> <span class="o">.=</span> <span class="s2">&quot;=&quot;</span><span class="o">.</span><span class="nb">sprintf</span><span class="p">(</span><span class="s2">&quot;%02X&quot;</span><span class="p">,</span> <span class="nv">$ord</span><span class="p">);</span></div><div class='line' id='LC2777'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC2778'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC2779'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">return</span> <span class="nv">$line</span><span class="p">;</span></div><div class='line' id='LC2780'>&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC2781'><br/></div><div class='line' id='LC2782'>&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC2783'><span class="sd">   * Generate DKIM signature</span></div><div class='line' id='LC2784'><span class="sd">   *</span></div><div class='line' id='LC2785'><span class="sd">   * @access public</span></div><div class='line' id='LC2786'><span class="sd">   * @param string $s Header</span></div><div class='line' id='LC2787'><span class="sd">   * @throws phpmailerException</span></div><div class='line' id='LC2788'><span class="sd">   * @return string</span></div><div class='line' id='LC2789'><span class="sd">   */</span></div><div class='line' id='LC2790'>&nbsp;&nbsp;<span class="k">public</span> <span class="k">function</span> <span class="nf">DKIM_Sign</span><span class="p">(</span><span class="nv">$s</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC2791'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span> <span class="p">(</span><span class="o">!</span><span class="nb">defined</span><span class="p">(</span><span class="s1">&#39;PKCS7_TEXT&#39;</span><span class="p">))</span> <span class="p">{</span></div><div class='line' id='LC2792'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span> <span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">exceptions</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC2793'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">throw</span> <span class="k">new</span> <span class="nx">phpmailerException</span><span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">Lang</span><span class="p">(</span><span class="s2">&quot;signing&quot;</span><span class="p">)</span><span class="o">.</span><span class="s1">&#39; OpenSSL extension missing.&#39;</span><span class="p">);</span></div><div class='line' id='LC2794'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC2795'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">return</span> <span class="s1">&#39;&#39;</span><span class="p">;</span></div><div class='line' id='LC2796'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC2797'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$privKeyStr</span> <span class="o">=</span> <span class="nb">file_get_contents</span><span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">DKIM_private</span><span class="p">);</span></div><div class='line' id='LC2798'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span> <span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">DKIM_passphrase</span> <span class="o">!=</span> <span class="s1">&#39;&#39;</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC2799'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$privKey</span> <span class="o">=</span> <span class="nb">openssl_pkey_get_private</span><span class="p">(</span><span class="nv">$privKeyStr</span><span class="p">,</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">DKIM_passphrase</span><span class="p">);</span></div><div class='line' id='LC2800'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span> <span class="k">else</span> <span class="p">{</span></div><div class='line' id='LC2801'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$privKey</span> <span class="o">=</span> <span class="nv">$privKeyStr</span><span class="p">;</span></div><div class='line' id='LC2802'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC2803'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span> <span class="p">(</span><span class="nb">openssl_sign</span><span class="p">(</span><span class="nv">$s</span><span class="p">,</span> <span class="nv">$signature</span><span class="p">,</span> <span class="nv">$privKey</span><span class="p">))</span> <span class="p">{</span></div><div class='line' id='LC2804'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">return</span> <span class="nb">base64_encode</span><span class="p">(</span><span class="nv">$signature</span><span class="p">);</span></div><div class='line' id='LC2805'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC2806'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">return</span> <span class="s1">&#39;&#39;</span><span class="p">;</span></div><div class='line' id='LC2807'>&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC2808'><br/></div><div class='line' id='LC2809'>&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC2810'><span class="sd">   * Generate DKIM Canonicalization Header</span></div><div class='line' id='LC2811'><span class="sd">   *</span></div><div class='line' id='LC2812'><span class="sd">   * @access public</span></div><div class='line' id='LC2813'><span class="sd">   * @param string $s Header</span></div><div class='line' id='LC2814'><span class="sd">   * @return string</span></div><div class='line' id='LC2815'><span class="sd">   */</span></div><div class='line' id='LC2816'>&nbsp;&nbsp;<span class="k">public</span> <span class="k">function</span> <span class="nf">DKIM_HeaderC</span><span class="p">(</span><span class="nv">$s</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC2817'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$s</span> <span class="o">=</span> <span class="nb">preg_replace</span><span class="p">(</span><span class="s2">&quot;/</span><span class="se">\r\n</span><span class="s2">\s+/&quot;</span><span class="p">,</span> <span class="s2">&quot; &quot;</span><span class="p">,</span> <span class="nv">$s</span><span class="p">);</span></div><div class='line' id='LC2818'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$lines</span> <span class="o">=</span> <span class="nb">explode</span><span class="p">(</span><span class="s2">&quot;</span><span class="se">\r\n</span><span class="s2">&quot;</span><span class="p">,</span> <span class="nv">$s</span><span class="p">);</span></div><div class='line' id='LC2819'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">foreach</span> <span class="p">(</span><span class="nv">$lines</span> <span class="k">as</span> <span class="nv">$key</span> <span class="o">=&gt;</span> <span class="nv">$line</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC2820'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">list</span><span class="p">(</span><span class="nv">$heading</span><span class="p">,</span> <span class="nv">$value</span><span class="p">)</span> <span class="o">=</span> <span class="nb">explode</span><span class="p">(</span><span class="s2">&quot;:&quot;</span><span class="p">,</span> <span class="nv">$line</span><span class="p">,</span> <span class="mi">2</span><span class="p">);</span></div><div class='line' id='LC2821'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$heading</span> <span class="o">=</span> <span class="nx">strtolower</span><span class="p">(</span><span class="nv">$heading</span><span class="p">);</span></div><div class='line' id='LC2822'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$value</span> <span class="o">=</span> <span class="nb">preg_replace</span><span class="p">(</span><span class="s2">&quot;/\s+/&quot;</span><span class="p">,</span> <span class="s2">&quot; &quot;</span><span class="p">,</span> <span class="nv">$value</span><span class="p">)</span> <span class="p">;</span> <span class="c1">// Compress useless spaces</span></div><div class='line' id='LC2823'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$lines</span><span class="p">[</span><span class="nv">$key</span><span class="p">]</span> <span class="o">=</span> <span class="nv">$heading</span><span class="o">.</span><span class="s2">&quot;:&quot;</span><span class="o">.</span><span class="nx">trim</span><span class="p">(</span><span class="nv">$value</span><span class="p">)</span> <span class="p">;</span> <span class="c1">// Don&#39;t forget to remove WSP around the value</span></div><div class='line' id='LC2824'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC2825'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$s</span> <span class="o">=</span> <span class="nb">implode</span><span class="p">(</span><span class="s2">&quot;</span><span class="se">\r\n</span><span class="s2">&quot;</span><span class="p">,</span> <span class="nv">$lines</span><span class="p">);</span></div><div class='line' id='LC2826'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">return</span> <span class="nv">$s</span><span class="p">;</span></div><div class='line' id='LC2827'>&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC2828'><br/></div><div class='line' id='LC2829'>&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC2830'><span class="sd">   * Generate DKIM Canonicalization Body</span></div><div class='line' id='LC2831'><span class="sd">   *</span></div><div class='line' id='LC2832'><span class="sd">   * @access public</span></div><div class='line' id='LC2833'><span class="sd">   * @param string $body Message Body</span></div><div class='line' id='LC2834'><span class="sd">   * @return string</span></div><div class='line' id='LC2835'><span class="sd">   */</span></div><div class='line' id='LC2836'>&nbsp;&nbsp;<span class="k">public</span> <span class="k">function</span> <span class="nf">DKIM_BodyC</span><span class="p">(</span><span class="nv">$body</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC2837'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span> <span class="p">(</span><span class="nv">$body</span> <span class="o">==</span> <span class="s1">&#39;&#39;</span><span class="p">)</span> <span class="k">return</span> <span class="s2">&quot;</span><span class="se">\r\n</span><span class="s2">&quot;</span><span class="p">;</span></div><div class='line' id='LC2838'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// stabilize line endings</span></div><div class='line' id='LC2839'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$body</span> <span class="o">=</span> <span class="nb">str_replace</span><span class="p">(</span><span class="s2">&quot;</span><span class="se">\r\n</span><span class="s2">&quot;</span><span class="p">,</span> <span class="s2">&quot;</span><span class="se">\n</span><span class="s2">&quot;</span><span class="p">,</span> <span class="nv">$body</span><span class="p">);</span></div><div class='line' id='LC2840'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$body</span> <span class="o">=</span> <span class="nb">str_replace</span><span class="p">(</span><span class="s2">&quot;</span><span class="se">\n</span><span class="s2">&quot;</span><span class="p">,</span> <span class="s2">&quot;</span><span class="se">\r\n</span><span class="s2">&quot;</span><span class="p">,</span> <span class="nv">$body</span><span class="p">);</span></div><div class='line' id='LC2841'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// END stabilize line endings</span></div><div class='line' id='LC2842'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">while</span> <span class="p">(</span><span class="nx">substr</span><span class="p">(</span><span class="nv">$body</span><span class="p">,</span> <span class="nb">strlen</span><span class="p">(</span><span class="nv">$body</span><span class="p">)</span> <span class="o">-</span> <span class="mi">4</span><span class="p">,</span> <span class="mi">4</span><span class="p">)</span> <span class="o">==</span> <span class="s2">&quot;</span><span class="se">\r\n\r\n</span><span class="s2">&quot;</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC2843'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$body</span> <span class="o">=</span> <span class="nx">substr</span><span class="p">(</span><span class="nv">$body</span><span class="p">,</span> <span class="mi">0</span><span class="p">,</span> <span class="nb">strlen</span><span class="p">(</span><span class="nv">$body</span><span class="p">)</span> <span class="o">-</span> <span class="mi">2</span><span class="p">);</span></div><div class='line' id='LC2844'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC2845'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">return</span> <span class="nv">$body</span><span class="p">;</span></div><div class='line' id='LC2846'>&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC2847'><br/></div><div class='line' id='LC2848'>&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC2849'><span class="sd">   * Create the DKIM header, body, as new header</span></div><div class='line' id='LC2850'><span class="sd">   *</span></div><div class='line' id='LC2851'><span class="sd">   * @access public</span></div><div class='line' id='LC2852'><span class="sd">   * @param string $headers_line Header lines</span></div><div class='line' id='LC2853'><span class="sd">   * @param string $subject Subject</span></div><div class='line' id='LC2854'><span class="sd">   * @param string $body Body</span></div><div class='line' id='LC2855'><span class="sd">   * @return string</span></div><div class='line' id='LC2856'><span class="sd">   */</span></div><div class='line' id='LC2857'>&nbsp;&nbsp;<span class="k">public</span> <span class="k">function</span> <span class="nf">DKIM_Add</span><span class="p">(</span><span class="nv">$headers_line</span><span class="p">,</span> <span class="nv">$subject</span><span class="p">,</span> <span class="nv">$body</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC2858'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$DKIMsignatureType</span>    <span class="o">=</span> <span class="s1">&#39;rsa-sha1&#39;</span><span class="p">;</span> <span class="c1">// Signature &amp; hash algorithms</span></div><div class='line' id='LC2859'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$DKIMcanonicalization</span> <span class="o">=</span> <span class="s1">&#39;relaxed/simple&#39;</span><span class="p">;</span> <span class="c1">// Canonicalization of header/body</span></div><div class='line' id='LC2860'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$DKIMquery</span>            <span class="o">=</span> <span class="s1">&#39;dns/txt&#39;</span><span class="p">;</span> <span class="c1">// Query method</span></div><div class='line' id='LC2861'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$DKIMtime</span>             <span class="o">=</span> <span class="nb">time</span><span class="p">()</span> <span class="p">;</span> <span class="c1">// Signature Timestamp = seconds since 00:00:00 - Jan 1, 1970 (UTC time zone)</span></div><div class='line' id='LC2862'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$subject_header</span>       <span class="o">=</span> <span class="s2">&quot;Subject: </span><span class="si">$subject</span><span class="s2">&quot;</span><span class="p">;</span></div><div class='line' id='LC2863'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$headers</span>              <span class="o">=</span> <span class="nb">explode</span><span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">LE</span><span class="p">,</span> <span class="nv">$headers_line</span><span class="p">);</span></div><div class='line' id='LC2864'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$from_header</span>          <span class="o">=</span> <span class="s1">&#39;&#39;</span><span class="p">;</span></div><div class='line' id='LC2865'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$to_header</span>            <span class="o">=</span> <span class="s1">&#39;&#39;</span><span class="p">;</span></div><div class='line' id='LC2866'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$current</span> <span class="o">=</span> <span class="s1">&#39;&#39;</span><span class="p">;</span></div><div class='line' id='LC2867'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">foreach</span><span class="p">(</span><span class="nv">$headers</span> <span class="k">as</span> <span class="nv">$header</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC2868'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span> <span class="p">(</span><span class="nb">strpos</span><span class="p">(</span><span class="nv">$header</span><span class="p">,</span> <span class="s1">&#39;From:&#39;</span><span class="p">)</span> <span class="o">===</span> <span class="mi">0</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC2869'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$from_header</span> <span class="o">=</span> <span class="nv">$header</span><span class="p">;</span></div><div class='line' id='LC2870'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$current</span> <span class="o">=</span> <span class="s1">&#39;from_header&#39;</span><span class="p">;</span></div><div class='line' id='LC2871'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span> <span class="k">elseif</span> <span class="p">(</span><span class="nb">strpos</span><span class="p">(</span><span class="nv">$header</span><span class="p">,</span> <span class="s1">&#39;To:&#39;</span><span class="p">)</span> <span class="o">===</span> <span class="mi">0</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC2872'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$to_header</span> <span class="o">=</span> <span class="nv">$header</span><span class="p">;</span></div><div class='line' id='LC2873'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$current</span> <span class="o">=</span> <span class="s1">&#39;to_header&#39;</span><span class="p">;</span></div><div class='line' id='LC2874'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span> <span class="k">else</span> <span class="p">{</span></div><div class='line' id='LC2875'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span><span class="p">(</span><span class="nv">$current</span> <span class="o">&amp;&amp;</span> <span class="nb">strpos</span><span class="p">(</span><span class="nv">$header</span><span class="p">,</span> <span class="s1">&#39; =?&#39;</span><span class="p">)</span> <span class="o">===</span> <span class="mi">0</span><span class="p">){</span></div><div class='line' id='LC2876'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$$current</span> <span class="o">.=</span> <span class="nv">$header</span><span class="p">;</span></div><div class='line' id='LC2877'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span> <span class="k">else</span> <span class="p">{</span></div><div class='line' id='LC2878'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$current</span> <span class="o">=</span> <span class="s1">&#39;&#39;</span><span class="p">;</span></div><div class='line' id='LC2879'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC2880'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC2881'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC2882'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$from</span>     <span class="o">=</span> <span class="nb">str_replace</span><span class="p">(</span><span class="s1">&#39;|&#39;</span><span class="p">,</span> <span class="s1">&#39;=7C&#39;</span><span class="p">,</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">DKIM_QP</span><span class="p">(</span><span class="nv">$from_header</span><span class="p">));</span></div><div class='line' id='LC2883'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$to</span>       <span class="o">=</span> <span class="nb">str_replace</span><span class="p">(</span><span class="s1">&#39;|&#39;</span><span class="p">,</span> <span class="s1">&#39;=7C&#39;</span><span class="p">,</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">DKIM_QP</span><span class="p">(</span><span class="nv">$to_header</span><span class="p">));</span></div><div class='line' id='LC2884'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$subject</span>  <span class="o">=</span> <span class="nb">str_replace</span><span class="p">(</span><span class="s1">&#39;|&#39;</span><span class="p">,</span> <span class="s1">&#39;=7C&#39;</span><span class="p">,</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">DKIM_QP</span><span class="p">(</span><span class="nv">$subject_header</span><span class="p">))</span> <span class="p">;</span> <span class="c1">// Copied header fields (dkim-quoted-printable</span></div><div class='line' id='LC2885'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$body</span>     <span class="o">=</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">DKIM_BodyC</span><span class="p">(</span><span class="nv">$body</span><span class="p">);</span></div><div class='line' id='LC2886'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$DKIMlen</span>  <span class="o">=</span> <span class="nb">strlen</span><span class="p">(</span><span class="nv">$body</span><span class="p">)</span> <span class="p">;</span> <span class="c1">// Length of body</span></div><div class='line' id='LC2887'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$DKIMb64</span>  <span class="o">=</span> <span class="nb">base64_encode</span><span class="p">(</span><span class="nb">pack</span><span class="p">(</span><span class="s2">&quot;H*&quot;</span><span class="p">,</span> <span class="nb">sha1</span><span class="p">(</span><span class="nv">$body</span><span class="p">)))</span> <span class="p">;</span> <span class="c1">// Base64 of packed binary SHA-1 hash of body</span></div><div class='line' id='LC2888'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$ident</span>    <span class="o">=</span> <span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">DKIM_identity</span> <span class="o">==</span> <span class="s1">&#39;&#39;</span><span class="p">)</span><span class="o">?</span> <span class="s1">&#39;&#39;</span> <span class="o">:</span> <span class="s2">&quot; i=&quot;</span> <span class="o">.</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">DKIM_identity</span> <span class="o">.</span> <span class="s2">&quot;;&quot;</span><span class="p">;</span></div><div class='line' id='LC2889'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$dkimhdrs</span> <span class="o">=</span> <span class="s2">&quot;DKIM-Signature: v=1; a=&quot;</span> <span class="o">.</span> <span class="nv">$DKIMsignatureType</span> <span class="o">.</span> <span class="s2">&quot;; q=&quot;</span> <span class="o">.</span> <span class="nv">$DKIMquery</span> <span class="o">.</span> <span class="s2">&quot;; l=&quot;</span> <span class="o">.</span> <span class="nv">$DKIMlen</span> <span class="o">.</span> <span class="s2">&quot;; s=&quot;</span> <span class="o">.</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">DKIM_selector</span> <span class="o">.</span> <span class="s2">&quot;;</span><span class="se">\r\n</span><span class="s2">&quot;</span><span class="o">.</span></div><div class='line' id='LC2890'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="s2">&quot;</span><span class="se">\t</span><span class="s2">t=&quot;</span> <span class="o">.</span> <span class="nv">$DKIMtime</span> <span class="o">.</span> <span class="s2">&quot;; c=&quot;</span> <span class="o">.</span> <span class="nv">$DKIMcanonicalization</span> <span class="o">.</span> <span class="s2">&quot;;</span><span class="se">\r\n</span><span class="s2">&quot;</span><span class="o">.</span></div><div class='line' id='LC2891'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="s2">&quot;</span><span class="se">\t</span><span class="s2">h=From:To:Subject;</span><span class="se">\r\n</span><span class="s2">&quot;</span><span class="o">.</span></div><div class='line' id='LC2892'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="s2">&quot;</span><span class="se">\t</span><span class="s2">d=&quot;</span> <span class="o">.</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">DKIM_domain</span> <span class="o">.</span> <span class="s2">&quot;;&quot;</span> <span class="o">.</span> <span class="nv">$ident</span> <span class="o">.</span> <span class="s2">&quot;</span><span class="se">\r\n</span><span class="s2">&quot;</span><span class="o">.</span></div><div class='line' id='LC2893'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="s2">&quot;</span><span class="se">\t</span><span class="s2">z=</span><span class="si">$from</span><span class="se">\r\n</span><span class="s2">&quot;</span><span class="o">.</span></div><div class='line' id='LC2894'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="s2">&quot;</span><span class="se">\t</span><span class="s2">|</span><span class="si">$to</span><span class="se">\r\n</span><span class="s2">&quot;</span><span class="o">.</span></div><div class='line' id='LC2895'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="s2">&quot;</span><span class="se">\t</span><span class="s2">|</span><span class="si">$subject</span><span class="s2">;</span><span class="se">\r\n</span><span class="s2">&quot;</span><span class="o">.</span></div><div class='line' id='LC2896'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="s2">&quot;</span><span class="se">\t</span><span class="s2">bh=&quot;</span> <span class="o">.</span> <span class="nv">$DKIMb64</span> <span class="o">.</span> <span class="s2">&quot;;</span><span class="se">\r\n</span><span class="s2">&quot;</span><span class="o">.</span></div><div class='line' id='LC2897'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="s2">&quot;</span><span class="se">\t</span><span class="s2">b=&quot;</span><span class="p">;</span></div><div class='line' id='LC2898'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$toSign</span>   <span class="o">=</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">DKIM_HeaderC</span><span class="p">(</span><span class="nv">$from_header</span> <span class="o">.</span> <span class="s2">&quot;</span><span class="se">\r\n</span><span class="s2">&quot;</span> <span class="o">.</span> <span class="nv">$to_header</span> <span class="o">.</span> <span class="s2">&quot;</span><span class="se">\r\n</span><span class="s2">&quot;</span> <span class="o">.</span> <span class="nv">$subject_header</span> <span class="o">.</span> <span class="s2">&quot;</span><span class="se">\r\n</span><span class="s2">&quot;</span> <span class="o">.</span> <span class="nv">$dkimhdrs</span><span class="p">);</span></div><div class='line' id='LC2899'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$signed</span>   <span class="o">=</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">DKIM_Sign</span><span class="p">(</span><span class="nv">$toSign</span><span class="p">);</span></div><div class='line' id='LC2900'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">return</span> <span class="nv">$dkimhdrs</span><span class="o">.</span><span class="nv">$signed</span><span class="o">.</span><span class="s2">&quot;</span><span class="se">\r\n</span><span class="s2">&quot;</span><span class="p">;</span></div><div class='line' id='LC2901'>&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC2902'><br/></div><div class='line' id='LC2903'>&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC2904'><span class="sd">   * Perform callback</span></div><div class='line' id='LC2905'><span class="sd">   * @param boolean $isSent</span></div><div class='line' id='LC2906'><span class="sd">   * @param string $to</span></div><div class='line' id='LC2907'><span class="sd">   * @param string $cc</span></div><div class='line' id='LC2908'><span class="sd">   * @param string $bcc</span></div><div class='line' id='LC2909'><span class="sd">   * @param string $subject</span></div><div class='line' id='LC2910'><span class="sd">   * @param string $body</span></div><div class='line' id='LC2911'><span class="sd">   * @param string $from</span></div><div class='line' id='LC2912'><span class="sd">   */</span></div><div class='line' id='LC2913'>&nbsp;&nbsp;<span class="k">protected</span> <span class="k">function</span> <span class="nf">doCallback</span><span class="p">(</span><span class="nv">$isSent</span><span class="p">,</span> <span class="nv">$to</span><span class="p">,</span> <span class="nv">$cc</span><span class="p">,</span> <span class="nv">$bcc</span><span class="p">,</span> <span class="nv">$subject</span><span class="p">,</span> <span class="nv">$body</span><span class="p">,</span> <span class="nv">$from</span> <span class="o">=</span> <span class="k">null</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC2914'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span> <span class="p">(</span><span class="o">!</span><span class="k">empty</span><span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">action_function</span><span class="p">)</span> <span class="o">&amp;&amp;</span> <span class="nb">is_callable</span><span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">action_function</span><span class="p">))</span> <span class="p">{</span></div><div class='line' id='LC2915'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$params</span> <span class="o">=</span> <span class="k">array</span><span class="p">(</span><span class="nv">$isSent</span><span class="p">,</span> <span class="nv">$to</span><span class="p">,</span> <span class="nv">$cc</span><span class="p">,</span> <span class="nv">$bcc</span><span class="p">,</span> <span class="nv">$subject</span><span class="p">,</span> <span class="nv">$body</span><span class="p">,</span> <span class="nv">$from</span><span class="p">);</span></div><div class='line' id='LC2916'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nb">call_user_func_array</span><span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">action_function</span><span class="p">,</span> <span class="nv">$params</span><span class="p">);</span></div><div class='line' id='LC2917'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC2918'>&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC2919'><span class="p">}</span></div><div class='line' id='LC2920'><br/></div><div class='line' id='LC2921'><span class="sd">/**</span></div><div class='line' id='LC2922'><span class="sd"> * Exception handler for PHPMailer</span></div><div class='line' id='LC2923'><span class="sd"> * @package PHPMailer</span></div><div class='line' id='LC2924'><span class="sd"> */</span></div><div class='line' id='LC2925'><span class="k">class</span> <span class="nc">phpmailerException</span> <span class="k">extends</span> <span class="nx">Exception</span> <span class="p">{</span></div><div class='line' id='LC2926'>&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC2927'><span class="sd">   * Prettify error message output</span></div><div class='line' id='LC2928'><span class="sd">   * @return string</span></div><div class='line' id='LC2929'><span class="sd">   */</span></div><div class='line' id='LC2930'>&nbsp;&nbsp;<span class="k">public</span> <span class="k">function</span> <span class="nf">errorMessage</span><span class="p">()</span> <span class="p">{</span></div><div class='line' id='LC2931'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$errorMsg</span> <span class="o">=</span> <span class="s1">&#39;&lt;strong&gt;&#39;</span> <span class="o">.</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">getMessage</span><span class="p">()</span> <span class="o">.</span> <span class="s2">&quot;&lt;/strong&gt;&lt;br /&gt;</span><span class="se">\n</span><span class="s2">&quot;</span><span class="p">;</span></div><div class='line' id='LC2932'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">return</span> <span class="nv">$errorMsg</span><span class="p">;</span></div><div class='line' id='LC2933'>&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC2934'><span class="p">}</span></div></pre></div>
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


    <p class="right">&copy; 2013 <span title="0.07814s from fe4.rs.github.com">GitHub</span>, Inc. All rights reserved.</p>
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

    
    <span id='server_response_time' data-time='0.07852' data-host='fe4'></span>
    
  </body>
</html>

