Run ssh -vvv -o StrictHostKeyChecking=no ***@*** 'echo "SSH connection successful"'
OpenSSH_8.9p1 Ubuntu-3ubuntu0.7, OpenSSL 3.0.2 15 Mar 2022
debug1: Reading configuration data /etc/ssh/ssh_config
debug1: /etc/ssh/ssh_config line 19: include /etc/ssh/ssh_config.d/*.conf matched no files
debug1: /etc/ssh/ssh_config line 21: Applying options for *
debug2: resolve_canonicalize: hostname *** is address
debug3: expanded UserKnownHostsFile '~/.ssh/known_hosts' -> '/home/runner/.ssh/known_hosts'
debug3: expanded UserKnownHostsFile '~/.ssh/known_hosts2' -> '/home/runner/.ssh/known_hosts2'
debug3: ssh_connect_direct: entering
debug1: Connecting to *** [***] port 22.
debug3: set_sock_tos: set socket 3 IP_TOS 0x10
debug1: Connection established.
debug1: identity file /home/runner/.ssh/id_rsa type -1
debug1: identity file /home/runner/.ssh/id_rsa-cert type -1
debug1: identity file /home/runner/.ssh/id_ecdsa type -1
debug1: identity file /home/runner/.ssh/id_ecdsa-cert type -1
debug1: identity file /home/runner/.ssh/id_ecdsa_sk type -1
debug1: identity file /home/runner/.ssh/id_ecdsa_sk-cert type -1
debug1: identity file /home/runner/.ssh/id_ed25519 type -1
debug1: identity file /home/runner/.ssh/id_ed25519-cert type -1
debug1: identity file /home/runner/.ssh/id_ed25519_sk type -1
debug1: identity file /home/runner/.ssh/id_ed25519_sk-cert type -1
debug1: identity file /home/runner/.ssh/id_xmss type -1
debug1: identity file /home/runner/.ssh/id_xmss-cert type -1
debug1: identity file /home/runner/.ssh/id_dsa type -1
debug1: identity file /home/runner/.ssh/id_dsa-cert type -1
debug1: Local version string SSH-2.0-OpenSSH_8.9p1 Ubuntu-3ubuntu0.7
debug1: Remote protocol version 2.0, remote software version OpenSSH_8.9p1 Ubuntu-3ubuntu0.7
debug1: compat_banner: match: OpenSSH_8.9p1 Ubuntu-3ubuntu0.7 pat OpenSSH* compat 0x04000000
debug2: fd 3 setting O_NONBLOCK
debug1: Authenticating to ***:22 as '***'
debug1: load_hostkeys: fopen /home/runner/.ssh/known_hosts: No such file or directory
debug1: load_hostkeys: fopen /home/runner/.ssh/known_hosts2: No such file or directory
debug1: load_hostkeys: fopen /etc/ssh/ssh_known_hosts2: No such file or directory
debug3: order_hostkeyalgs: no algorithms matched; accept original
debug3: send packet: type 20
debug1: SSH2_MSG_KEXINIT sent
debug3: receive packet: type 20
debug1: SSH2_MSG_KEXINIT received
debug2: local client KEXINIT proposal
debug2: KEX algorithms: curve25519-sha256,curve25519-sha256@libssh.org,ecdh-sha2-nistp256,ecdh-sha2-nistp384,ecdh-sha2-nistp521,sntrup761x25519-sha512@openssh.com,diffie-hellman-group-exchange-sha256,diffie-hellman-group16-sha512,diffie-hellman-group18-sha512,diffie-hellman-group14-sha256,ext-info-c,kex-strict-c-v00@openssh.com
debug2: host key algorithms: ssh-ed25519-cert-v01@openssh.com,ecdsa-sha2-nistp256-cert-v01@openssh.com,ecdsa-sha2-nistp384-cert-v01@openssh.com,ecdsa-sha2-nistp521-cert-v01@openssh.com,sk-ssh-ed25519-cert-v01@openssh.com,sk-ecdsa-sha2-nistp256-cert-v01@openssh.com,rsa-sha2-512-cert-v01@openssh.com,rsa-sha2-256-cert-v01@openssh.com,ssh-ed25519,ecdsa-sha2-nistp256,ecdsa-sha2-nistp384,ecdsa-sha2-nistp521,sk-ssh-ed25519@openssh.com,sk-ecdsa-sha2-nistp256@openssh.com,rsa-sha2-512,rsa-sha2-256
debug2: ciphers ctos: chacha20-poly1305@openssh.com,aes128-ctr,aes192-ctr,aes256-ctr,aes128-gcm@openssh.com,aes256-gcm@openssh.com
debug2: ciphers stoc: chacha20-poly1305@openssh.com,aes128-ctr,aes192-ctr,aes256-ctr,aes128-gcm@openssh.com,aes256-gcm@openssh.com
debug2: MACs ctos: umac-64-etm@openssh.com,umac-128-etm@openssh.com,hmac-sha2-256-etm@openssh.com,hmac-sha2-512-etm@openssh.com,hmac-sha1-etm@openssh.com,umac-64@openssh.com,umac-128@openssh.com,hmac-sha2-256,hmac-sha2-512,hmac-sha1
debug2: MACs stoc: umac-64-etm@openssh.com,umac-128-etm@openssh.com,hmac-sha2-256-etm@openssh.com,hmac-sha2-512-etm@openssh.com,hmac-sha1-etm@openssh.com,umac-64@openssh.com,umac-128@openssh.com,hmac-sha2-256,hmac-sha2-512,hmac-sha1
debug2: compression ctos: none,zlib@openssh.com,zlib
debug2: compression stoc: none,zlib@openssh.com,zlib
debug2: languages ctos: 
debug2: languages stoc: 
debug2: first_kex_follows 0 
debug2: reserved 0 
debug2: peer server KEXINIT proposal
debug2: KEX algorithms: curve25519-sha256,curve25519-sha256@libssh.org,ecdh-sha2-nistp256,ecdh-sha2-nistp384,ecdh-sha2-nistp521,sntrup761x25519-sha512@openssh.com,diffie-hellman-group-exchange-sha256,diffie-hellman-group16-sha512,diffie-hellman-group18-sha512,diffie-hellman-group14-sha256,kex-strict-s-v00@openssh.com
debug2: host key algorithms: rsa-sha2-512,rsa-sha2-256,ecdsa-sha2-nistp256,ssh-ed25519
debug2: ciphers ctos: chacha20-poly1305@openssh.com,aes128-ctr,aes192-ctr,aes256-ctr,aes128-gcm@openssh.com,aes256-gcm@openssh.com
debug2: ciphers stoc: chacha20-poly1305@openssh.com,aes128-ctr,aes192-ctr,aes256-ctr,aes128-gcm@openssh.com,aes256-gcm@openssh.com
debug2: MACs ctos: umac-64-etm@openssh.com,umac-128-etm@openssh.com,hmac-sha2-256-etm@openssh.com,hmac-sha2-512-etm@openssh.com,hmac-sha1-etm@openssh.com,umac-64@openssh.com,umac-128@openssh.com,hmac-sha2-256,hmac-sha2-512,hmac-sha1
debug2: MACs stoc: umac-64-etm@openssh.com,umac-128-etm@openssh.com,hmac-sha2-256-etm@openssh.com,hmac-sha2-512-etm@openssh.com,hmac-sha1-etm@openssh.com,umac-64@openssh.com,umac-128@openssh.com,hmac-sha2-256,hmac-sha2-512,hmac-sha1
debug2: compression ctos: none,zlib@openssh.com
debug2: compression stoc: none,zlib@openssh.com
debug2: languages ctos: 
debug2: languages stoc: 
debug2: first_kex_follows 0 
debug2: reserved 0 
debug3: kex_choose_conf: will use strict KEX ordering
debug1: kex: algorithm: curve25519-sha256
debug1: kex: host key algorithm: ssh-ed25519
debug1: kex: server->client cipher: chacha20-poly1305@openssh.com MAC: <implicit> compression: none
debug1: kex: client->server cipher: chacha20-poly1305@openssh.com MAC: <implicit> compression: none
debug3: send packet: type 30
debug1: expecting SSH2_MSG_KEX_ECDH_REPLY
debug3: receive packet: type 31
debug1: SSH2_MSG_KEX_ECDH_REPLY received
debug1: Server host key: ssh-ed25519 SHA256:kMXMTXwHELIEXvmIlFQeHwy21YYC9qYqA+0ZWgKNYhQ
debug1: load_hostkeys: fopen /home/runner/.ssh/known_hosts: No such file or directory
debug1: load_hostkeys: fopen /home/runner/.ssh/known_hosts2: No such file or directory
debug1: load_hostkeys: fopen /etc/ssh/ssh_known_hosts2: No such file or directory
debug1: SELinux support disabled
Warning: Permanently added '***' (ED25519) to the list of known hosts.
debug1: check_host_key: hostkey not known or explicitly trusted: disabling UpdateHostkeys
debug3: send packet: type 21
debug1: ssh_packet_send2_wrapped: resetting send seqnr 3
debug2: ssh_set_newkeys: mode 1
debug1: rekey out after 134217728 blocks
debug1: SSH2_MSG_NEWKEYS sent
debug1: expecting SSH2_MSG_NEWKEYS
debug3: receive packet: type 21
debug1: ssh_packet_read_poll2: resetting read seqnr 3
debug1: SSH2_MSG_NEWKEYS received
debug2: ssh_set_newkeys: mode 0
debug1: rekey in after 134217728 blocks
debug1: Will attempt key: /home/runner/.ssh/id_rsa 
debug1: Will attempt key: /home/runner/.ssh/id_ecdsa 
debug1: Will attempt key: /home/runner/.ssh/id_ecdsa_sk 
debug1: Will attempt key: /home/runner/.ssh/id_ed25519 
debug1: Will attempt key: /home/runner/.ssh/id_ed25519_sk 
debug1: Will attempt key: /home/runner/.ssh/id_xmss 
debug1: Will attempt key: /home/runner/.ssh/id_dsa 
debug2: pubkey_prepare: done
debug3: send packet: type 5
debug3: receive packet: type 7
debug1: SSH2_MSG_EXT_INFO received
debug1: kex_input_ext_info: server-sig-algs=<ssh-ed25519,sk-ssh-ed25519@openssh.com,ssh-rsa,rsa-sha2-256,rsa-sha2-512,ssh-dss,ecdsa-sha2-nistp256,ecdsa-sha2-nistp384,ecdsa-sha2-nistp521,sk-ecdsa-sha2-nistp256@openssh.com,webauthn-sk-ecdsa-sha2-nistp256@openssh.com>
debug1: kex_input_ext_info: publickey-hostbound@openssh.com=<0>
debug3: receive packet: type 6
debug2: service_accept: ssh-userauth
debug1: SSH2_MSG_SERVICE_ACCEPT received
debug3: send packet: type 50
debug3: receive packet: type 51
debug1: Authentications that can continue: publickey,password
debug3: start over, passed a different list publickey,password
debug3: preferred gssapi-with-mic,publickey,keyboard-interactive,password
debug3: authmethod_lookup publickey
debug3: remaining preferred: keyboard-interactive,password
debug3: authmethod_is_enabled publickey
debug1: Next authentication method: publickey
debug1: Trying private key: /home/runner/.ssh/id_rsa
debug3: no such identity: /home/runner/.ssh/id_rsa: No such file or directory
debug1: Trying private key: /home/runner/.ssh/id_ecdsa
debug3: no such identity: /home/runner/.ssh/id_ecdsa: No such file or directory
debug1: Trying private key: /home/runner/.ssh/id_ecdsa_sk
debug3: no such identity: /home/runner/.ssh/id_ecdsa_sk: No such file or directory
debug1: Trying private key: /home/runner/.ssh/id_ed25519
debug3: no such identity: /home/runner/.ssh/id_ed25519: No such file or directory
debug1: Trying private key: /home/runner/.ssh/id_ed25519_sk
debug3: no such identity: /home/runner/.ssh/id_ed25519_sk: No such file or directory
debug1: Trying private key: /home/runner/.ssh/id_xmss
debug3: no such identity: /home/runner/.ssh/id_xmss: No such file or directory
debug1: Trying private key: /home/runner/.ssh/id_dsa
debug3: no such identity: /home/runner/.ssh/id_dsa: No such file or directory
debug2: we did not send a packet, disable method
debug3: authmethod_lookup password
debug3: remaining preferred: ,password
debug3: authmethod_is_enabled password
debug1: Next authentication method: password
debug1: read_passphrase: can't open /dev/tty: No such device or address
debug3: send packet: type 50
debug2: we sent a password packet, wait for reply
debug3: receive packet: type 51
debug1: Authentications that can continue: publickey,password
Permission denied, please try again.
debug1: read_passphrase: can't open /dev/tty: No such device or address
debug3: send packet: type 50
debug2: we sent a password packet, wait for reply
debug3: receive packet: type 51
debug1: Authentications that can continue: publickey,password
Permission denied, please try again.
debug1: read_passphrase: can't open /dev/tty: No such device or address
debug3: send packet: type 50
debug2: we sent a password packet, wait for reply
debug3: receive packet: type 51
debug1: Authentications that can continue: publickey,password
debug2: we did not send a packet, disable method
debug1: No more authentication methods to try.
***@***: Permission denied (publickey,password).
Error: Process completed with exit code 255.
