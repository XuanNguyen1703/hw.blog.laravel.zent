@extends('layouts.master') 
@section('content')
<!-- CONTENT -->
        <div class="content col-xs-8">
    
        
            <!-- ARTICLE 1 -->    
            <article>
                <div class="post-image">
                    <img src="{{$post->thumbnail}}" alt="post image 1"> 
                </div>
                <div class="post-text">
                    <span class="date">"{{$post->created_at}}</span>
                    <h2>{{$post->title}}</h2>
                </div>                 
                <div class="post-text text-content">
                    <div class="post-by">Post By <a href="#">AD-Theme</a></div>                    
                    <div class="text">{{$post->content}}</div>                   
                    <div class="clearfix"></div>
                    </div>
                </div>
                <div class="social-post">
                    <a href="#"><i class="icon-facebook5"></i></a>
                    <a href="#"><i class="icon-twitter4"></i></a>
                    <a href="#"><i class="icon-google-plus"></i></a>
                    <a href="#"><i class="icon-vimeo4"></i></a>
                    <a href="#"><i class="icon-linkedin2"></i></a>                  
                </div>
                
            
                <!-- NAVIGATION POST -->
                <div class="navigation-post">
                    <div class="prev-post">
                        <img src="{{ asset('') }}blog_assets/img/prev-post.jpg">
                        <a href="#" class="prev">
                            <i class="icon-arrow-left8"></i> Previous Posts
                            <span class="name-post">DUIS FACILISIS AUGUE VITAE</span>
                        </a>
                        <div class="clearfix"></div>
                    </div>
                    <div class="next-post">                 
                        <a href="#" class="next">
                                Next Posts <i class="icon-arrow-right8"></i>                
                                <span class="name-post">DUIS FACILISIS AUGUE VITAE</span>
                        </a> 
                        <img src="{{ asset('') }}blog_assets/img/next-post.jpg">  
                        <div class="clearfix"></div>             
                    </div>
                    <div class="clearfix"></div>
                </div>
                
                
                <!-- AUTHOR POST -->
                
                
                <!-- RELATED POSTS -->
                <div class="related-posts">
                        <h2>Related Article</h2>
                        <div class="related-item-container">
                            <div class="related-item">
                                <div class="related-image">
                                    <img src="{{ asset('') }}blog_assets/img/img-related-1.jpg">
                                    <span class="related-category"><a href="#">Food</a></span>
                                </div>
                                <div class="related-text">
                                    <span class="related-date">03 JUNE 2016</span>
                                    <span class="related-title"><a href="#">TINCIDUNT SIT <br> ULTRICIES AMET</a></span>
                                </div>
                                <div class="related-author">
                                    Post by <a href="#">AD-THEME</a>
                                </div>
                            </div>
    
                            <div class="related-item">
                                <div class="related-image">
                                    <img src="{{ asset('') }}blog_assets/img/img-related-2.jpg">
                                    <span class="related-category"><a href="#">TECHNOLOGY</a></span>
                                </div>
                                <div class="related-text">
                                    <span class="related-date">04 JUNE 2016</span>
                                    <span class="related-title"><a href="#">VIVAMUS ET <br> TURPIS LACINIA</a></span>
                                </div>
                                <div class="related-author">
                                    Post by <a href="#">AD-THEME</a>
                                </div>
                            </div>                                                              
                        
                            <div class="clearfix"></div>
                        
                        </div>
                  </div>      
                        
                        
                  <!-- COMMENTS -->      
                  <div class="comments">
                            <h3>3 Comments</h3>
                            <div class="comments-list">
                                <div class="main-comment">
                                    <div class="comment-image-author">
                                        <img src="img/img-author.jpg">
                                    </div>
                                    <div class="comment-info">
                                        <div class="comment-name-date"><span class="comment-name">LUCAS NEWAR</span><span class="comment-date">June 2, 2016</span><div class="clearfix"></div></div>
                                        <span class="comment-description">Morbi gravida, sem non egestas ullamcorper, tellus ante laoreet nisl, id iaculis urna eros vel turpis curabitur. <i class="icon-arrow-right2"></i></span>                                
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="reply-comment">
                                    <span class="reply-line"></span>
                                    <div class="comment-image-author">
                                        <img src="{{ asset('') }}blog_assets/img/img-author.jpg">
                                    </div>
                                    <div class="comment-info">
                                        <div class="comment-name-date"><span class="comment-name">LUCAS NEWAR</span><span class="comment-date">June 2, 2016</span><div class="clearfix"></div></div>
                                        <span class="comment-description">Morbi gravida, sem non egestas ullamcorper, tellus ante laoreet nisl, id iaculis urna eros vel turpis curabitur. <i class="icon-arrow-right2"></i></span>                                
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
    
                            <div class="comments-list">
                                <div class="main-comment">
                                    <div class="comment-image-author">
                                        <img src="{{ asset('') }}blog_assets/img/img-author.jpg">
                                    </div>
                                    <div class="comment-info">
                                        <div class="comment-name-date"><span class="comment-name">LUCAS NEWAR</span><span class="comment-date">June 2, 2016</span><div class="clearfix"></div></div>
                                        <span class="comment-description">Morbi gravida, sem non egestas ullamcorper, tellus ante laoreet nisl, id iaculis urna eros vel turpis curabitur. <i class="icon-arrow-right2"></i></span>                                
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        
                </div>                                  
                
                
                <!-- COMMENT FORM -->
                <div class="comment-form">
                    <h3>Leavy Reply</h3>
                    <span class="field-name">Your Name (required)</span>
                    <input type="text" class="name">
                    <span class="field-name">Your Name (required)</span>
                    <input type="text" class="email">
                    <span class="field-name">Your Message</span>
                    <textarea class="message"></textarea>
                    
                    <button type="submit">Send Comment</button>
                
                </div>
            
            
            </article>
        
        
        </div>
        
        
        <!-- SIDEBAR -->
        <div class="sidebar col-xs-4">
            
            
            <!-- ABOUT ME -->                  
            <div class="widget about-me">
                <div class="ab-image">
                    <img src="{{ asset('') }}blog_assets/img/about-me.jpg" alt="about me">
                    <div class="ab-title">About Me</div>
                </div>
                <div class="ad-text">
                    <p>Lorem ipsum dolor sit consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
                    <span class="signing"><img src="{{ asset('') }}blog_assets/img/signing.png" alt="signing"></span>
                </div>
            </div>


            <!-- LATEST POSTS -->                              
            <div class="widget latest-posts">
                <h3 class="widget-title">
                    Latest Posts
                </h3>
                <div class="posts-container">
                
                    <div class="item">
                        <img src="{{ asset('') }}blog_assets/img/latest-posts-1.jpg" alt="post 1" class="post-image">
                        <div class="info-post">
                            <h5><a href="#">MAECENAS <br> CONSECTETUR</a></h5>
                            <span class="date">07 JUNE 2016</span>  
                        </div> 
                        <div class="clearfix"></div>   
                    </div>

                    <div class="item">
                        <img src="{{ asset('') }}blog_assets/img/latest-posts-2.jpg" alt="post 2" class="post-image">
                        <div class="info-post">
                            <h5><a href="#">MAURIS SIT AMET</a></h5>
                            <span class="date">06 JUNE 2016</span>                          
                        </div> 
                        <div class="clearfix"></div>   
                    </div>

                    <div class="item">
                        <img src="{{ asset('') }}blog_assets/img/latest-posts-3.jpg" alt="post 3" class="post-image">
                        <div class="info-post">
                            <h5><a href="#">NAM EGET <br> PULVINAR ANTE</a></h5>
                            <span class="date">05 JUNE 2016</span>                          
                        </div> 
                        <div class="clearfix"></div>   
                    </div>

                    <div class="item">
                        <img src="{{ asset('') }}blog_assets/img/latest-posts-4.jpg" alt="post 4" class="post-image">
                        <div class="info-post">
                            <h5><a href="#">VIVAMUS ET TURPIS LACINIA</a></h5>
                            <span class="date">04 JUNE 2016</span>                      
                        </div>    
                        <div class="clearfix"></div>
                    </div>
                    
                    <div class="clearfix"></div>
                </div>
            </div>


            <!-- FOLLOW US -->                              
            <div class="widget follow-us">
                <h3 class="widget-title">
                    Follow Us
                </h3>
                <div class="follow-container">
                    <a href="#"><i class="icon-facebook5"></i></a>
                    <a href="#"><i class="icon-twitter4"></i></a>
                    <a href="#"><i class="icon-google-plus"></i></a>
                    <a href="#"><i class="icon-vimeo4"></i></a>
                    <a href="#"><i class="icon-linkedin2"></i></a>                
                </div>
                <div class="clearfix"></div>
            </div>            


            <!-- TAGS -->                              
            <div class="widget tags">
                <h3 class="widget-title">
                    Tags
                </h3>
                <div class="tags-container">
                    <a href="#">Audio</a>
                    <a href="#">Travel</a>
                    <a href="#">Food</a>
                    <a href="#">Event</a>
                    <a href="#">Wordpress</a>
                    <a href="#">Video</a>
                    <a href="#">Design</a>
                    <a href="#">Sport</a>
                    <a href="#">Blog</a>
                    <a href="#">Post</a> 
                    <a href="#">Img</a>
                    <a href="#">Masonry</a>                                    
                </div>
                <div class="clearfix"></div>
            </div> 


            <!-- ADVERTISING -->                              
            <div class="widget advertising">
                <div class="advertising-container">
                    <img src="{{ asset('') }}blog_assets/img/350x300.png" alt="banner 350x300">
                </div>
            </div>


            <!-- NEWSLETTER -->                              
            <div class="widget newsletter">
                <h3 class="widget-title">
                    Newsletter
                </h3>
                <div class="newsletter-container">
                    <h4>DO NOT MISS OUR NEWS</h4>
                    <p>Sign up and receive the <br> latest news of our company</p> 
                    <form>
                       <input type="email" class="newsletter-email" placeholder="Your email address...">
                       <button type="submit" class="newsletter-btn">Send</button>
                    </form>                                  
                </div>
                <div class="clearfix"></div>
            </div>  
            
        </div> <!-- #SIDEBAR -->
        
        <div class="clearfix"></div>
@endsection