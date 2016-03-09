@extends('web.frontend')

@section('content')
    <div class="content">
        <div class="box1">
            <h3><a href="single.html">Making it look like readable English. Many desktop packages and web page</a></h3>
            <span>By Kieth Deviec- 2 hours ago<span class="comments">8 Comments</span></span>
            <div class="blog-img">
                <div class="view-back">
                    <span class="views" title="views">(566)</span>
                    <span class="likes" title="likes">(124)</span>
                    <span class="link" title="link">(24)</span>
                    <a href="#"> </a>
                </div>
                <img src="{{url('frontend/web/images/blog-img.jpg')}}">
            </div>
            <div class="blog-data">
                <p>Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editorsLorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors  as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors.</p>
                <p>Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editorsLorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors  as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors.</p>
            </div>
            <div class="clear"></div>
        </div>
        <!----------------  Comment Area -------------------->
        <div class="comments-area">
            <h3><img src="{{url('frontend/web/images/r-blog.png')}}" title="comment">Leave a comment</h3>
            <form>
                <p>
                    <label>Name</label>
                    <span>*</span>
                    <input type="text" value="">
                </p>
                <p>
                    <label>Email</label>
                    <span>*</span>
                    <input type="text" value="">
                </p>
                <p>
                    <label>Website</label>
                    <input type="text" value="">
                </p>
                <p>
                    <label>Subject</label>
                    <span>*</span>
                    <textarea></textarea>
                </p>
                <p>
                    <input type="submit" value="Post">
                </p>
            </form>
        </div>

        <div class="box comment">
            <h2><span>(0)</span> Comment's</h2>
            <ul class="list">
                <li>
                    <div class="preview"><a href="#"><img src="http://lorempixel.com/50/50" alt=""></a></div>
                    <div class="data">
                        <div class="title">Jake Sully <a href="#"> June 20, 2013</a></div>
                        <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
                    </div>
                    <div class="clear"></div>
                </li>
                <li>
                    <div class="preview"><a href="#"><img src="http://lorempixel.com/50/50" alt=""></a></div>
                    <div class="data">
                        <div class="title">Jake Sully <a href="#"> June 20, 2013</a></div>
                        <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
                    </div>
                    <div class="clear"></div>
                </li>
                <li>
                    <div class="preview"><a href="#"><img src="http://lorempixel.com/50/50" alt=""></a></div>
                    <div class="data">
                        <div class="title">Jake Sully <a href="#"> June 20, 2013</a></div>
                        <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
                    </div>
                    <div class="clear"></div>
                </li>
                <li>
                    <div class="preview"><a href="#"><img src="http://lorempixel.com/50/50" alt=""></a></div>
                    <div class="data">
                        <div class="title">Jake Sully <a href="#"> June 20, 2013</a></div>
                        <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
                    </div>
                    <div class="clear"></div>
                </li>
                <li>
                    <div class="preview"><a href="#"><img src="http://lorempixel.com/50/50" alt=""></a></div>
                    <div class="data">
                        <div class="title">Jake Sully <a href="#"> June 20, 2013</a></div>
                        <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
                    </div>
                    <div class="clear"></div>
                </li>
            </ul>
            <div class="clear"></div>
        </div>

        <div id="respond">
            <h3 id="reply-title">Leave a Reply <small><a id="cancel-comment-reply-link" href="#" style="">Cancel reply</a></small></h3>
            <form id="commentform">
                <p class="comment-notes">Your email address will not be published. Required fields are marked &nbsp;<span class="required">*</span></p>
                <p class="comment-form-author"><label for="author">Name</label>
                    <span class="required">*</span>
                    <input id="author" name="author" type="text" value="" size="30" aria-required="true">
                </p>
                <p class="comment-form-email">
                    <label for="email">Email</label> <span class="required">*</span>
                    <input id="email" name="email" type="text" value="" size="30" aria-required="true">
                </p>
                <p class="comment-form-url">
                    <label for="url">Website</label>
                    <input id="url" name="url" type="text" value="http://w3layouts.com" size="30">
                </p>
                <p class="comment-form-comment">
                    <label for="comment">Comment</label>
                    <textarea id="comment" name="comment" cols="45" rows="8" aria-required="true"></textarea>
                </p>
                <p class="form-allowed-tags">You may use these <abbr title="HyperText Markup Language">HTML</abbr> tags and attributes:  <code>&lt;a href="" title=""&gt; &lt;abbr title=""&gt; &lt;acronym title=""&gt; &lt;b&gt; &lt;blockquote cite=""&gt; &lt;cite&gt; &lt;code&gt; &lt;del datetime=""&gt; &lt;em&gt; &lt;i&gt; &lt;q cite=""&gt; &lt;strike&gt; &lt;strong&gt; </code></p>						<p class="form-submit">
                    <input name="submit" type="submit" id="submit" value="Post Comment">

                </p>
            </form>
        </div>
        <div class="clear"> </div>
        <!----------------- End Comment Area ----------------->
    </div>
@endsection