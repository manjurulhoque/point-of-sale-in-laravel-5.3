@extends('app')

@section('content')
<!-- Main Content -->
<section class="content-wrap">
    <!-- Breadcrumb -->
    <div class="page-title">

      <div class="row">
        <div class="col s12 m9 l10">
          <h1>Dashboard</h1>

          <ul>
            <li>
              <a href="#"><i class="fa fa-home"></i> Home</a>  <i class="fa fa-angle-right"></i>
            </li>

            <li><a href='dashboard.html'>Dashboard</a>
            </li>
          </ul>
        </div>
        <div class="col s12 m3 l2 right-align">
          <a href="#!" class="btn grey lighten-3 grey-text z-depth-0 chat-toggle"><i class="fa fa-comments"></i></a>
        </div>
      </div>

    </div>
    <!-- /Breadcrumb -->

    <div class="row">
      <div class="col l4 s12">
        <a href="#" class="card-panel stats-card indigo lighten-2 indigo-text text-lighten-5">
          <i class="fa fa-comments-o"></i>
          <span class="count">{{$employees}}</span>
          <div class="name">Employee</div>
        </a>
      </div>
      <div class="col l4 s12">
        <a href="#" class="card-panel stats-card blue lighten-2 blue-text text-lighten-5">
          <i class="fa fa-send"></i>

          <div class="graph">
            <div id="sparkcard1"></div>
          </div>

          <span class="count">{{$customers}}</span>
          <div class="name">Employee</div>
        </a>
      </div>
      <div class="col l4 s12">
        <div class="card-panel stats-card teal lighten-2 green-text text-lighten-5">
          <div class="progress small teal lighten-1">
            <div class="teal darken-1" style="width: 42%"></div>
          </div>

          <i class="fa fa-spinner"></i>
          <span class="count">{{$suppliers}}</span>
          <div class="name">Employee</div>
        </div>
      </div>
      <div class="col l4 s12">
        <div class="card-panel stats-card teal lighten-2 green-text text-lighten-5">
          <div class="progress small teal lighten-1">
            <div class="teal darken-1" style="width: 42%"></div>
          </div>

          <i class="fa fa-spinner"></i>
          <span class="count">{{$items}}</span>
          <div class="name">Employee</div>
        </div>
      </div>
      <div class="col l4 s12">
        <div class="card-panel stats-card teal lighten-2 green-text text-lighten-5">
          <div class="progress small teal lighten-1">
            <div class="teal darken-1" style="width: 42%"></div>
          </div>

          <i class="fa fa-spinner"></i>
          <span class="count">{{$item_kits}}</span>
          <div class="name">Employee</div>
        </div>
      </div>
      <div class="col l4 s12">
        <div class="card-panel stats-card teal lighten-2 green-text text-lighten-5">
          <div class="progress small teal lighten-1">
            <div class="teal darken-1" style="width: 42%"></div>
          </div>

          <i class="fa fa-spinner"></i>
          <span class="count">{{$receivings}}</span>
          <div class="name">Employee</div>
        </div>
      </div>
      <div class="col l4 s12">
        <div class="card-panel stats-card teal lighten-2 green-text text-lighten-5">
          <div class="progress small teal lighten-1">
            <div class="teal darken-1" style="width: 42%"></div>
          </div>

          <i class="fa fa-spinner"></i>
          <span class="count">{{$sales}}</span>
          <div class="name">Employee</div>
        </div>
      </div>
    </div>

  </section>
  <!-- /Main Content -->



  <!-- Search Bar -->
  <div class="search-bar">
    <div class="layer-overlay"></div>
    <div class="layer-content">
      <form action="#!">
        <!-- Header -->
        <a class="search-bar-toggle grey-text text-darken-2" href="#!"><i class="mdi-navigation-close"></i></a>

        <!-- Search Input -->
        <div class="input-field">
          <i class="mdi-action-search prefix"></i>
          <input type="text" name="con-search" placeholder="Search...">
        </div>

        <!-- Search Results -->
        <div class="search-results">

          <div class="row">
            <div class="col s12 l4">
              <h4>Users</h4>

              <div class="each-result">
                <img src="assets/_con/images/user2.jpg" alt="Felecia Castro" class="circle photo">
                <div class="title">Felecia Castro</div>
                <div class="label">Content Manager</div>
              </div>

              <div class="each-result">
                <img src="assets/_con/images/user3.jpg" alt="Max Brooks" class="circle photo">
                <div class="title">Max Brooks</div>
                <div class="label">Programmer</div>
              </div>

              <div class="each-result">
                <img src="assets/_con/images/user4.jpg" alt="Patsy Griffin" class="circle photo">
                <div class="title">Patsy Griffin</div>
                <div class="label">Support</div>
              </div>

              <div class="each-result">
                <img src="assets/_con/images/user6.jpg" alt="Vernon Garrett" class="circle photo">
                <div class="title">Vernon Garrett</div>
                <div class="label">Photographer</div>
              </div>
            </div>
            <div class="col s12 l4">
              <h4>Articles</h4>

              <div class="each-result">
                <div class="icon circle blue white-text">MD</div>
                <div class="title">Material Design</div>
                <div class="label nowrap">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi consequatur debitis veritatis dolorum, enim libero!</div>
              </div>

              <div class="each-result">
                <div class="icon circle teal white-text">
                  <i class="fa fa-dashboard"></i>
                </div>
                <div class="title">Admin Dashboard</div>
                <div class="label nowrap">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi consequatur debitis veritatis dolorum, enim libero!</div>
              </div>

              <div class="each-result">
                <div class="icon circle orange white-text">RD</div>
                <div class="title">Responsive Design</div>
                <div class="label nowrap">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi consequatur debitis veritatis dolorum, enim libero!</div>
              </div>

              <div class="each-result">
                <div class="icon circle red white-text">
                  <i class="fa fa-tablet"></i>
                </div>
                <div class="title">Mobile First</div>
                <div class="label nowrap">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi consequatur debitis veritatis dolorum, enim libero!</div>
              </div>
            </div>
            <div class="col s12 l4">
              <h4>Posts</h4>

              <div class="no-result">No results were found ;(</div>
            </div>
          </div>

        </div>

      </form>
    </div>
  </div>
  <!-- /Search Bar -->



  <!--
  Chat
    .chat-light - light color scheme
-->
  <div class="chat">
    <div class="layer-overlay"></div>

    <div class="layer-content">

      <!-- Contacts -->
      <div class="contacts">
        <!-- Top Bar -->
        <div class="topbar">
          <a href="#!" class="text">Chat</a>
          <a href="#!" class="chat-toggle"><i class="mdi-navigation-close"></i></a>
        </div>
        <!-- /Top Bar -->

        <div class="nano">
          <div class="nano-content">

            <span class="label">Online</span>

            <div class="user">
              <img src="assets/_con/images/user2.jpg" alt="Felecia Castro" class="circle photo">

              <div class="name">Felecia Castro</div>
              <div class="status">Lorem status</div>

              <div class="online"><i class="green-text fa fa-circle"></i>
              </div>
            </div>

            <div class="user">
              <img src="assets/_con/images/user3.jpg" alt="Max Brooks" class="circle photo">

              <div class="name">Max Brooks</div>
              <div class="status">Lorem status</div>

              <div class="online"><i class="green-text fa fa-circle"></i>
              </div>
            </div>

            <div class="user">
              <img src="assets/_con/images/user4.jpg" alt="Patsy Griffin" class="circle photo">

              <div class="name">Patsy Griffin</div>
              <div class="status">Lorem status</div>

              <div class="online"><i class="green-text fa fa-circle"></i>
              </div>
            </div>

            <div class="user">
              <img src="assets/_con/images/user5.jpg" alt="Chloe Morgan" class="circle photo">

              <div class="name">Chloe Morgan</div>
              <div class="status">Lorem status</div>

              <div class="online"><i class="green-text fa fa-circle"></i>
              </div>
            </div>

            <div class="user">
              <img src="assets/_con/images/user6.jpg" alt="Vernon Garrett" class="circle photo">

              <div class="name">Vernon Garrett</div>
              <div class="status">Lorem status</div>

              <div class="online"><i class="yellow-text fa fa-circle"></i>
              </div>
            </div>

            <div class="user">
              <img src="assets/_con/images/user7.jpg" alt="Greg Mcdonalid" class="circle photo">

              <div class="name">Greg Mcdonalid</div>
              <div class="status">Lorem status</div>

              <div class="online"><i class="yellow-text fa fa-circle"></i>
              </div>
            </div>

            <div class="user">
              <img src="assets/_con/images/user8.jpg" alt="Christian Jackson" class="circle photo">

              <div class="name">Christian Jackson</div>
              <div class="status">Lorem status</div>

              <div class="online"><i class="yellow-text fa fa-circle"></i>
              </div>
            </div>


            <span class="label">Offline</span>

            <div class="user">
              <img src="assets/_con/images/user9.jpg" alt="Willie Kelly" class="circle photo">

              <div class="name">Willie Kelly</div>
              <div class="status">Lorem status</div>
            </div>

            <div class="user">
              <img src="assets/_con/images/user10.jpg" alt="Jenny Phillips" class="circle photo">

              <div class="name">Jenny Phillips</div>
              <div class="status">Lorem status</div>
            </div>

            <div class="user">
              <img src="assets/_con/images/user11.jpg" alt="Darren Cunningham" class="circle photo">

              <div class="name">Darren Cunningham</div>
              <div class="status">Lorem status</div>
            </div>

            <div class="user">
              <img src="assets/_con/images/user12.jpg" alt="Sandra Cole" class="circle photo">

              <div class="name">Sandra Cole</div>
              <div class="status">Lorem status</div>
            </div>

          </div>
        </div>
      </div>
      <!-- /Contacts -->

      <!-- Messages -->
      <div class="messages">

        <!-- Top Bar with back link -->
        <div class="topbar">
          <a href="#!" class="chat-toggle"><i class="mdi-navigation-close"></i></a>
          <a href="#!" class="chat-back"><i class="mdi-hardware-keyboard-arrow-left"></i> Back</a>
        </div>
        <!-- /Top Bar with back link -->

        <!-- All messages list -->
        <div class="list">
          <div class="nano scroll-bottom">
            <div class="nano-content">

              <div class="date">Monday, Feb 23, 8:23 pm</div>

              <div class="from-me">
                Hi, Felicia.
                <br>How are you?
              </div>

              <div class="clear"></div>

              <div class="from-them">
                <img src="assets/_con/images/user2.jpg" alt="John Doe" class="circle photo">Hi! I am good!
              </div>

              <div class="clear"></div>

              <div class="from-me">
                Glad to see you :)
                <br>This long text is intended to show how the chat will display it.
              </div>

              <div class="clear"></div>

              <div class="from-them">
                <img src="assets/_con/images/user2.jpg" alt="John Doe" class="circle photo">Also, we will send the longest word to show how it will fit in the chat window: <strong>Pneumonoultramicroscopicsilicovolcanoconiosis</strong>
              </div>

              <div class="date">Friday, Mar 10, 5:07 pm</div>

              <div class="from-me">
                Hi again!
              </div>

              <div class="clear"></div>

              <div class="from-them">
                <img src="assets/_con/images/user2.jpg" alt="John Doe" class="circle photo">Hi! Glad to see you.
              </div>

              <div class="clear"></div>

              <div class="from-me">
                I want to add you in my Facebook.
              </div>

              <div class="clear"></div>

              <div class="from-me">
                Can you give me your page?
              </div>

              <div class="clear"></div>

              <div class="from-them">
                <img src="assets/_con/images/user2.jpg" alt="John Doe" class="circle photo">I do not use Facebook. But you can follow me in Twitter.
              </div>

              <div class="clear"></div>

              <div class="from-me">
                It's good idea!
              </div>

              <div class="clear"></div>

              <div class="from-them">
                <img src="assets/_con/images/user2.jpg" alt="John Doe" class="circle photo">You can find me here - <a href="https://twitter.com/nkdevv">https://twitter.com/nkdevv</a>
              </div>

            </div>
          </div>
        </div>
        <!-- /All messages list -->

        <!-- Send message -->
        <div class="send">
          <form action="#!">
            <div class="input-field">
              <input id="chat-message" type="text" name="chat-message">
            </div>

            <button class="btn waves-effect z-depth-0"><i class="mdi-content-send"></i>
            </button>
          </form>
        </div>
        <!-- /Send message -->

      </div>
      <!-- /Messages -->
    </div>

  </div>
  <!-- /Chat -->

@endsection