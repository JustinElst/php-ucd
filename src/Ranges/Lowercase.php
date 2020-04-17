<?php

/** @noinspection PhpUnhandledExceptionInspection */

declare(strict_types=1);

namespace Remorhaz\UCD\Tool\Properties;

use Remorhaz\IntRangeSets\RangeSet;

/** phpcs:disable Generic.Files.LineLength.TooLong */
return RangeSet::createUnsafe(...RangeSet::importRanges([0x61, 0x7a], [0xaa], [0xb5], [0xba], [0xdf, 0xf6], [0xf8, 0xff], [0x101], [0x103], [0x105], [0x107], [0x109], [0x10b], [0x10d], [0x10f], [0x111], [0x113], [0x115], [0x117], [0x119], [0x11b], [0x11d], [0x11f], [0x121], [0x123], [0x125], [0x127], [0x129], [0x12b], [0x12d], [0x12f], [0x131], [0x133], [0x135], [0x137, 0x138], [0x13a], [0x13c], [0x13e], [0x140], [0x142], [0x144], [0x146], [0x148, 0x149], [0x14b], [0x14d], [0x14f], [0x151], [0x153], [0x155], [0x157], [0x159], [0x15b], [0x15d], [0x15f], [0x161], [0x163], [0x165], [0x167], [0x169], [0x16b], [0x16d], [0x16f], [0x171], [0x173], [0x175], [0x177], [0x17a], [0x17c], [0x17e, 0x180], [0x183], [0x185], [0x188], [0x18c, 0x18d], [0x192], [0x195], [0x199, 0x19b], [0x19e], [0x1a1], [0x1a3], [0x1a5], [0x1a8], [0x1aa, 0x1ab], [0x1ad], [0x1b0], [0x1b4], [0x1b6], [0x1b9, 0x1ba], [0x1bd, 0x1bf], [0x1c6], [0x1c9], [0x1cc], [0x1ce], [0x1d0], [0x1d2], [0x1d4], [0x1d6], [0x1d8], [0x1da], [0x1dc, 0x1dd], [0x1df], [0x1e1], [0x1e3], [0x1e5], [0x1e7], [0x1e9], [0x1eb], [0x1ed], [0x1ef, 0x1f0], [0x1f3], [0x1f5], [0x1f9], [0x1fb], [0x1fd], [0x1ff], [0x201], [0x203], [0x205], [0x207], [0x209], [0x20b], [0x20d], [0x20f], [0x211], [0x213], [0x215], [0x217], [0x219], [0x21b], [0x21d], [0x21f], [0x221], [0x223], [0x225], [0x227], [0x229], [0x22b], [0x22d], [0x22f], [0x231], [0x233, 0x239], [0x23c], [0x23f, 0x240], [0x242], [0x247], [0x249], [0x24b], [0x24d], [0x24f, 0x293], [0x295, 0x2b8], [0x2c0, 0x2c1], [0x2e0, 0x2e4], [0x345], [0x371], [0x373], [0x377], [0x37a, 0x37d], [0x390], [0x3ac, 0x3ce], [0x3d0, 0x3d1], [0x3d5, 0x3d7], [0x3d9], [0x3db], [0x3dd], [0x3df], [0x3e1], [0x3e3], [0x3e5], [0x3e7], [0x3e9], [0x3eb], [0x3ed], [0x3ef, 0x3f3], [0x3f5], [0x3f8], [0x3fb, 0x3fc], [0x430, 0x45f], [0x461], [0x463], [0x465], [0x467], [0x469], [0x46b], [0x46d], [0x46f], [0x471], [0x473], [0x475], [0x477], [0x479], [0x47b], [0x47d], [0x47f], [0x481], [0x48b], [0x48d], [0x48f], [0x491], [0x493], [0x495], [0x497], [0x499], [0x49b], [0x49d], [0x49f], [0x4a1], [0x4a3], [0x4a5], [0x4a7], [0x4a9], [0x4ab], [0x4ad], [0x4af], [0x4b1], [0x4b3], [0x4b5], [0x4b7], [0x4b9], [0x4bb], [0x4bd], [0x4bf], [0x4c2], [0x4c4], [0x4c6], [0x4c8], [0x4ca], [0x4cc], [0x4ce, 0x4cf], [0x4d1], [0x4d3], [0x4d5], [0x4d7], [0x4d9], [0x4db], [0x4dd], [0x4df], [0x4e1], [0x4e3], [0x4e5], [0x4e7], [0x4e9], [0x4eb], [0x4ed], [0x4ef], [0x4f1], [0x4f3], [0x4f5], [0x4f7], [0x4f9], [0x4fb], [0x4fd], [0x4ff], [0x501], [0x503], [0x505], [0x507], [0x509], [0x50b], [0x50d], [0x50f], [0x511], [0x513], [0x515], [0x517], [0x519], [0x51b], [0x51d], [0x51f], [0x521], [0x523], [0x525], [0x527], [0x529], [0x52b], [0x52d], [0x52f], [0x560, 0x588], [0x10d0, 0x10fa], [0x10fd, 0x10ff], [0x13f8, 0x13fd], [0x1c80, 0x1c88], [0x1d00, 0x1dbf], [0x1e01], [0x1e03], [0x1e05], [0x1e07], [0x1e09], [0x1e0b], [0x1e0d], [0x1e0f], [0x1e11], [0x1e13], [0x1e15], [0x1e17], [0x1e19], [0x1e1b], [0x1e1d], [0x1e1f], [0x1e21], [0x1e23], [0x1e25], [0x1e27], [0x1e29], [0x1e2b], [0x1e2d], [0x1e2f], [0x1e31], [0x1e33], [0x1e35], [0x1e37], [0x1e39], [0x1e3b], [0x1e3d], [0x1e3f], [0x1e41], [0x1e43], [0x1e45], [0x1e47], [0x1e49], [0x1e4b], [0x1e4d], [0x1e4f], [0x1e51], [0x1e53], [0x1e55], [0x1e57], [0x1e59], [0x1e5b], [0x1e5d], [0x1e5f], [0x1e61], [0x1e63], [0x1e65], [0x1e67], [0x1e69], [0x1e6b], [0x1e6d], [0x1e6f], [0x1e71], [0x1e73], [0x1e75], [0x1e77], [0x1e79], [0x1e7b], [0x1e7d], [0x1e7f], [0x1e81], [0x1e83], [0x1e85], [0x1e87], [0x1e89], [0x1e8b], [0x1e8d], [0x1e8f], [0x1e91], [0x1e93], [0x1e95, 0x1e9d], [0x1e9f], [0x1ea1], [0x1ea3], [0x1ea5], [0x1ea7], [0x1ea9], [0x1eab], [0x1ead], [0x1eaf], [0x1eb1], [0x1eb3], [0x1eb5], [0x1eb7], [0x1eb9], [0x1ebb], [0x1ebd], [0x1ebf], [0x1ec1], [0x1ec3], [0x1ec5], [0x1ec7], [0x1ec9], [0x1ecb], [0x1ecd], [0x1ecf], [0x1ed1], [0x1ed3], [0x1ed5], [0x1ed7], [0x1ed9], [0x1edb], [0x1edd], [0x1edf], [0x1ee1], [0x1ee3], [0x1ee5], [0x1ee7], [0x1ee9], [0x1eeb], [0x1eed], [0x1eef], [0x1ef1], [0x1ef3], [0x1ef5], [0x1ef7], [0x1ef9], [0x1efb], [0x1efd], [0x1eff, 0x1f07], [0x1f10, 0x1f15], [0x1f20, 0x1f27], [0x1f30, 0x1f37], [0x1f40, 0x1f45], [0x1f50, 0x1f57], [0x1f60, 0x1f67], [0x1f70, 0x1f7d], [0x1f80, 0x1f87], [0x1f90, 0x1f97], [0x1fa0, 0x1fa7], [0x1fb0, 0x1fb4], [0x1fb6, 0x1fb7], [0x1fbe], [0x1fc2, 0x1fc4], [0x1fc6, 0x1fc7], [0x1fd0, 0x1fd3], [0x1fd6, 0x1fd7], [0x1fe0, 0x1fe7], [0x1ff2, 0x1ff4], [0x1ff6, 0x1ff7], [0x2071], [0x207f], [0x2090, 0x209c], [0x210a], [0x210e, 0x210f], [0x2113], [0x212f], [0x2134], [0x2139], [0x213c, 0x213d], [0x2146, 0x2149], [0x214e], [0x2170, 0x217f], [0x2184], [0x24d0, 0x24e9], [0x2c30, 0x2c5e], [0x2c61], [0x2c65, 0x2c66], [0x2c68], [0x2c6a], [0x2c6c], [0x2c71], [0x2c73, 0x2c74], [0x2c76, 0x2c7d], [0x2c81], [0x2c83], [0x2c85], [0x2c87], [0x2c89], [0x2c8b], [0x2c8d], [0x2c8f], [0x2c91], [0x2c93], [0x2c95], [0x2c97], [0x2c99], [0x2c9b], [0x2c9d], [0x2c9f], [0x2ca1], [0x2ca3], [0x2ca5], [0x2ca7], [0x2ca9], [0x2cab], [0x2cad], [0x2caf], [0x2cb1], [0x2cb3], [0x2cb5], [0x2cb7], [0x2cb9], [0x2cbb], [0x2cbd], [0x2cbf], [0x2cc1], [0x2cc3], [0x2cc5], [0x2cc7], [0x2cc9], [0x2ccb], [0x2ccd], [0x2ccf], [0x2cd1], [0x2cd3], [0x2cd5], [0x2cd7], [0x2cd9], [0x2cdb], [0x2cdd], [0x2cdf], [0x2ce1], [0x2ce3, 0x2ce4], [0x2cec], [0x2cee], [0x2cf3], [0x2d00, 0x2d25], [0x2d27], [0x2d2d], [0xa641], [0xa643], [0xa645], [0xa647], [0xa649], [0xa64b], [0xa64d], [0xa64f], [0xa651], [0xa653], [0xa655], [0xa657], [0xa659], [0xa65b], [0xa65d], [0xa65f], [0xa661], [0xa663], [0xa665], [0xa667], [0xa669], [0xa66b], [0xa66d], [0xa681], [0xa683], [0xa685], [0xa687], [0xa689], [0xa68b], [0xa68d], [0xa68f], [0xa691], [0xa693], [0xa695], [0xa697], [0xa699], [0xa69b, 0xa69d], [0xa723], [0xa725], [0xa727], [0xa729], [0xa72b], [0xa72d], [0xa72f, 0xa731], [0xa733], [0xa735], [0xa737], [0xa739], [0xa73b], [0xa73d], [0xa73f], [0xa741], [0xa743], [0xa745], [0xa747], [0xa749], [0xa74b], [0xa74d], [0xa74f], [0xa751], [0xa753], [0xa755], [0xa757], [0xa759], [0xa75b], [0xa75d], [0xa75f], [0xa761], [0xa763], [0xa765], [0xa767], [0xa769], [0xa76b], [0xa76d], [0xa76f, 0xa778], [0xa77a], [0xa77c], [0xa77f], [0xa781], [0xa783], [0xa785], [0xa787], [0xa78c], [0xa78e], [0xa791], [0xa793, 0xa795], [0xa797], [0xa799], [0xa79b], [0xa79d], [0xa79f], [0xa7a1], [0xa7a3], [0xa7a5], [0xa7a7], [0xa7a9], [0xa7af], [0xa7b5], [0xa7b7], [0xa7b9], [0xa7bb], [0xa7bd], [0xa7bf], [0xa7c3], [0xa7c8], [0xa7ca], [0xa7f6], [0xa7f8, 0xa7fa], [0xab30, 0xab5a], [0xab5c, 0xab68], [0xab70, 0xabbf], [0xfb00, 0xfb06], [0xfb13, 0xfb17], [0xff41, 0xff5a], [0x10428, 0x1044f], [0x104d8, 0x104fb], [0x10cc0, 0x10cf2], [0x118c0, 0x118df], [0x16e60, 0x16e7f], [0x1d41a, 0x1d433], [0x1d44e, 0x1d454], [0x1d456, 0x1d467], [0x1d482, 0x1d49b], [0x1d4b6, 0x1d4b9], [0x1d4bb], [0x1d4bd, 0x1d4c3], [0x1d4c5, 0x1d4cf], [0x1d4ea, 0x1d503], [0x1d51e, 0x1d537], [0x1d552, 0x1d56b], [0x1d586, 0x1d59f], [0x1d5ba, 0x1d5d3], [0x1d5ee, 0x1d607], [0x1d622, 0x1d63b], [0x1d656, 0x1d66f], [0x1d68a, 0x1d6a5], [0x1d6c2, 0x1d6da], [0x1d6dc, 0x1d6e1], [0x1d6fc, 0x1d714], [0x1d716, 0x1d71b], [0x1d736, 0x1d74e], [0x1d750, 0x1d755], [0x1d770, 0x1d788], [0x1d78a, 0x1d78f], [0x1d7aa, 0x1d7c2], [0x1d7c4, 0x1d7c9], [0x1d7cb], [0x1e922, 0x1e943]));
