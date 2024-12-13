<!-- Preloader -->
<div id="preloader" class="preloader">
    <div class="spinner-border text-primary" role="status">
        <span class="visually-hidden">Loading...</span>
    </div>
</div>

<style>
    /* Preloader Styles */
    .preloader {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(255, 255, 255, 0.7);  /* Semi-transparent white background */
        display: flex;
        justify-content: center;
        align-items: center;
        z-index: 9999;  /* Ensures it appears above all other content */
    }

    .spinner-border {
        width: 3rem;
        height: 3rem;
        border-width: 0.25em;
    }
</style>
