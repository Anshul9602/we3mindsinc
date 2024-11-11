<style>
.image-container {
    position: relative;
    overflow: hidden;
    cursor: pointer;
}

.image-container img {
    width: 100%;
    transition: transform 0.3s ease;
}

.image-container:hover img {
    transform: scale(1.1);
}

.caption {
    position: absolute;
    top: 50%; /* Position in the middle of the container */
    left: 50%;
    transform: translate(-50%, -50%); /* Center the caption */
    color: #fff;
    width: 100%;
    text-align: center;
    padding: 10px;
    opacity: 0;
    font-size:26px;
    font-weight:500;
    z-index: 999999999;
    transition: opacity 0.3s ease;
    pointer-events: none; /* Make sure the hover effect works on the image */
}

.image-container:hover .caption {
    opacity: 1;
}

.image-container:hover::after {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.6); /* Black tint over the whole image */
    transition: background-color 0.3s ease;
    pointer-events: none; /* Make sure the hover effect works on the image */
}
.image-container {
        height: 500px; /* Set a fixed height for the image containers */
        overflow: hidden; /* Hide any overflow */
    }

    .image-container img {
        width: 100%;
        height: 100%;
        object-fit: cover; /* Zoom and crop the image to cover the container */
    }


    #caption_animation {
    overflow: hidden; /* Hide overflowing content */
    border-right: 0.15em solid #fe5900; /* Add a border to simulate the typing cursor */
    white-space: nowrap;

    /* Animation properties */
    animation: typing 3s steps(30) infinite;
}

@keyframes typing {
    from {
        width: 0;
    }
    to {
        width: 30%;
    }
}

/* .image-container .mobile-image {
    display: none;
} */

/* Mobile styles (applied when screen width is less than or equal to 767px) */
@media only screen and (max-width: 767px) {
    .image-container .desktop-image {
        display: none;
    }

    .image-container .mobile-image {
        display: block;
    }
}


</style>

<div class="row">
    <div class="col-sm-12 col-12 image-container" style="padding-right:0px; padding-left:0px;">
        <a href="<?php echo base_url('about');?>">
            <img class="desktop-image" src="<?php echo base_url('assets/images/img/Home Page_ Use for Abouts  us backgorund pic.png');?>" alt="" />
            <img class="mobile-image" src="<?php echo base_url('assets/images/img/Home_mob.jpg');?>" alt="" />
            <div class="caption" style="opacity: 2; font-size:40px">
                CANADA’S LARGEST FACILITY
            </div>
        </a>   
    </div>
    <div class="col-sm-6 col-12 image-container" style="padding-right:0px; padding-left:0px;">
        <a href="<?php echo base_url('drillbit');?>">
            <img class="desktop-image" src="<?php echo base_url('assets/images/img/sss.jpg');?>" alt="" />
            <img class="mobile-image" src="<?php echo base_url('assets/images/img/sss_mob.jpg');?>" alt="" />
            <div class="caption">DRILL BIT RECONDITIONING</div>
        </a> 
    </div>
    <div class="col-sm-6 col-12 image-container" style="padding-right:0px; padding-left:0px">
        <a href="<?php echo base_url('roadStabilization');?>">
            <img class="desktop-image" src="<?php echo base_url('assets/images/img/ncb.jpg');?>" alt="" />
            <img class="mobile-image" src="<?php echo base_url('assets/images/img/ro_mob.jpg');?>" alt="" />
            <div class="caption">DUST CONTROL & ROAD STABILIZATION</div>
        </a>   
    </div>
</div>
 