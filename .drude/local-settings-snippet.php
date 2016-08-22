
// Include local settings file.
// Added by: `dsh add-local-settings`
$local_conf_file_path = __DIR__ . '/settings.local.php';
if (file_exists($local_conf_file_path)) {
  require($local_conf_file_path);
}
