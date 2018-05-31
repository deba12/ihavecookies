<html>
<head>
    <meta charset="UTF-8">
    <title>I have &#x1F36A;s</title>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script type="text/javascript" src="jquery.ihavecookies.js"></script>
    <script type="text/javascript">
    $(document).ready(function() {
        $('body').ihavecookies({
            title: '&#x1F36A; Accept Cookies & Privacy Policy?',
            message: 'There are no cookies used on this site, but if there were this message could be customised to provide more details. Click the <strong>accept</strong> button below to see the optional callback in action...',
            delay: 600,
            expires: 1,
            link: '#privacy',
            onAccept: function(){
                var myPreferences = $.fn.ihavecookies.cookie();
                console.log('Yay! The following preferences were saved...');
                console.log(myPreferences);
            },
            uncheckBoxes: true,
            acceptBtnLabel: 'Accept Cookies',
            moreInfoLabel: 'More information',
            cookieTypesTitle: 'Select which cookies you want to accept',
            fixedCookieTypeLabel: 'Essential',
            fixedCookieTypeDesc: 'These are essential for the website to work correctly.'
        });

        if ($.fn.ihavecookies.preference('marketing') === true) {
            console.log('This should run because marketing is accepted.');
        }
    });
    </script>
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab|Quicksand:400,500" rel="stylesheet">
    <style type="text/css">
    :root {
        --purple: #3B3646;
        --red: #EE4B5A;
    }
    * {
        padding: 0;
        margin: 0;
        border: none;
    }
    body {
        padding: 30px;
        color: #333;
        font-family: 'Roboto Slab', system-ui;
        font-weight: 400;
        font-style: normal;
        font-size: 18px;
    }
    .container {
        margin: 0 auto;
        max-width: 550px;
    }
    .highlight {
        background: rgba(255,215,0,0.115);
    }
    h1 {
        color: var(--red);
        font-family: 'Quicksand', sans-serif;
        font-weight: 500;
        font-size: 30px;
        margin-bottom: 20px;
    }
    h3 {
        font-family: 'Quicksand', sans-serif;
        font-size: 21px;
        font-weight: 500;
        color: var(--red);
        margin-bottom: 20px;
    }
    p, ul {
        margin-bottom: 20px;
        line-height: 1.75em;
    }
    li {
        list-style: none;
        margin-bottom: 10px;
    }
    li:last-child {
        margin-bottom: 0;
    }
    input[type="checkbox"] {
        margin-top: 10px;
        margin-right: 15px;
        float: left;
    }
    label {
        display: inline-block;
        max-width: 90%;
    }
    code {
        color: var(--red);
        font-family: monospace;
        font-size: 16px;
        background: #f7f7f7;
        padding: 3px 5px;
        border-radius: 3px;
        border: 1px solid #ebebeb;
    }
    /* Cookie Dialog */
    #gdpr-cookie-message {
        position: fixed;
        right: 30px;
        bottom: 30px;
        max-width: 375px;
        background-color: var(--purple);
        padding: 20px;
        border-radius: 5px;
        box-shadow: 0 6px 6px rgba(0,0,0,0.25);
        margin-left: 30px;
        font-family: system-ui;
    }
    #gdpr-cookie-message h4 {
        color: var(--red);
        font-family: 'Quicksand', sans-serif;
        font-size: 18px;
        font-weight: 500;
        margin-bottom: 10px;
    }
    #gdpr-cookie-message h5 {
        color: var(--red);
        font-family: 'Quicksand', sans-serif;
        font-size: 15px;
        font-weight: 500;
        margin-bottom: 10px;
    }
    #gdpr-cookie-message p, #gdpr-cookie-message ul {
        color: white;
        font-size: 15px;
        line-height: 1.5em;
    }
    #gdpr-cookie-message p:last-child {
        margin-bottom: 0;
        text-align: right;
    }
    #gdpr-cookie-message li {
        width: 49%;
        display: inline-block;
    }
    #gdpr-cookie-message a {
        color: var(--red);
        text-decoration: none;
        font-size: 15px;
        padding-bottom: 2px;
        border-bottom: 1px dotted rgba(255,255,255,0.75);
        transition: all 0.3s ease-in;
    }
    #gdpr-cookie-message a:hover {
        color: white;
        border-bottom-color: var(--red);
        transition: all 0.3s ease-in;
    }
    #gdpr-cookie-message button {
        border: none;
        background: var(--red);
        color: white;
        font-family: 'Quicksand', sans-serif;
        font-size: 15px;
        padding: 7px;
        border-radius: 3px;
        margin-left: 15px;
        cursor: pointer;
        transition: all 0.3s ease-in;
    }
    #gdpr-cookie-message button:hover {
        background: white;
        color: var(--red);
        transition: all 0.3s ease-in;
    }
    button#gdpr-cookie-advanced {
        background: white;
        color: var(--red);
    }
    #gdpr-cookie-message button:disabled {
        opacity: 0.3;
    }
    #gdpr-cookie-message input[type="checkbox"] {
        float: none;
        margin-top: 0;
        margin-right: 5px;
    }
    </style>
</head>
<body>
    <div class="container">
        <h1>ihavecookies jQuery Plugin in action</h1>
        <p>When you load this page you will see an example of the cookie message popup in the bottom right corner.</p>
        <p>If you don't see it, clear your cookies or delete the cookie called <code>cookieControl</code>.</p>

        <h3>Checkboxes</h3>

        <p>With the recent EU regulations, visitors now must be able to opt-in to marketing, preferences, etc themselves. The plugin has an option that enables checkboxes to be unchecked automatically on page load.</p>

        <ul>
            <li><input type="checkbox" id="opt1" value="Y" checked> <label for="opt1">Checked by default &dash; remains checked</label>
            <li><input type="checkbox" id="opt2" value="Y"> <label for="opt2">Unchecked by default &dash; remains unchecked</label>
            <li><input type="checkbox" id="opt3" value="Y" class="ihavecookies" checked> <label for="opt3">Checked by default &dash; <em>ihavecookies</em> automatically unchecks this on page load because is has the class <code>ihavecookies</code> applied to it.</label>
        </ul>
    </div>
</body>
</html>
