<?php
session_destroy();
header("Location: ?page=home&disconnected=1");
