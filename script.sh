yum install https://dl.fedoraproject.org/pub/epel/epel-release-latest-6.noarch.rpm -y
yum install http://rpms.remirepo.net/enterprise/remi-release-6.rpm -y
yum install yum-utils -y
yum-config-manager --enable remi-php70
yum install php php-mcrypt php-cli php-gd php-curl php-mysql php-ldap php-zip php-fileinfo -y
