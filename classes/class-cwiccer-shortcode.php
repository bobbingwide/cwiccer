<?php

class cwiccer_shortcode
{

    function __construct()  {

    }

    function run($atts, $content, $tag)     {

        $this->enqueue_css();
        $this->do_cwiccer_logo_html();
        return bw_ret();
    }

    function enqueue_css()
    {
        if (!wp_style_is('cwiccer', 'registered')) {
            wp_register_style('cwiccer', oik_url('css/cwiccer.css', 'cwiccer'), false);
        }
        wp_enqueue_style('cwiccer');
    }

    /**
     * Displays the cwiccer logo.
     *
     */
    function do_cwiccer_logo_html()     {

        $html = '<article class="lh-root lh-vars">


    <div class="lh-scores-wrapper">
        <div class="lh-scores-container">
            <div class="lh-pyro">
                <div class="lh-before"></div>
                <div class="lh-after"></div>
            </div>
            <div class="lh-scores-header">
                <a class="lh-gauge__wrapper lh-gauge__wrapper--fail" href="#c35">
                    <div class="lh-gauge__svg-wrapper">
                        <svg class="lh-gauge" viewBox="0 0 120 120">
                            <circle class="lh-gauge-base" r="56" cx="60" cy="60" stroke-width="8"></circle>
                            <circle class="lh-gauge-arc" r="56" cx="60" cy="60" stroke-width="8" style="transform: rotate(-87.9537deg); stroke-dasharray: 126.858, 351.858;"></circle>
                        </svg>
                    </div>
                    <div class="lh-gauge__percentage">c</div>
                </a>
                <a class="lh-gauge__wrapper lh-gauge__wrapper--fail" href="#w46">
                    <div class="lh-gauge__svg-wrapper">
                        <svg class="lh-gauge" viewBox="0 0 120 120">
                            <circle class="lh-gauge-base" r="56" cx="60" cy="60" stroke-width="8"></circle>
                            <circle class="lh-gauge-arc" r="56" cx="60" cy="60" stroke-width="8" style="transform: rotate(-87.9537deg); stroke-dasharray: 165.858, 351.858;"></circle>
                        </svg>
                    </div>
                    <div class="lh-gauge__percentage">w</div>
                </a>
                <a class="lh-gauge__wrapper lh-gauge__wrapper--average" href="#i57">
                    <div class="lh-gauge__svg-wrapper">
                        <svg class="lh-gauge" viewBox="0 0 120 120">
                            <circle class="lh-gauge-base" r="56" cx="60" cy="60" stroke-width="8"></circle>
                            <circle class="lh-gauge-arc" r="56" cx="60" cy="60" stroke-width="8" style="transform: rotate(-87.9537deg); stroke-dasharray: 205.858, 351.858;"></circle>
                        </svg>
                    </div>
                    <div class="lh-gauge__percentage">i</div>
                </a>
                <a class="lh-gauge__wrapper lh-gauge__wrapper--average" href="#c68">
                    <div class="lh-gauge__svg-wrapper"> <svg class="lh-gauge" viewBox="0 0 120 120">
                        <circle class="lh-gauge-base" r="56" cx="60" cy="60" stroke-width="8"></circle>
                        <circle class="lh-gauge-arc" r="56" cx="60" cy="60" stroke-width="8" style="transform: rotate(-87.9537deg); stroke-dasharray: 245.784, 351.858;"></circle>
                    </svg> </div>
                    <div class="lh-gauge__percentage">c</div>
                </a>

                <a class="lh-gauge__wrapper lh-gauge__wrapper--average" href="#c79">  <div class="lh-gauge__svg-wrapper">
                    <svg class="lh-gauge" viewBox="0 0 120 120">
                        <circle class="lh-gauge-base" r="56" cx="60" cy="60" stroke-width="8"></circle>
                        <circle class="lh-gauge-arc" r="56" cx="60" cy="60" stroke-width="8" style="transform: rotate(-87.9537deg); stroke-dasharray: 284.71, 351.858;"></circle>
                    </svg> </div> <div class="lh-gauge__percentage">c</div>
                </a>
                <a class="lh-gauge__wrapper lh-gauge__wrapper--pass" href="#e90">  <div class="lh-gauge__svg-wrapper">
                    <svg class="lh-gauge" viewBox="0 0 120 120">
                        <circle class="lh-gauge-base" r="56" cx="60" cy="60" stroke-width="8"></circle>
                        <circle class="lh-gauge-arc" r="56" cx="60" cy="60" stroke-width="8" style="transform: rotate(-87.9537deg); stroke-dasharray: 324.929, 351.858;"></circle> </svg> </div> <div class="lh-gauge__percentage">e</div>  </a>


                <a class="lh-gauge__wrapper lh-gauge__wrapper--pass" href="#r100">
                    <div class="lh-gauge__svg-wrapper">
                        <svg class="lh-gauge" viewBox="0 0 120 120">
                            <circle class="lh-gauge-base" r="56" cx="60" cy="60" stroke-width="8"></circle>
                            <circle class="lh-gauge-arc" r="56" cx="60" cy="60" stroke-width="8" style="transform: rotate(-87.9537deg); stroke-dasharray: 351.858, 351.858;"></circle>
                        </svg>
                    </div>
                    <div class="lh-gauge__percentage">r</div>
                    </a>


               </div></div> </div>
</article>
';
        e($html);
    }

}