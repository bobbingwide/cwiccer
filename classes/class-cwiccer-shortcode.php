<?php

class cwiccer_shortcode
{

    function __construct()  {

    }

    function run($atts, $content, $tag)     {

        $this->enqueue_css();
        //$this->do_cwiccer_logo_html();
        $this->do_cwiccer_logo_before();
        $this->do_cwiccer_logo_inner();
        $this->do_cwiccer_logo_after();
        return bw_ret();
    }

    function enqueue_css()   {
        if (!wp_style_is('cwiccer', 'registered')) {
            wp_register_style('cwiccer', oik_url('css/cwiccer.css', 'cwiccer'), false);
        }
        wp_enqueue_style('cwiccer');
    }

    function do_cwiccer_logo_before() {
        $html = '<article class="lh-root lh-vars">
        <div class="lh-scores-wrapper">
        <div class="lh-scores-container">
            <div class="lh-pyro">
                <div class="lh-before"></div>
                <div class="lh-after"></div>
            </div>
            <div class="lh-scores-header">
            ';
        e( $html );
    }

    function do_cwiccer_logo_inner() {

        $this->do_score( 35, 'c' );
        $this->do_score( 46, 'w' );
        $this->do_score( 57, 'i' );
        $this->do_score( 68, 'c' );
        $this->do_score( 79, 'c' );
        $this->do_score( 90, 'e' );
        $this->do_score( 99, 'r');


    }

    function do_score( $score, $gauge_string=null ) {
        $score = $this->validate_score( $score );
        $degrees = $this->degrees( $score );
        if ( null === $gauge_string ) {
            $gauge_string = $score;
        }

        $result = $this->score( $score );

        $this->do_gauge( $score, $degrees, $result, $gauge_string );



    }

    function do_gauge( $score, $degrees, $result, $gauge_string ) {

        c( $score );
        c( $degrees );
        c( $result );
        c( $gauge_string );

        $html = '<a class="lh-gauge__wrapper lh-gauge__wrapper--';
        $html .= $result;
        $html .= '" href="#c35">';
        $html .= '<div class="lh-gauge__svg-wrapper">';
        $html .= '<svg class="lh-gauge" viewBox="0 0 120 120">';
        $html .= '<circle class="lh-gauge-base" r="56" cx="60" cy="60" stroke-width="8"></circle>';
        $html .= '<circle class="lh-gauge-arc" r="56" cx="60" cy="60" stroke-width="8" style="transform: rotate(-87.9537deg); stroke-dasharray: ';
        $html .= $degrees;
        $html .= ', 351.858;"></circle>';
        $html .= '</svg></div><div class="lh-gauge__percentage">';
        $html .= $gauge_string;
        $html .= '</div></a>';
        e( $html );
    }

    /**
     * Validates the score.
     * If numeric it should be between 0 and 100
     * If not then determine it from the first character's binary value.
    */
    function validate_score( $score ) {
        // @TODO
       return $score;
    }

    function degrees( $score ) {
        $degrees = 360 * $score / 100;
        return $degrees;
    }

    function score( $score ) {
        if ( $score < 50 ) {
            $result = 'fail';
        } elseif ( $score < 90 ) {
            $result = 'average';
        } else {
            $result = 'pass';
        }
        return $result;
    }


    function do_cwiccer_logo_after() {
        $html = '
        </div>
        </div>
        </div>
        </article>
        ';
        e( $html );
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


               </div>
        </div>
        </div>
    </article>
    ';
        e($html);
    }

}