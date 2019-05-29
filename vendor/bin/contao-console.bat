@ECHO OFF
setlocal DISABLEDELAYEDEXPANSION
SET BIN_TARGET=%~dp0/../contao/manager-bundle/bin/contao-console
php "%BIN_TARGET%" %*
