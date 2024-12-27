@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <!-- success and error message code -->
    @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif

    @if(session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
    @endif

    <!-- Loading Spinner -->
    <div id="loading-bar" class="text-center" style="display: none; position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); z-index: 9999;">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="visually-hidden">Loading...</span>
        </div>
    </div>

    <!-- Form Section -->
    <div class="row justify-content-center">
        <div class="col-md-8 col-lg-6">
            <div class="card shadow-lg rounded-3 p-5" style="background: #ffffff;">
                <h3 class="text-primary text-center mb-4" style="font-family: 'Poppins', sans-serif; font-weight: bold;">
                    Propose Your Event
                </h3>
                <p class="text-center text-muted mb-4" style="font-size: 1.1rem; font-weight: 500;">
                    Have an exciting idea for an event? Fill out the form below and share it with us!
                </p>

                <!-- Form Start -->
                <form id="eventForm" action="{{ route('eventProposal.sentmail') }}" method="POST">
                    @csrf
                    <!-- Personal Details Section -->
                    <h5 class="text-primary">Personal Details</h5>
                    <hr class="my-3">

                    <!-- Name -->
                    <div class="mb-4">
                        <label for="name" class="form-label text-dark" style="font-weight: bold;">Your Name</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name" optional>
                    </div>

                    <!-- Email -->
                    <div class="mb-4">
                        <label for="email" class="form-label text-dark" style="font-weight: bold;">Email Address</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email" optional>
                    </div>

                    <!-- Phone Number -->
                    <div class="mb-4">
                        <label for="phone" class="form-label text-dark" style="font-weight: bold;">Phone Number</label>
                        <input type="tel" class="form-control" id="phone" name="phone" placeholder="Enter your phone number" optional>
                    </div>

                    <!-- Event Details Section -->
                    <h5 class="text-primary">Event Details</h5>
                    <hr class="my-3">

                    <!-- Event Name -->
                    <div class="mb-4">
                        <label for="event-name" class="form-label text-dark" style="font-weight: bold;">Event Name</label>
                        <input type="text" class="form-control" id="event-name" name="event_name" placeholder="Enter the event name" optional>
                    </div>

                    <!-- Event Description -->
                    <div class="mb-4">
                        <label for="event-description" class="form-label text-dark" style="font-weight: bold;">Event Description</label>
                        <textarea class="form-control" id="event-description" name="event_description" rows="4" placeholder="Describe your event idea" optional></textarea>
                    </div>

                    <!-- Expected Audience -->
                    <div class="mb-4">
                        <label for="audience" class="form-label text-dark" style="font-weight: bold;">Expected Audience</label>
                        <select class="form-select" id="audience" name="audience" optional>
                            <option value="">Select audience type</option>
                            <option value="students">Students</option>
                            <option value="professionals">Faculties</option>
                            <option value="both">Both</option>
                        </select>
                    </div>

                    <!-- Expected Audience Count -->
                    <div class="mb-4">
                        <label for="budget" class="form-label text-dark" style="font-weight: bold;">Expected Audience Count</label>
                        <input type="number" class="form-control" id="budget" name="audience_count" placeholder="Expected participants for the event" optional>
                    </div>

                    <!-- Additional Notes -->
                    <div class="mb-4">
                        <label for="notes" class="form-label text-dark" style="font-weight: bold;">Additional Notes</label>
                        <textarea class="form-control" id="notes" name="notes" rows="4" placeholder="Any additional details or notes" optional></textarea>
                    </div>

                    <!-- Submit Button -->
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary btn-lg rounded-pill shadow-lg" style="animation: fadeInUp 1.3s ease; padding: 12px 24px;">
                            Submit Event Idea
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@include('layouts.footer')

@endsection

<style>
    /* Custom styling for the loading spinner */
    #loading-bar {
        width: 100%;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        z-index: 9999;
    }
</style>


<script>
    document.addEventListener('DOMContentLoaded', function() {
        const form = document.getElementById('eventForm');

        if (form) {
            form.addEventListener('submit', function(e) {
                e.preventDefault();

                console.log("Form submission started."); // Debugging statement

                // Show the loading spinner
                document.getElementById('loading-bar').style.display = 'block';

                // Disable the submit button to prevent multiple submissions
                document.querySelector('button[type="submit"]').disabled = true;

                // Create a FormData object to send the form data
                let formData = new FormData(this);

                // Send the form data via Ajax
                fetch("{{ route('eventProposal.sentmail') }}", {
                        method: "POST",
                        body: formData,
                        headers: {
                            "X-CSRF-TOKEN": document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                        }
                    })
                    .then(response => response.json()) // Parse the response as JSON
                    .then(data => {
                        // Hide the loading spinner
                        document.getElementById('loading-bar').style.display = 'none';
                        console.log("Response received."); // Debugging statement

                        // Re-enable the submit button
                        document.querySelector('button[type="submit"]').disabled = false;

                        // Handle success or error
                        if (data.success) {
                            alert(data.message); // Show success message
                            window.location.href = '/';
                            // location.reload(); // Reload the page to show the success message
                        } else {
                            alert(data.error); // Show error message
                        }
                    })
                    .catch(error => {
                        // Hide the loading spinner and re-enable the submit button in case of an error
                        document.getElementById('loading-bar').style.display = 'none';
                        document.querySelector('button[type="submit"]').disabled = false;
                        alert('An error occurred, please try again later.');
                    });
            });
        } else {
            console.error("Form element not found.");
        }
    });
</script>
<!-- <script src="{{asset('assets/js/eventProposal.js')}}"></script> -->