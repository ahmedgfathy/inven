<?php
$payload = file_get_contents('php://input');
file_put_contents('/var/www/html/inven/webhook.log', date('Y-m-d H:i:s') . " - Webhook received: " . $payload . "\n", FILE_APPEND);

// Execute the deploy script
exec('sh /var/www/html/inven/deploy.sh 2>&1', $output, $return_var);

// Log output
file_put_contents('/var/www/html/inven/webhook.log', date('Y-m-d H:i:s') . " - Deploy Output: " . implode("\n", $output) . "\n", FILE_APPEND);

// Respond to GitHub
http_response_code($return_var === 0 ? 200 : 500);
echo json_encode(["status" => $return_var === 0 ? "success" : "failure", "output" => $output]);
?>
