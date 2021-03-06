@extends('layouts.site')

@section('content')


@if($article)
<!--container start-->
    <div class="container">
      <div class="row">
        <!--blog start-->
        <div class="col-lg-9">
          <div class="blog-item">
            <div class="row">
              <div class="col-lg-2 col-sm-2">
                <div class="date-wrap">
                  <span class="date">
                    11
                  </span>
                  <span class="month">
                    January
                  </span>
                </div>

              </div>
              <div class="col-lg-10 col-sm-10">


                <div class="blog-img gs">
                  <img src="http://lara.loc/img/{{ $article[0]->img }}" alt=""/>
                </div>

              </div>
            </div>
            <div class="row">
              <div class="col-lg-2 col-sm-2 text-right">
                <div class="author">
                  By
                  <a href="#">
                    Admin
                  </a>
                </div>
                <ul class="list-unstyled">
                  <li>
                    <a href="javascript:;">
                      <em>
                        travel
                      </em>
                    </a>
                  </li>
                  <li>
                    <a href="javascript:;">
                      <em>
                        tour
                      </em>
                    </a>
                  </li>
                  <li>
                    <a href="javascript:;">
                      <em>
                        recreation
                      </em>
                    </a>
                  </li>
                  <li>
                    <a href="javascript:;">
                      <em>
                        tourism
                      </em>
                    </a>
                  </li>
                </ul>
                <div class="st-view">
                  <ul class="list-unstyled">
                    <li>
                      <a href="javascript:;">
                        209 View
                      </a>
                    </li>
                    <li>
                      <a href="javascript:;">
                        23 Share
                      </a>
                    </li>
                    <li>
                      <a href="javascript:;">
                        23 comments
                      </a>
                    </li>

                  </ul>
                </div>
              </div>
              <div class="col-lg-10 col-sm-10">
                <h1>
                  <a href="blog_detail.html">
                    <h2>{{ $article[0]->title }}</h2>
                  </a>
                </h1>
                <p>{!! $article[0]->text !!}</p>
                <blockquote>
                  <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit posuere erat a ante.
                  </p>
                  <small>
                    Someone famous
                    <cite title="Source Title">
                      Source Title
                    </cite>
                  </small>
                </blockquote>
                
                <div class="media">
                  <h3>
                    Comments
                  </h3>
                  <hr>
                  <a class="pull-left" href="javascript:;">
                    <img class="media-object" src="img/person_1.png" alt="">
                  </a>
                  <div class="media-body">
                    <h4 class="media-heading">
                      Maria Joli
                      <span>
                        |
                      </span>
                      <span>
                        12 July 2014, 10:20
                      </span>
                    </h4>
                    <p>
                      Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.
                    </p>
                    <a href="javascript:;">
                      Reply
                    </a>
                    <hr>
                    <!-- Nested media object -->
                    <div class="media">
                      <a class="pull-left" href="javascript:;">
                        <img class="media-object" src="img/person_2.png" alt="">
                      </a>
                      <div class="media-body">
                        <h4 class="media-heading">
                          John Doe
                          <span>
                            |
                          </span>
                          <span>
                            12 July 2014, 10:30
                          </span>
                        </h4>
                        <p>
                          Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.
                        </p>
                        <a href="javascript:;">
                          Reply
                        </a>
                      </div>
                    </div>
                    <!--end media-->
                    <hr>
                    <div class="media">
                      <a class="pull-left" href="javascript:;">
                        <img class="media-object" src="img/person_3.png" alt="">
                      </a>
                      <div class="media-body">
                        <h4 class="media-heading">
                          Jane Doe
                          <span>
                            |
                          </span>
                          <span>
                            12 July 2014, 10:40
                          </span>
                        </h4>
                        <p>
                          Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.
                        </p>
                        <a href="javascript:;">
                          Reply
                        </a>
                      </div>
                    </div>
                    <hr>
                    <!--end media-->
                  </div>
                </div>
                <div class="media">
                  <a class="pull-left" href="javascript:;">
                    <img class="media-object" src="img/person_1.png" alt="">
                  </a>
                  <div class="media-body">
                    <h4 class="media-heading">
                      Danny Dev
                      <span>
                        |
                      </span>
                      <span>
                        12 July 2014, 11:10
                      </span>
                    </h4>
                    <p>
                      Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.
                    </p>
                    <a href="javascript:;">
                      Reply
                    </a>
                  </div>
                </div>
                <div class="post-comment">
                  <h3 class="skills">
                    Post Comments
                  </h3>
                  <form class="form-horizontal" role="form">
                    <div class="form-group">
                      <div class="col-lg-4">
                        <input type="text" placeholder="Name" class="col-lg-12 form-control">
                      </div>

                      <div class="col-lg-4">
                        <input type="text" placeholder="Email" class="col-lg-12 form-control">
                      </div>

                      <div class="col-lg-4">
                        <input type="text" placeholder="2+2=?" class="col-lg-12 form-control">
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="col-lg-12">
                        <textarea placeholder="Message" rows="8" class=" form-control">
                        </textarea>
                      </div>
                    </div>
                    <p>
                      <button type="submit" class="btn btn-info pull-right">
                        Post Comment
                      </button>
                    </p>
                  </form>
                </div>

              </div>
            </div>
          </div>

        </div>

        <div class="col-lg-3">
          <div class="blog-side-item">
            <div class="search-row">
              <input type="text" class="form-control" placeholder="Search here">
            </div>
            <div class="category">
              <h3>
                Categories
              </h3>
              <ul class="list-unstyled">
                <li>
                  <a href="javascript:;">
                    <i class="fa fa-angle-right pr-10">
                    </i>
                    Animals
                  </a>
                </li>
                <li>
                  <a href="javascript:;">
                    <i class="fa fa-angle-right pr-10">
                    </i>
                    Landscape
                  </a>
                </li>
                <li>
                  <a href="javascript:;">
                    <i class="fa fa-angle-right pr-10">
                    </i>
                    Portait
                  </a>
                </li>
                <li>
                  <a href="javascript:;">
                    <i class="fa fa-angle-right pr-10">
                    </i>
                    Wild Life
                  </a>
                </li>
                <li>
                  <a href="javascript:;">
                    <i class="fa fa-angle-right pr-10">
                    </i>
                    Video
                  </a>
                </li>
              </ul>
            </div>

            <div class="blog-post">
              <h3>
                Latest Blog Post
              </h3>
              <div class="media">
                <a class="pull-left gs" href="javascript:;">
                  <img class=" " src="img/blog/blog-thumb-1.jpg" alt="">
                </a>
                <div class="media-body">
                  <h5 class="media-heading">
                    <a href="javascript:;">
                      02 May 2014
                    </a>
                  </h5>
                  <p>
                    Donec id elit non mi porta gravida at eget metus amet int
                  </p>
                </div>
              </div>
              <div class="media">
                <a class="pull-left gs" href="javascript:;">
                  <img class=" " src="img/blog/blog-thumb-2.jpg" alt="">
                </a>
                <div class="media-body">
                  <h5 class="media-heading">
                    <a href="javascript:;">
                      02 May 2014
                    </a>
                  </h5>
                  <p>
                    Donec id elit non mi porta gravida at eget metus amet int
                  </p>
                </div>
              </div>
              <div class="media">
                <a class="pull-left gs" href="javascript:;">
                  <img class=" " src="img/blog/blog-thumb-3.jpg" alt="">
                </a>
                <div class="media-body">
                  <h5 class="media-heading">
                    <a href="javascript:;">
                      02 May 2014
                    </a>
                  </h5>
                  <p>
                    Donec id elit non mi porta gravida at eget metus amet int
                  </p>
                </div>
              </div>
            </div>

            <div class="tags">
              <h3>
                Tags
              </h3>
              <ul class="tag">
                <li>
                  <a href="#">
                    <i class="fa fa-tags pr-5">
                    </i>
                    flat
                  </a>
                </li>
                <li>
                  <a href="#">
                    <i class="fa fa-tags pr-5">
                    </i>
                    clean
                  </a>
                </li>
                <li>
                  <a href="#">
                    <i class="fa fa-tags pr-5">
                    </i>
                    admin
                  </a>
                </li>
                <li>
                  <a href="#">
                    <i class="fa fa-tags pr-5">
                    </i>
                    UI
                  </a>
                </li>
                <li>
                  <a href="#">
                    <i class="fa fa-tags pr-5">
                    </i>
                    responsive
                  </a>
                </li>
                <li>
                  <a href="#">
                    <i class="fa fa-tags pr-5">
                    </i>
                    Web Design
                  </a>
                </li>
                <li>
                  <a href="#">
                    <i class="fa fa-tags pr-5">
                    </i>
                    UIX
                  </a>
                </li>
                <li>
                  <a href="#">
                    <i class="fa fa-tags pr-5">
                    </i>
                    Blog
                  </a>
                </li>
                <li>
                  <a href="#">
                    <i class="fa fa-tags pr-5">
                    </i>
                    flat Admin
                  </a>
                </li>
                <li>
                  <a href="#">
                    <i class="fa fa-tags pr-5">
                    </i>
                    Dashboard
                  </a>
                </li>
              </ul>
            </div>


            <div class="archive">
              <h3>
                Archive
              </h3>
              <ul class="list-unstyled">
                <li>
                  <a href="javascript:;">
                    <i class="fa fa-angle-double-right pr-10">
                    </i>
                    May 2014
                  </a>
                </li>
                <li>
                  <a href="javascript:;">
                    <i class="fa fa-angle-double-right pr-10">
                    </i>
                    April 2014
                  </a>
                </li>
                <li>
                  <a href="javascript:;">
                    <i class="fa fa-angle-double-right pr-10">
                    </i>
                    March 2014
                  </a>
                </li>
                <li>
                  <a href="javascript:;">
                    <i class="fa fa-angle-double-right pr-10">
                    </i>
                    February 2014
                  </a>
                </li>
                <li>
                  <a href="javascript:;">
                    <i class="fa fa-angle-double-right pr-10">
                    </i>
                    January 2014
                  </a>
                </li>
              </ul>
            </div>


          </div>
        </div>


      </div>

    </div>
    <!--container end-->
      @endif
@endsection