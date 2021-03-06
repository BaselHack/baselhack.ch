@extends('frontend.layouts.app')

@section('content')

    <section class="section hero header is-small is-light">
        <div class="hero-body">
            <div class="columns is-centered">

                <div class="column is-4">
                      <a href="{{ route('frontend.events.signup.index') }}">
                            <img class="image header-image" src="{{ asset('frontend/images/backgrounds/home.png') }}">
                      </a>
                </div>
            </div>
        </div>
    </section>

    <section class="section">
        <div class="container">

            <div class="columns is-centered">

                <div class="column is-three-quarters">

                    <h1 class="title">You finally made it!</h1>

                    <h3 class="subtitle">The competitive power of a region is based on the creativity of its people and organizations.</h3>
                    <hr>

                    <div class="content">

                     <p class="has-text-justified">

                            Every city needs such a melting pot. Born in 2017, the Basel Hackathon is
                            organized by the non-profit organisation BaselHack, consisting of 22 creative enthusiasts
                            from different backgrounds and organizations from the Basel Region with a diversity of
                            skills.
                        </p>

                        <p class="has-text-justified">
                            We came together because we believe that Basel needed a hack. We want to inspire talents,
                            thinkers and creative spirits to come together, work in teams as equals, creating solutions
                            for the region. The goal is to present running prototypes at the end of an about 30 hour
                            weekend.
                        </p>

                        <p class="has-text-justified">

                            We promise you: Be part of BaselHack once – as an expert, mentor, sponsor, supporting
                            partner or just as a visitor - and you will continue to come every time. </p>


                        <p class="has-text-justified">
                            We are organizing BaselHack out of passion for technology and simply for fun!
                            Our community is growing. You want to join us?

                        </p>

                    </div>

                </div>

            </div>

        </div>
    </section>

    @include('frontend.layouts.components._sponsors')

    @include('frontend.layouts.components._newsletter')

    @include('frontend.layouts.components._partners')


@endsection
