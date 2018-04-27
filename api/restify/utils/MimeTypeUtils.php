<?php
/**
 * restifydb - expose your databases as REST web services in minutes
 *
 * @copyright (C) 2015 Daniel CHIRITA
 * @version 1.1
 * @author Daniel CHIRITA <daniel.chirita at gmail dot com>
 * @link https://restifydb.com/
 *
 * This file is part of restifydb framework.
 *
 * @license https://restifydb.com/#license
 *
 */


namespace restify\utils;


class MimeTypeUtils
{

    public static function mimeTypeToExtension($mimeType)
    {
        $result = 'unknown';
        foreach (self::$mimeTypes as $mime => $ext) {
            if (StringUtils::startsWith($mimeType, $mime)) {
                $result = $ext;
            }
        }

        return $result;
    }

    private static $mimeTypes = array(
        'application/x-authorware-bin' => 'aab',
        'application/x-authorware-map' => 'aam',
        'application/x-authorware-seg' => 'aas',
        'text/vnd.abc' => 'abc',
        'video/animaflex' => 'afl',
        'audio/x-aiff' => 'aiff',
        'application/x-aim' => 'aim',
        'text/x-audiosoft-intra' => 'aip',
        'application/x-navi-animation' => 'ani',
        'application/x-nokia-9000-communicator-add-on-software' => 'aos',
        'application/mime' => 'aps',
        'image/x-jg' => 'art',
        'video/x-ms-asf' => 'asf',
        'text/asp' => 'asp',
        'video/x-ms-asf-plugin' => 'asx',
        'audio/x-au' => 'au',
        'video/x-msvideo' => 'avi',
        'video/avs-video' => 'avs',
        'application/x-bcpio' => 'bcpio',
        'application/x-macbinary' => 'bin',
        'image/bmp' => 'bm',
        'image/x-windows-bmp' => 'bmp',
        'application/book' => 'book',
        'application/x-bsh' => 'bsh',
        'application/x-bzip' => 'bz',
        'application/x-bzip2' => 'bz2',
        'application/vnd.ms-pki.seccat' => 'cat',
        'application/clariscad' => 'ccad',
        'application/x-cocoa' => 'cco',
        'application/x-chat' => 'chat',
        'application/x-java-class' => 'class',
        'application/x-cpio' => 'cpio',
        'text/x-c' => 'cpp',
        'application/x-cpt' => 'cpt',
        'application/pkix-crl' => 'crl',
        'application/x-x509-user-cert' => 'crt',
        'text/x-script.csh' => 'csh',
        'text/css' => 'css',
        'application/x-deepv' => 'deepv',
        'application/x-x509-ca-cert' => 'der',
        'video/x-dl' => 'dl',
        'application/commonground' => 'dp',
        'application/drafting' => 'drw',
        'video/x-dv' => 'dv',
        'application/x-dvi' => 'dvi',
        'model/vnd.dwf' => 'dwf',
        'application/x-director' => 'dxr',
        'text/x-script.elisp' => 'el',
        'application/x-elc' => 'elc',
        'application/x-esrehber' => 'es',
        'text/x-setext' => 'etx',
        'application/x-envoy' => 'evy',
        'application/vnd.fdf' => 'fdf',
        'image/fif' => 'fif',
        'video/x-fli' => 'fli',
        'text/vnd.fmi.flexstor' => 'flx',
        'video/x-atomic3d-feature' => 'fmf',
        'text/x-fortran' => 'for',
        'image/vnd.net-fpx' => 'fpx',
        'application/freeloader' => 'frl',
        'image/g3fax' => 'g3',
        'image/gif' => 'gif',
        'video/x-gl' => 'gl',
        'audio/x-gsm' => 'gsm',
        'application/x-gsp' => 'gsp',
        'application/x-gss' => 'gss',
        'application/x-gtar' => 'gtar',
        'application/x-gzip' => 'gz',
        'multipart/x-gzip' => 'gzip',
        'application/x-hdf' => 'hdf',
        'application/x-helpfile' => 'help',
        'text/x-h' => 'hh',
        'text/x-script' => 'hlb',
        'application/x-winhelp' => 'hlp',
        'application/vnd.hp-hpgl' => 'hpgl',
        'application/x-mac-binhex40' => 'hqx',
        'application/hta' => 'hta',
        'text/x-component' => 'htc',
        'text/webviewhtml' => 'htt',
        'text/html' => 'htx',
        'x-conference/x-cooltalk' => 'ice',
        'image/x-icon' => 'ico',
        'image/ief' => 'iefs',
        'model/iges' => 'igs',
        'application/x-ima' => 'ima',
        'application/x-httpd-imap' => 'imap',
        'application/inf' => 'inf',
        'application/x-internett-signup' => 'ins',
        'application/x-ip2' => 'ip',
        'video/x-isvideo' => 'isu',
        'audio/it' => 'it',
        'application/x-inventor' => 'iv',
        'i-world/i-vrml' => 'ivr',
        'application/x-livescreen' => 'ivy',
        'audio/x-jam' => 'jam',
        'text/x-java-source' => 'java',
        'application/x-java-commerce' => 'jcm',
        'image/jpeg' => 'jpeg',
        'image/pjpeg' => 'jpg',
        'image/x-jps' => 'jps',
        'application/x-javascript' => 'js',
        'image/jutvision' => 'jut',
        'music/x-karaoke' => 'kar',
        'text/x-script.ksh' => 'ksh',
        'audio/x-liveaudio' => 'lam',
        'application/x-lha' => 'lha',
        'audio/x-nspaudio' => 'lma',
        'text/x-script.lisp' => 'lsp',
        'text/x-la-asf' => 'lsx',
        'application/x-latex' => 'ltx',
        'application/x-lzh' => 'lzh',
        'application/x-lzx' => 'lzx',
        'text/x-m' => 'm',
        'audio/x-mpequrl' => 'm3u',
        'application/x-troff-man' => 'man',
        'application/x-navimap' => 'map',
        'application/mbedlet' => 'mbd',
        'application/x-magic-cap-package-1.0' => 'mc$',
        'application/x-mathcad' => 'mcd',
        'text/mcf' => 'mcf',
        'application/netmc' => 'mcp',
        'application/x-troff-me' => 'me',
        'message/rfc822' => 'mhtml',
        'x-music/x-midi' => 'midi',
        'application/x-mif' => 'mif',
        'www/mime' => 'mime',
        'audio/x-vnd.audioexplosion.mjuicemediafile' => 'mjf',
        'video/x-motion-jpeg' => 'mjpg',
        'application/x-meme' => 'mm',
        'application/base64' => 'mme',
        'audio/x-mod' => 'mod',
        'video/x-mpeq2a' => 'mp2',
        'video/x-mpeg' => 'mp3',
        'video/mpeg' => 'mpg',
        'audio/mpeg' => 'mpga',
        'application/vnd.ms-project' => 'mpp',
        'application/x-project' => 'mpx',
        'application/marc' => 'mrc',
        'application/x-troff-ms' => 'ms',
        'video/x-sgi-movie' => 'mv',
        'audio/make' => 'my',
        'application/x-vnd.audioexplosion.mzz' => 'mzz',
        'image/naplps' => 'naplps',
        'application/x-netcdf' => 'nc',
        'application/vnd.nokia.configuration-message' => 'ncm',
        'image/x-niff' => 'niff',
        'application/x-mix-transfer' => 'nix',
        'application/x-conference' => 'nsc',
        'application/x-navidoc' => 'nvd',
        'application/oda' => 'oda',
        'application/x-omc' => 'omc',
        'application/x-omcdatamaker' => 'omcd',
        'application/x-omcregerator' => 'omcr',
        'text/x-pascal' => 'p',
        'application/x-pkcs10' => 'p10',
        'application/x-pkcs12' => 'p12',
        'application/x-pkcs7-signature' => 'p7a',
        'application/x-pkcs7-mime' => 'p7m',
        'application/x-pkcs7-certreqresp' => 'p7r',
        'application/pkcs7-signature' => 'p7s',
        'text/pascal' => 'pas',
        'image/x-portable-bitmap' => 'pbm',
        'application/x-pcl' => 'pcl',
        'image/x-pict' => 'pct',
        'image/x-pcx' => 'pcx',
        'application/pdf' => 'pdf',
        'audio/make.my.funk' => 'pfunk',
        'image/x-portable-greymap' => 'pgm',
        'image/pict' => 'pict',
        'application/x-newton-compatible-pkg' => 'pkg',
        'application/vnd.ms-pki.pko' => 'pko',
        'text/x-script.perl' => 'pl',
        'application/x-pixclscript' => 'plx',
        'text/x-script.perl-module' => 'pm',
        'application/x-pagemaker' => 'pm5',
        'image/x-portable-anymap' => 'pnm',
        'model/x-pov' => 'pov',
        'image/x-portable-pixmap' => 'ppm',
        'application/x-mspowerpoint' => 'ppt',
        'application/mspowerpoint' => 'ppz',
        'application/x-freelance' => 'pre',
        'application/pro_eng' => 'prt',
        'application/postscript' => 'ps',
        'paleovu/x-pv' => 'pvu',
        'application/vnd.ms-powerpoint' => 'pwz',
        'text/x-script.phyton' => 'py',
        'applicaiton/x-bytecode.python' => 'pyc',
        'audio/vnd.qcelp' => 'qcp',
        'x-world/x-3dmf' => 'qd3d',
        'video/quicktime' => 'qt',
        'video/x-qtc' => 'qtc',
        'image/x-quicktime' => 'qtif',
        'audio/x-realaudio' => 'ra',
        'image/x-cmu-raster' => 'ras',
        'image/cmu-raster' => 'rast',
        'text/x-script.rexx' => 'rexx',
        'image/vnd.rn-realflash' => 'rf',
        'image/x-rgb' => 'rgb',
        'audio/mid' => 'rmi',
        'audio/x-pn-realaudio' => 'rmm',
        'application/vnd.nokia.ringing-tone' => 'rng',
        'application/vnd.rn-realplayer' => 'rnx',
        'image/vnd.rn-realpix' => 'rp',
        'audio/x-pn-realaudio-plugin' => 'rpm',
        'text/vnd.rn-realtext' => 'rt',
        'text/richtext' => 'rtx',
        'video/vnd.rn-realvideo' => 'rv',
        'text/x-asm' => 's',
        'audio/s3m' => 's3m',
        'video/x-scm' => 'scm',
        'application/x-sdp' => 'sdp',
        'application/sounder' => 'sdr',
        'application/x-sea' => 'sea',
        'application/set' => 'set',
        'text/x-sgml' => 'sgml',
        'text/x-script.sh' => 'sh',
        'application/x-shar' => 'shar',
        'audio/x-psid' => 'sid',
        'application/x-stuffit' => 'sit',
        'application/x-koan' => 'skt',
        'application/x-seelogo' => 'sl',
        'application/smil' => 'smil',
        'audio/x-adpcm' => 'snd',
        'application/solids' => 'sol',
        'application/futuresplash' => 'spl',
        'application/x-sprite' => 'sprite',
        'text/x-server-parsed-html' => 'ssi',
        'application/streamingmedia' => 'ssm',
        'application/vnd.ms-pki.certstore' => 'sst',
        'application/x-navistyle' => 'stl',
        'application/step' => 'stp',
        'application/x-sv4cpio' => 'sv4cpio',
        'application/x-sv4crc' => 'sv4crc',
        'image/x-dwg' => 'svf',
        'x-world/x-svr' => 'svr',
        'application/x-shockwave-flash' => 'swf',
        'text/x-speech' => 'talk',
        'application/x-tar' => 'tar',
        'application/x-tbook' => 'tbk',
        'text/x-script.tcl' => 'tcl',
        'text/x-script.tcsh' => 'tcsh',
        'application/x-tex' => 'tex',
        'application/x-texinfo' => 'texinfo',
        'image/x-tiff' => 'tiff',
        'application/x-troff' => 'tr',
        'audio/tsp-audio' => 'tsi',
        'audio/tsplayer' => 'tsp',
        'text/tab-separated-values' => 'tsv',
        'image/florian' => 'turbot',
        'text/plain' => 'txt',
        'text/x-uil' => 'uil',
        'application/i-deas' => 'unv',
        'text/uri-list' => 'uris',
        'multipart/x-ustar' => 'ustar',
        'text/x-uuencode' => 'uue',
        'application/x-cdlink' => 'vcd',
        'text/x-vcalendar' => 'vcs',
        'application/vda' => 'vda',
        'video/vdo' => 'vdo',
        'application/groupwise' => 'vew',
        'video/vnd.vivo' => 'vivo',
        'application/vocaltec-media-desc' => 'vmd',
        'application/vocaltec-media-file' => 'vmf',
        'audio/x-voc' => 'voc',
        'video/vosaic' => 'vos',
        'audio/voxware' => 'vox',
        'audio/x-twinvq' => 'vqf',
        'audio/x-twinvq-plugin' => 'vql',
        'x-world/x-vrt' => 'vrt',
        'application/x-visio' => 'vsw',
        'application/wordperfect6.1' => 'w61',
        'audio/x-wav' => 'wav',
        'application/x-qpro' => 'wb1',
        'image/vnd.wap.wbmp' => 'wbmp',
        'application/vnd.xara' => 'web',
        'application/x-123' => 'wk1',
        'windows/metafile' => 'wmf',
        'text/vnd.wap.wml' => 'wml',
        'application/vnd.wap.wmlc' => 'wmlc',
        'text/vnd.wap.wmlscript' => 'wmls',
        'application/vnd.wap.wmlscriptc' => 'wmlsc',
        'application/msword' => 'word',
        'application/wordperfect6.0' => 'wp5',
        'application/wordperfect' => 'wp6',
        'application/x-wpwin' => 'wpd',
        'application/x-lotus' => 'wq1',
        'application/x-wri' => 'wri',
        'x-world/x-vrml' => 'wrz',
        'text/scriplet' => 'wsc',
        'application/x-wais-source' => 'wsrc',
        'application/x-wintalk' => 'wtk',
        'image/png' => 'png',
        'image/xbm' => 'xbm',
        'video/x-amt-demorun' => 'xdr',
        'xgl/drawing' => 'xgz',
        'image/vnd.xiff' => 'xif',
        'application/excel' => 'xl',
        'application/x-excel' => 'xlv',
        'application/x-msexcel' => 'xlw',
        'audio/xm' => 'xm',
        'text/xml' => 'xml',
        'xgl/movie' => 'xmz',
        'application/x-vnd.ls-xpix' => 'xpix',
        'image/xpm' => 'xpm',
        'video/x-amt-showrun' => 'xsr',
        'image/x-xwindowdump' => 'xwd',
        'chemical/x-pdb' => 'xyz',
        'application/x-compressed' => 'z',
        'multipart/x-zip' => 'zip',
        'application/octet-stream' => 'zoo',
        'text/x-script.zsh' => 'zsh'
    );
}

?>