Add-Type -AssemblyName System.IO.Compression
Add-Type -AssemblyName System.IO.Compression.FileSystem

$themeDir = 'c:\Users\arsha\Local Sites\national-gold-melamine\app\public\wp-content\themes\vw-modern-ecommerce'
$zipPath = 'C:\Users\arsha\Downloads\vw-modern-ecommerce-fixed.zip'

if (Test-Path $zipPath) { Remove-Item $zipPath }

$zip = [System.IO.Compression.ZipFile]::Open($zipPath, [System.IO.Compression.ZipArchiveMode]::Create)
$files = Get-ChildItem -Path $themeDir -Recurse -File | Where-Object { $_.FullName -notmatch '\\.git' -and $_.FullName -notmatch '\\.claude' -and $_.Name -ne 'create_theme_zip.ps1' }

foreach ($f in $files) {
    $rel = 'vw-modern-ecommerce/' + $f.FullName.Substring($themeDir.Length + 1).Replace('\', '/')
    [System.IO.Compression.ZipFileExtensions]::CreateEntryFromFile($zip, $f.FullName, $rel) | Out-Null
}
$zip.Dispose()
Write-Host "ZIP created successfully at $zipPath"
