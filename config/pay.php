<?php

return [
    'alipay' => [
        'app_id'         => '2016102000727060',
        'ali_public_key' => 'MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEA18hPV2dLdSxurh4hmfJAk/MR/3dQ0gDBgCV1ERG5qpRiUFxksP8oxon+IadqpDW8zb+fjr6goT1NZnuW7wz1oMYCi/zkPnnEu0Xg3mEajK62OwrrWS0VFYKGyQ7oAuz9+GGsKzecapmvXw75cC2x969MXpc/xRQKvwTHoeWJvSLvrnfy7BOzCPWFtqc3E5jCrVHIGJsFhav7nRfxJSSl3xQKxktJWJ2AqAENn2b0txnOxVSEpNNgckn8/WseJmEYKrK4Z8LCL4sXVdZGk9VXU2myoPhWWOdCc3aGhR7I8T4C8GxxptVnrdNhcWBT96BJgPxxih0tpho4MiK7WXXvWwIDAQAB',
        'private_key'    => 'MIIEowIBAAKCAQEApC1KKpve4wKag0VQef0ea6a4g8PhTFXdvMgc78kQkRx3bNkK7p81ohmPPa6vTsvN9RFwQDqPLE2CoSgHo4VOLlUrkXD+A9wFka15Or2/Kg3/sktZRY7QHIENjt3MiRRpCzRQCv66JSWMEVZguYaEt+nMkVpDmh1on695kw4R5LliNImKHizFBCYmxhmaJEv0yVR47bDtjcaDLPhg45jKYbluVJ6RhYwEUGozQ1wM0c+J4y9ke0PRWLuxp+p3k9VJf7ls2WsMoVVX+mvBBAW3iBawxzFFLguHJ3GA2mJet7ryRHHkSbxFzUhBRKRySQmcZhZnPk7ZpVjtKJIivP+ufwIDAQABAoIBAH+jMkD0E5F7qbKaxdlBP1BEOrk+JT9allw5W73UHIwkjHhUORqRLnpK0sEKuQJSklmP6CwXGs4/qGowG9g2QDTnREr7hJBtkurR6ikP8bn5TixIRiw8vnEap/bFW0nLU2tBjWUu6nsMuNuVwvcZrL7rBn6OpXYAnSFgo+z/CEw/zfHbzcAg7Q9oDerwC0a76BoV2BadVK6QHgXb8oDq8QilHsjHYOuyTLAwOlo0q17X2Br7SZ/GQ5RF78E7aCGBLA0JjgKpi+2dNOJQDkz1ZbbQ/8BwGv7TqYBKRDeEgidYGMzfHtX9vuYOfwwUUrY/qyxU6ZCmgeTWHhoHQFoDPQECgYEA7XBihbOIuGMfMl9WNnLpXzFyf4K3GJtl9e0j16s0W86ihqQ+4YlZyijgveM47JFe5SR9n7UDDdxuqSnbkm+Pz/YlJml/7TmcHZFtQcC37C0DTrzREcXfQ31l/E9FYpQPmQLr/1oNLXH9DoPdsw0BCYL61PhSBUn85f7u2E/ucoECgYEAsQLJzQXDB2/lzUVqj7VEn9z/xfmz81M2z5JunQ/9FFznunwQRdGFxs0Orb4UNzDSr4NdKL2C0reJUjw2T1lApgSHc9oaINn1W6yfkolccTYXoDIUX/gPM4qDRxNXlN9ziVhQc2nipsPiq1yY6P6nMCRUV85lSOgvLiBcaLtroP8CgYEAgj/nW+7LrlJ5t5lC4uWQja7DX51mMXJ1sT2gLtv1AfPNhkytTe2ZuuNHvgLapDNuugaVfzm97img7t1OXPskCfG+GV9AVPMIZ9Px+mLswftDWDsN+VDxk8VDX/BgYJ5WHBrVOSO+HNLt/btqr6EPk5ctYAzEebBHsidyAGmApYECgYBQ6WpfOkQE8URFCXcFS6GbxYRw9YwpLJ+AUHoZd0aC+Vi/aJhzoauZzP/psVpCRCH6Mnzx83aKZXTyzy0wJicj/CwCa+7Hl3nNNuIWNI25/jTceCfSGmywbZ9GbPP6zA1e+ayEpSECg8Xn+MK4tjasDd8z59dqdR+j4Qz8nrc69wKBgFxFTrlf9S1o9sTlGdnYCAWfoHeTWjg6Zt8D7996lMNupYv17YL5+m1WCwLbXqmYEQmoEcLlWv+zW3NM7bkeJL9zrKnvSTV+f4C3CITLXgjLC4G8kV0R1bchgm1YWSCtOpGj+e4cLgTVS01am9Xruxws4BBzqAnhyfkCz5DAaPKK',
        'log'            => [
            'file' => storage_path('logs/alipay.log'),
        ],
    ],

    'wechat' => [
        'app_id'      => '',
        'mch_id'      => '',
        'key'         => '',
        'cert_client' => '',
        'cert_key'    => '',
        'log'         => [
            'file' => storage_path('logs/wechat_pay.log'),
        ],
    ],
];
