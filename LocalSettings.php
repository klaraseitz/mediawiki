## Database settings
$url = parse_url(getenv("DATABASE_URL"));

$wgDBtype = "postgres";
$wgDBserver = $url["host"];
$wgDBname = substr($url["path"], 1);
$wgDBuser = $url["user"];
$wgDBpassword = $url["pass"];
