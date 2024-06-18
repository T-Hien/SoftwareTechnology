sudo tail -f /var/log/auth.log
[sudo] password for hien: 
2024-06-18T15:23:53.173302+07:00 hien-VirtualBox sshd[6986]: Accepted publickey for hien from 127.0.0.1 port 40184 ssh2: ED25519 SHA256:Z0qCUU+p1RVAek4Jm/QLb2rkWBZTMiqwhejyIkmK18M
2024-06-18T15:23:53.176733+07:00 hien-VirtualBox sshd[6986]: pam_unix(sshd:session): session opened for user hien(uid=1000) by hien(uid=0)
2024-06-18T15:23:53.182782+07:00 hien-VirtualBox systemd-logind[842]: New session 24 of user hien.
2024-06-18T15:25:01.375790+07:00 hien-VirtualBox CRON[7094]: pam_unix(cron:session): session opened for user root(uid=0) by root(uid=0)
2024-06-18T15:25:01.396832+07:00 hien-VirtualBox CRON[7094]: pam_unix(cron:session): session closed for user root
2024-06-18T15:27:02.527432+07:00 hien-VirtualBox sshd[7119]: Accepted publickey for hien from 127.0.0.1 port 36668 ssh2: RSA SHA256:Xv30S1VZsTy46A6hvbi1v5QD7aJsB5npo9xkI8W51sg
2024-06-18T15:27:04.028821+07:00 hien-VirtualBox sshd[7119]: pam_unix(sshd:session): session opened for user hien(uid=1000) by hien(uid=0)
2024-06-18T15:27:04.029056+07:00 hien-VirtualBox systemd-logind[842]: New session 26 of user hien.
2024-06-18T15:27:45.725545+07:00 hien-VirtualBox sudo:     hien : TTY=pts/2 ; PWD=/home/hien ; USER=root ; COMMAND=/usr/bin/tail -f /var/log/auth.log
2024-06-18T15:27:45.730477+07:00 hien-VirtualBox sudo: pam_unix(sudo:session): session opened for user root(uid=0) by hien(uid=1000)
