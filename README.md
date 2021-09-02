# Connected to Home Network? (Home or Away via DDNS)
This is some simple PHP that allows me to test if I am connected to my home network.

## Explanation
I wanted to use PHP to check my IP against my home IP, this is useful when VPN tunneling to my house or VPN tunneling out of my house. This requires a Dynamic DNS (DDNS) setup, I use the DDNS built in to my ASUS router, in this case with a custom domain. There are two versions, one that is called `home_status.php` that just puts HOME or AWAY, and `home.php` that has a full HTML site as part of it.

## Set Up

To setup this repository for yourself, replace `DDNS-Domain.example` with your DDNS domain (ex. aidan.asuscomm.com), then host to the VPS of your choice.

## Notes
This is my very first PHP project, so it's not perfect! Please let me know if you have any other reccomendations for improvements!
If you want to check the status on a Linux command line, I personal use `wget -q VPSdomain.example/home_status.php && cat home_status.php && rm -f home_status.php`
with `VPSdomain.example` replaced with the domain or IP you host your VPS on
