@extends('dashboard')
@section('content')

<style>
    .timeline-container {
        display: flex;
        flex-direction: row;
        justify-content: space-between;
    }
    .timeline {
        flex: 1;
        padding: 20px;
    }
    .timeline-item {
        margin: 20px 0;
        position: relative;
    }
    .timeline-item::before {
        content: "";
        position: absolute;
        top: 0;
        left: -20px;
        width: 2px;
        height: 100%;
        background-color: #333;
    }
    .timeline-content {
        margin-left: 20px;
    }
</style>

<div class="content">
    <div class="background-image w-100 vh-100 d-flex justify-content-center align-items-center" style="background-image: url(img/place/Hotel1.jpg); background-size: cover; background-position: center; position: relative;">
        <div class="content text-center" style="position: relative; z-index: 1;">
            <h1 class="text-white" style="font-size: 40px; font-family: 'Lucida Bright', sans-serif; font-weight: bold; margin-top: -50px;">About Us</h1>
            <h2 class="text-white custom-h2" style="font-size: 60px; font-family: 'Lucida Bright', sans-serif; font-weight: bold; margin-top: 10px;">Seaside Serenity Awaits</h2>
        </div>
        <div class="hotel1" style="position: relative; z-index: 1;">
            <div class="cta-buttons">
                <a href="#know-us" class="cta-button" style="text-decoration: none;">Get To Know Us</a>
            </div>
        </div>
    </div>

    <div id="know-us" class="bg-subtle" style="padding-top: 60px; padding-bottom: 70px;">
        <div class="container d-flex justify-content-center align-items-center">
            <div class="position-relative">
                <h2 class="title" style="font-size: 50px; font-family: 'Lucida Bright', sans-serif; font-weight: bold;">About Us</h2>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="timeline-container">
                    <div class="timeline">
                        <div class="timeline-item">
                            <div class="year">
                                <h3>2019:</h3>
                            </div>
                            <div class="timeline-content">
                                <h3>More Branches Worldwide</h3>
                                <p>As the years passed, the hotel continued to grow and expand. By 2019, it had become a global brand with branches all over the world. The founders had a vision of not just running a successful hotel but also spreading their commitment to exceptional hospitality across borders. They continued to set up branches in diverse locations, each with its unique charm and appeal. The hotel had become a household name, and it was synonymous with top-notch service and unforgettable experiences.</p>
                            </div>
                        </div>

                        <div class="timeline-item">
                            <div class="year">
                                <h3>2011:</h3>
                            </div>
                            <div class="timeline-content">
                                <h3>Company Full Blast</h3>
                                <p>Fast forward to 2011, and the company was now operating at full blast. The founders had been tirelessly working to turn their dream into a reality. They faced numerous challenges, from securing funding to designing the hotel's concept. Yet, they persevered, and their hard work paid off. The company was up and running, and it was no longer a distant dream but a thriving business. Their dedication and commitment to excellence were reflected in the quality of service they provided to their guests.</p>
                            </div>
                        </div>

                        <div class="timeline-item">
                            <div class="year">
                                <h3>2008:</h3>
                            </div>
                            <div class="timeline-content">
                                <h3>The Birth of the Company</h3>
                                <p>In the year 2008, a group of visionary entrepreneurs came together with a dream to create something extraordinary. Their dream was to establish a hotel that would not only provide luxurious accommodations but also be a beacon of hospitality. The journey began with the birth of the company, where the first seeds of this dream were sown. Far from the bustling cities, they found a piece of land hidden behind the word mountains, far from the countries of Vokalia and Consonantia. This was where the story of their hotel's foundation truly began.</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
