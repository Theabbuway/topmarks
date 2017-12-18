<?php
/**
 * Created by PhpStorm.
 * User: TABY
 * Date: 12/17/2017
 * Time: 11:55 PM
 */


    /** set your paypal credential **/
return array(

    /** set your paypal credential **/

    'client_id' =>'AVpxVMQ8OPiaCDszXUEFThST-Q94ESW5mnd-r0lKzuAObbAMUop2hoV61yDgqG1jcEWcD-nOZuitEt-R',

    'secret' => 'EEgrpRfSexLU5YmTzW2UpzgOZYHelqVBfKzTajKSJAzcl1yNru4_hAOUakrEu1zYPLBTFKTZpW8b9lN3',

    /**

     * SDK configuration

     */

    'settings' => array(

        /**

         * Available option 'sandbox' or 'live'

         */

        'mode' => 'live',

        /**

         * Specify the max request time in seconds

         */

        'http.ConnectionTimeOut' => 1000,

        /**

         * Whether want to log to a file

         */

        'log.LogEnabled' => true,

        /**

         * Specify the file that want to write on

         */

        'log.FileName' => storage_path() . '/logs/paypal.log',

        /**

         * Available option 'FINE', 'INFO', 'WARN' or 'ERROR'

         *

         * Logging is most verbose in the 'FINE' level and decreases as you

         * proceed towards ERROR

         */

        'log.LogLevel' => 'FINE'

    ),

);

