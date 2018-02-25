<div class="content-container no-padding mobile-header">
    <div class="heading-container" style="margin-bottom: 50px">
        <div class="container heading-standar">
            <div class="page-breadcrumb">
                <ul class="breadcrumb">
                    <li><span><a href="/" class="home"><span>Trang chủ</span></a></span></li>
                    <li><span><a href="tin-tuc.php" class="home"><span>Tin tức </span></a></span></li>
                    <li><span><?= $feed->title ?></span></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="main-content">
                    <article class="hentry">
                        <div class="hentry-wrap">
                            <div class="entry-header">
                                <h1 class="entry-title"><?= $feed->title ?></h1>
                            </div>
                            <div class="entry-content">
                                <div class="col-sm-12">
                                   <?= $feed->description ?>
                                </div>
                            </div>
                        </div>
                    </article>
                    <br />
                    <!-- <div id="comments">
                        <div class="title-sep-wrap commentst-title">
                            <h3 class="title-sep-text">2 Comments </h3>
                        </div>
                        <ol class="comment-list">
                            <li class="comment">
                                <div class="comment-wrap">
                                    <div class="comment-img">
                                        <img alt="" src="http://placehold.it/60x60" height="60" width="60"/>
                                    </div>
                                    <article class="comment-block">
                                        <header class="comment-header">
                                            <span class="comment-author">admin
                                                <span class="ispostauthor">Author </span>
                                            </span>
                                            <span class="pull-right">
                                                <a class="comment-reply" href="#">Reply</a>
                                            </span>
                                            <div class="comment-meta">
                                                <time datetime="2014-09-14T13:14:27+00:00">
                                                    September 14, 2014 at 1:14 pm
                                                </time>
                                            </div>
                                        </header>
                                        <div class="comment-content">
                                            Nam turpis purus, tristique quis magna ac, imperdiet semper eros. Vivamus rutrum sapien leo, at venenatis risus lacinia sed.
                                        </div>
                                    </article>
                                </div>
                                <ol class="children">
                                    <li class="comment">
                                        <div class="comment-wrap">
                                            <div class="comment-img">
                                                <img alt="" src="http://placehold.it/60x60" height="60" width="60"/>
                                            </div>
                                            <article class="comment-block">
                                                <header class="comment-header">
                                                    <span class="comment-author">admin
                                                        <span class="ispostauthor">Author </span>
                                                    </span>
                                                    <span class="pull-right">
                                                        <a class="comment-reply" href="#">Reply</a>
                                                    </span>
                                                    <div class="comment-meta">
                                                        <time datetime="2014-09-14T13:15:01+00:00">
                                                            September 14, 2014 at 1:15 pm
                                                        </time>
                                                    </div>
                                                </header>
                                                <div class="comment-content">
                                                    Nam turpis purus, tristique quis magna ac, imperdiet semper eros. Vivamus rutrum sapien leo, at venenatis risus lacinia sed.
                                                </div>
                                            </article>
                                        </div>
                                    </li> 
                                </ol> 
                            </li> 
                        </ol>
                        <div id="respond-wrap">
                            <div id="respond" class="comment-respond">
                                <h3 class="comment-reply-title">
                                    <span>Leave a reply</span>
                                </h3>
                                <form class="comment-form">
                                    <p class="comment-form-name">
                                        <label>Your name</label>
                                        <input class="form-control" name="name">
                                    </p>
                                    <p class="comment-form-comment">
                                        <label>Comment</label>
                                        <textarea class="form-control" name="comment" cols="45" rows="8" aria-required="true"></textarea>
                                    </p>
                                    <p>
                                        <input name="submit" class="btn btn-black" value="Post Comment" type="submit">
                                    </p>
                                </form>
                            </div> 
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
    </div>
</div>