/**
 * File for adding my notes
*/

Setup:


/**==================================
 * MAC OS Setup
==================================*/
MAC: {
    0: Download Codeigniter
    1: Exclude index.php from URL
}

MAC.excludeIndexPhp = {

}




/**==================================
 * WINDOWS OS Setup
==================================*/
WINDOWS: {
    0: Download Codeigniter
    1: Exclude index.php from URL (REFER -> WINDOWS.excludeIndexPhp)
}

WINDOWS.excludeIndexPhp = {
    httpd-vhosts:   'RewriteEngine on
                     RewriteCond $1 !^(index\.php|\/assets)
                     RewriteRule ^(.*)$ /index.php/$1 [L]'
}

WINDOWS.excludeIndexPhp.notes = {
    0: In Rewrite rule, the slash is important(prefix a slash in index.php)
    1. After making succesful, rewrite url, there will be issue in loading static files.
        1.1: Add your static files folder name in the Rewrite cond to get excluded from getting rewritten.
        EX: Earlier: 
                RewriteCond $1 !^(index\.php)
            After:
                RewriteCond $1 !^(index\.php|\/assets)
}


//==================================//