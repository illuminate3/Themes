@extends($theme_layout)
@section('meta_description'){{ meta_description() }}@stop
@section('meta_keywords'){{ meta_keywords() }}@stop
@section('content')
    <div class="ui inverted vertical masthead center aligned segment">

        <div class="ui container">
            <div class="ui large secondary inverted pointing menu">
                <a class="toc item">
                    <i class="sidebar icon"></i>
                </a>
                <a class="active item">Home</a>
                <a class="item">Work</a>
                <a class="item">Company</a>
                <a class="item">Careers</a>

                <div class="right item">
                    <a class="ui inverted button">Log in</a>
                    <a class="ui inverted button">Sign Up</a>
                </div>
            </div>
        </div>

        <div class="ui text container">
            <h1 class="ui inverted header">
                {{ site_name() }}
            </h1>

            <h2>{{ site_description() }}</h2>

            <div class="ui huge primary button">Get Started</div>
        </div>

    </div>

    <div class="ui vertical stripe segment">
        <div class="ui middle aligned stackable grid container">
            <div class="row">
                <div class="eight wide column">
                    <h3 class="ui header">We Help Companies and Companions</h3>

                    <p>We can give your company superpowers to do things that they never thought possible. Let us
                        delight your customers and empower your needs...through pure data analytics.</p>

                    <h3 class="ui header">We Make Bananas That Can Dance</h3>

                    <p>Yes that's right, you thought it was the stuff of dreams, but even bananas can be
                        bioengineered.</p>
                </div>
                <div class="six wide right floated column">
                    <img src="{{ Theme::asset('img/wireframe/white-image.png') }}"
                         class="ui large bordered rounded image">
                </div>
            </div>
            <div class="row">
                <div class="center aligned column">
                    <a class="ui huge button">Check Them Out</a>
                </div>
            </div>
        </div>
    </div>


    <div class="ui vertical stripe quote segment">
        <div class="ui equal width stackable internally celled grid">
            <div class="center aligned row">
                <div class="column">
                    <h3>"What a Company"</h3>

                    <p>That is what they all say about us</p>
                </div>
                <div class="column">
                    <h3>"I shouldn't have gone with their competitor."</h3>

                    <p>
                        <img src="{{ Theme::asset('img/avatar/nan.jpg') }}" class="ui avatar image"> <b>Nan</b> Chief
                        Fun Officer Acme Toys
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="ui vertical stripe segment">
        <div class="ui text container">
            <h3 class="ui header">Breaking The Grid, Grabs Your Attention</h3>

            <p>Instead of focusing on content creation and hard work, we have learned how to master the art of doing
                nothing by providing massive amounts of whitespace and generic content that can seem massive, monolithic
                and worth your attention.</p>
            <a class="ui large button">Read More</a>
            <h4 class="ui horizontal header divider">
                <a href="#">Case Studies</a>
            </h4>

            <h3 class="ui header">Did We Tell You About Our Bananas?</h3>

            <p>Yes I know you probably disregarded the earlier boasts as non-sequitor filler content, but its really
                true. It took years of gene splicing and combinatory DNA research, but our bananas can really dance.</p>
            <a class="ui large button">I'm Still Quite Interested</a>
        </div>
    </div>
@stop