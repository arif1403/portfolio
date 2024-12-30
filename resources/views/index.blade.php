@extends('layouts.app')

@section('content')
<!-- Introduction Section -->
<section id="introduction" class="vh-100 d-flex align-items-center text-center bg-light">
    <div class="container">
        <h1 class="display-4 text-uppercase">Welcome to My Portfolio</h1>
        <p class="lead">Showcasing my skills and projects as a web developer.</p>
        <a href="#about" class="btn btn-primary">Learn More</a>
    </div>
</section>

<!-- About Me Section -->
<section id="about" class="py-5">
    <div class="container">
        <h2 class="text-center mb-4">About Me</h2>
        <div class="row">
            <div class="col-md-4">
                <img src="{{ asset('images/profile.jpg') }}" alt="Profile Picture" class="img-fluid rounded-circle">
            </div>
            <div class="col-md-8">
                <p>Hello! My name is Arif Munandar. I am a passionate web developer with experience in creating dynamic and user-friendly websites. I specialize in technologies such as Laravel, Bootstrap, and JavaScript. My goal is to build impactful digital solutions for clients and users alike.</p>
            </div>
        </div>
    </div>
</section>

<!-- Portfolio Section -->
<section id="portfolio" class="py-5 bg-light">
    <div class="container">
        <h2 class="text-center mb-4">Portfolio</h2>
        <div class="row">
            @foreach ($projects as $project)
                <div class="col-md-4">
                    <div class="card mb-4">
                        <img src="{{ $project->image }}" class="card-img-top" alt="{{ $project->title }}">
                        <div class="card-body">
                            <h5 class="card-title">{{ $project->title }}</h5>
                            <p class="card-text">{{ Str::limit($project->description, 100) }}</p>
                            <a href="{{ url('/project/'.$project->id) }}" class="btn btn-primary">View More</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

<!-- Contact Section -->
<section id="contact" class="py-5">
    <div class="container">
        <h2 class="text-center mb-4">Contact Me</h2>
        <p class="text-center">Feel free to reach out for collaborations or inquiries.</p>
        <form action="#" method="POST" class="row g-3">
            <div class="col-md-6">
                <input type="text" class="form-control" placeholder="Your Name" required>
            </div>
            <div class="col-md-6">
                <input type="email" class="form-control" placeholder="Your Email" required>
            </div>
            <div class="col-12">
                <textarea class="form-control" rows="5" placeholder="Your Message" required></textarea>
            </div>
            <div class="col-12 text-center">
                <button type="submit" class="btn btn-primary">Send Message</button>
            </div>
        </form>
    </div>
</section>
@endsection
