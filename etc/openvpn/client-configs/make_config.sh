#!/bin/bash
# 2024-07-17
# 1) "Configure OpenVPN Server": https://github.com/dmitrii-fediuk/5.9.188.84/issues/79
# 2) "How did I install OpenVPN Server 2.6.1 to Debian 12?": https://df.tips/t/2260
# 3.1) https://www.digitalocean.com/community/tutorials/how-to-set-up-an-openvpn-server-on-debian-11#step-7-creating-the-client-configuration-infrastructure
# 3.2) https://archive.is/5Im7t#step-7-creating-the-client-configuration-infrastructure
# 3.3) https://web.archive.org/web/20240717114611/https://www.digitalocean.com/community/tutorials/how-to-set-up-an-openvpn-server-on-debian-11#step-7-creating-the-client-configuration-infrastructure
# First argument: Client identifier
KEY_DIR=/etc/openvpn/client-configs/keys
OUTPUT_DIR=/etc/openvpn/client-configs/files
BASE_CONFIG=/etc/openvpn/client-configs/base.conf
cat ${BASE_CONFIG} \
    <(echo -e '<ca>') \
    ${KEY_DIR}/ca.crt \
    <(echo -e '</ca>\n<cert>') \
    ${KEY_DIR}/${1}.crt \
    <(echo -e '</cert>\n<key>') \
    ${KEY_DIR}/${1}.key \
    <(echo -e '</key>\n<tls-auth>') \
    ${KEY_DIR}/ta.key \
    <(echo -e '</tls-auth>') \
    > ${OUTPUT_DIR}/${1}.ovpn