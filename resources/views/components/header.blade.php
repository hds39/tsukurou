<div class="container">
    <section class="bs-docs-section clearfix">
        <div class="row">
            <div class="col-lg-12">
                

                <div class="bs-component">
                <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                




                    <a class="navbar-brand" href="{{ route('top')}}">ホーム</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarColor01">
                    <form class="form-inline my-2 my-lg-0 ml-auto" method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button class="btn btn-secondary my-2 my-sm-0" type="submit">ログアウト</button>
                    </form>
                    </div>
                </nav>
                </div>

                

            </div>
        </div>
    </section>
        
       
</div>