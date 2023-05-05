<style>

* {
    margin: 0;
    padding: 0;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
 }

 a {
    color: #03658c;
    text-decoration: none;
 }
.comment-content a:hover {
     color:#BF12B5;
}
ul {
    list-style-type: none;
}

.strt {
    font-family: 'Roboto', Arial, Helvetica, Sans-serif, Verdana;
}

.comments-list {
    margin-top: 30px;
    margin:2px;
    position: relative;
}


.comments-list li {
    margin-bottom: 15px;
    display: block;
    position: relative;
}

.comments-list li:after {
    content: '';
    display: block;
    clear: both;
    height: 0;
    width: 0;
}

.reply-list {
    padding-left: 88px;
    clear: both;
    margin-top: 15px;
    
}

.reply {min-height: 15px;float:right;}
.comment-content .reply a {
	text-decoration: none;
	position: absolute; 
	bottom: 0px; right: 0px; 
	background:#009CFF;
	padding: 3px 10px; 
	font-size: 14px; 
	color: white;
        float:right; padding:5px;
        font-family:Asap;
     border: 3px solid #FFF;
    -webkit-border-radius: 4px;
    -moz-border-radius: 4px;
    border-radius: 4px;
    -webkit-box-shadow: 0 1px 2px rgba(0,0,0,0.2);
    -moz-box-shadow: 0 1px 2px rgba(0,0,0,0.2);
    box-shadow: 0 1px 2px rgba(0,0,0,0.2);
}
.comment-content .reply a:hover {
	text-decoration: none;
	position: absolute; 
	bottom: 0px; right: 0px; 
	background:red;
	padding: 3px 10px; 
	font-size: 14px; 
	color: white;
        float:right; padding:5px;
        font-family:Asap;
     border: 3px solid #FFF;
    -webkit-border-radius: 4px;
    -moz-border-radius: 4px;
    border-radius: 4px;
    -webkit-box-shadow: 0 1px 2px rgba(0,0,0,0.2);
    -moz-box-shadow: 0 1px 2px rgba(0,0,0,0.2);
    box-shadow: 0 1px 2px rgba(0,0,0,0.2);
}



/**
 * Avatar
 ---------------------------*/
.comments-list .comment-avatar {
    width: 50px;
    height: 50px;
    position: relative;
    z-index: 99;
    float: left;
    border: 3px solid #FFF;
    -webkit-border-radius: 4px;
    -moz-border-radius: 4px;
    border-radius: 4px;
    -webkit-box-shadow: 0 1px 2px rgba(0,0,0,0.2);
    -moz-box-shadow: 0 1px 2px rgba(0,0,0,0.2);
    box-shadow: 0 1px 2px rgba(0,0,0,0.2);
    overflow: hidden;
}

.comments-list .comment-avatar img {
    width: 100%;
    height: 100%;
}


.comment-main-level:after {
    content: '';
    width: 0;
    height: 0;
    display: block;
    clear: both;
}
/**
 * Caja del Comentario
 ---------------------------*/
.comments-list .comment-box {
    -webkit-box-shadow: 0 1px 1px rgba(0,0,0,0.15);
    -moz-box-shadow: 0 1px 1px rgba(0,0,0,0.15);
    box-shadow: 0 1px 1px rgba(0,0,0,0.15);
}



.comments-list .comment-box:before {
    border-width: 11px 13px 11px 0;
    border-color: transparent rgba(0,0,0,0.05);
    left: -12px;
}

.comment-box .comment-head {
    background: #FCFCFC;
    padding: 12px 14px;
    border-bottom: 1px solid #E5E5E5;
    overflow: hidden;
    -webkit-border-radius: 4px 4px 0 0;
    -moz-border-radius: 4px 4px 0 0;
    border-radius: 4px 4px 0 0;
}

.comment-box .comment-head i {
    float: right;
    margin-left: 14px;
    position: relative;
    top: 2px;
    color: #A6A6A6;
    cursor: pointer;
    -webkit-transition: color 0.3s ease;
    -o-transition: color 0.3s ease;
    transition: color 0.3s ease;
}

.comment-box .comment-head i:hover {
    color: #03658c;
}

.comment-box .comment-name {
    color: #283035;
    font-size: 14px;
    font-weight: 700;
    float: left;
    margin-right: 10px;
}

.comment-box .comment-name a {
    color: #283035;
}

.comment-box .comment-head span {
    float: left;
    color: #999;
    font-size: 13px;
    position: relative;
    top: 1px;
}

.comment-box .comment-content {
    font-family:Asap;
    font-size:9px;
    background: #FFF;
    padding: 12px;
    font-size: 15px;
    color: #595959;
    -webkit-border-radius: 0 0 4px 4px;
    -moz-border-radius: 0 0 4px 4px;
    border-radius: 0 0 4px 4px;
}

.comment-box .comment-name.by-author, .comment-box .comment-name.by-author a {color: #03658c;}
.comment-box .comment-name.by-author:after {
    background: #03658c;
    color: #FFF;
    font-size: 12px;
    padding: 3px 5px;
    font-weight: 200;
    margin-left: 10px;
    -webkit-border-radius: 3px;
    -moz-border-radius: 3px;
    border-radius: 3px;
}
.comment-content p {
  margin:8px;
}
</style>

<article class="short-story">
<div class="module form-module">
<?php global $user_ID, $user_identity; get_currentuserinfo(); if (!$user_ID) { ?>
<div class="toggle"><i class="fa fa-times fa-pencil"></i>
<div class="tooltip">Register</div>
</div>
<div class="form">
<h2>Login to your account</h2>
<?php $register = $_GET['register']; $reset = $_GET['reset']; if ($register == true) { ?>
<h3>Success!</h3>
<p>Check your email for the password and then return to log in.</p>
<?php } elseif ($reset == true) { ?>
<h3>Success!</h3>
<p>Check your email to reset your password.</p>
<?php } else { ?>
<?php } ?>

<form method="post" action="<?php bloginfo('url') ?>/wp-login.php" class="wp-user-form">
<label for="user_login"><?php _e('Username'); ?>: </label>
<input type="text" placeholder="Username" name="log" value="<?php echo esc_attr(stripslashes($user_login)); ?>"/>
<label for="user_pass"><?php _e('Password'); ?>: </label>
<input type="password" placeholder="Password" name="pwd" value=""/>
<?php do_action('login_form'); ?>
<button><?php _e('Login'); ?></button>
<input type="hidden" name="redirect_to" value="<?php echo $_SERVER['REQUEST_URI']; ?>" />
</form>
</div>

<div class="form">
<h2>Create an account</h2>
<form method="post" action="<?php echo site_url('wp-login.php?action=register', 'login_post') ?>" class="wp-user-form">
<label for="user_login"><?php _e('Username'); ?>: </label>
<input type="text" placeholder="Username" name="user_login" value="<?php echo esc_attr(stripslashes($user_login)); ?>"/>
<label for="user_login"><?php _e('Password'); ?>: </label>
<input type="password" placeholder="Password"/>
<label for="user_email"><?php _e('Your Email'); ?>: </label>
<input type="email" placeholder="Email Address" name="user_email" value="<?php echo esc_attr(stripslashes($user_email)); ?>"/>
<?php do_action('register_form'); ?>
<button><?php _e('Sign up!'); ?></button>
<?php $register = $_GET['register']; if($register == true) { echo '<p>Check your email for the password!</p>'; } ?>
<input type="hidden" name="redirect_to" value="<?php echo $_SERVER['REQUEST_URI']; ?>?register=true" />
</form>
</div>
<div class="cta"><a href="http://howtrick.com">Forgot your password?</a></div>
</div>


<?php } else { // is logged in ?>


<ul id="comments-list" class="comments-list">
<li>
<div class="comment-box">             
<div class="comment-avatar">
<?php global $userdata; get_currentuserinfo(); echo get_avatar($userdata->ID, 60); ?>
</div>
<div class="comment-head">
<h6 class="comment-name by-author">
<?php echo $user_identity; ?>
</h6><h6 class="authorcss" style="margin-right:7px;">
<?php $aid = get_the_author_meta('ID'); 
echo get_user_role($aid); ?>
</h6>
</div>
</div>
<div class="comment-content">
<p><?php the_author_meta('description'); if(!get_the_author_meta('description')) _e('Please Provide About Of You From Your Profile!!'); ?></p>


<div class="reply"><a href="<?php echo wp_logout_url('index.php'); ?>">Log out</a></div>

</div>
</li>
</ul>

<?php } ?>
</article>