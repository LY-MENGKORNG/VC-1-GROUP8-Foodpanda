<main class="main users chart-page bg-white position-relative" id="skip-target">
    <section class="section bg-white d-flex justify-content-center align-items-center osahan-track-order-page position-absolute w-100 top-0">
        <div class="mapouter w-100 position-relative d-flex d-flex justify-content-center align-items-center ">
            <div class="gmap_canvas w-100">
                <iframe class="gmap_iframe" width="100%" height="700px" frameborder="0"
                    scrolling="no" marginheight="0" marginwidth="0"
                    src="https://maps.google.com/maps?hl=en&amp;q=<?= isset($order_tracking["latitude"]) ? $order_tracking["latitude"] : '11.556374' ?>,<?= isset($order_tracking["longitude"]) ? $order_tracking["longitude"] : '104.928207' ?>&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe>
            </div>
            <div class="osahan-point mx-auto mt-5 position-absolute top-0"></div>
        </div>
    </section>
</main>