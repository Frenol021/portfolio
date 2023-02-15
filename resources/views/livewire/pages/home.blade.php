<div>
    <div class="container home">
        <div class="row">
            <div class="col-6">
                <h2>Hey i'm <span>Nyawira Dennis</span>
                </h2>
                <p>A software developer who is passionate about creating high-quality software that solves real-world
                    problems and makes a positive impact on users.
                    I am well-versed in the latest technologies and best practices.</p>
                <button type="button" class="btn btn-warning">Hire me</button><br>
                <div class="icons">
                    <a href="https://github.com/Frenol021?tab=repositories" target="_blank"><i
                            class="fa-brands fa-github fa-3x"></i></a>
                    <a href="https://www.linkedin.com/in/dennis-wanjohi-a88a09224" target="_blank"><i
                            class="fa-brands fa-linkedin fa-3x"></i></a>
                    <a href="https://frenol.hashnode.dev/" target="_blank"><i
                            class="fa-brands fa-hashnode fa-3x"></i></a>
                </div>
            </div>
            <div class="col-6 image ">

                <img src="{{ URL('storage/denno1.png') }}" alt="" title="">

            </div>
        </div>
    </div>

    <!-- services -->
    <div class="container">
        <h3>What i does.</h3>
        <p>Here are some of my expertise</p>
        <div class="services">
            <div class="card border-warning mb-3" style="max-width: 18rem;">
                <div class="card-header">Software developer</div>
                <div class="card-body text-warning">
                    <h5 class="card-title">Warning card title</h5>
                    <p class="card-text">I tailor a software based on the clients or company requirements. i use quality
                        frameworks and core libraries.</p>
                </div>
            </div>

            <div class="card border-warning mb-3" style="max-width: 18rem;">
                <div class="card-header">Software quality assurer </div>
                <div class="card-body text-warning">
                    <h5 class="card-title">Warning card title</h5>
                    <p class="card-text">I tailor a software based on the clients or company requirements. i use quality
                        frameworks and core libraries.</p>
                </div>
            </div>

            <div class="card border-warning mb-3" style="max-width: 18rem;">
                <div class="card-header">Software developer</div>
                <div class="card-body text-warning">
                    <h5 class="card-title">Warning card title</h5>
                    <p class="card-text">I tailor a software based on the clients or company requirements. i use quality
                        frameworks and core libraries.</p>
                </div>
            </div>
        </div>
    </div>

    <section class="py-8 counter">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-lg-4 text-center my-3 text-black">
                    <h6 class="count h1 mb-2" data-to="640" data-speed="640">15</h6>
                    <p class="m-0">Projects</p>
                </div>

                <div class="col-sm-6 col-lg-4 text-center my-3 text-black">
                    <h6 class="count h1 mb-2" data-to="963" data-speed="963">5</h6>
                    <p class="m-0">Happy client</p>
                </div>
                <div class="col-sm-6 col-lg-4 text-center my-3 text-black">
                    <h6 class="count h1 mb-2" data-to="1200" data-speed="1200">0</h6>
                    <p class="m-0">Partners</p>
                </div>
            </div>
        </div>
    </section>

    <div class="container skill">
        <h3>My skills</h3>
        <div class="row">
            <div class="col-9">
                {!! $chart->container() !!}
            </div>
        </div>
        {!! $chart->script() !!}
    </div>

    <div class="container project">
    <div class="content">
        <h3>Recent Projects</h3>
        <p>Here are some of my recent work done.</p>
        </div>
        <div class="image2">
            <div class="card" style="width: 22rem;">
                <img src="{{ URL('storage/work1.png') }}" alt="" title="">

            </div>

            <div class="card" style="width: 22rem;">
                <img src="{{ URL('storage/work2.png') }}" alt="" title="">

            </div>

            <div class="card" style="width: 22rem; object-fit: fill;">
                <img src="{{ URL('storage/work3.png') }}" alt="" title="">

            </div>
        </div>
    </div>
    <div class="container">
    <h3>Contacts</h3>
    </div>
</div>
