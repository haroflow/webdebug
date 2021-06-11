<?php

echo "REMOTE_ADDR: " . (isset($_SERVER["REMOTE_ADDR"]) ? $_SERVER["REMOTE_ADDR"] : "-") . "\n";
echo "HTTP_X_FORWARDED_FOR: " . (isset($_SERVER["HTTP_X_FORWARDED_FOR"]) ? $_SERVER["HTTP_X_FORWARDED_FOR"] : "-") . "\n";
echo "HTTP_CLIENT_IP: " . (isset($_SERVER["HTTP_CLIENT_IP"]) ? $_SERVER["HTTP_CLIENT_IP"] : "-") . "\n";
