<?php

namespace Database\Seeders;

use App\Models\Color;
use Illuminate\Database\Seeder;

class ColorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (Color::count()) {
            return;
        }

        $data = [

            // construir 333 filas con el formato ['name' => 'color'],
            // para poder inyectar 333 filas en la tabla
            ['name' => 'ICE BLUE METALLIC   '], // 1
            ['name' => 'ICE BLUE METALLIC   '], // 2
            ['name' => 'ARCTIC BLUE PEARL   '], // 3
            ['name' => 'ZIRCON BLUE METALLIC'], // 4
            ['name' => 'METEOR BLUE METALLIC'], // 5
            ['name' => 'METEOR SILVER M.    '], // 6
            ['name' => 'FIJI BLUE PEARL     '], // 7
            ['name' => 'OCEAN MIST METALLIC '], // 8
            ['name' => 'STEEL BLUE M        '], // 9
            ['name' => 'BLUEISH SILVER      '], // 10
            ['name' => 'GLACIER BLUE M.     '], // 11
            ['name' => 'BALTIC BLUE P       '], // 12
            ['name' => 'CELESTIAL BLUE M    '], // 13
            ['name' => 'INDIGO BLUE P.      '], // 14
            ['name' => 'AERIEL BLUE METALLIC'], // 15
            ['name' => 'SAPPHIRE BLUE P.    '], // 16
            ['name' => 'MIDNIGHT BLUE PEARL '], // 17
            ['name' => 'SIRIUS BLUE         '], // 18
            ['name' => 'ROYAL BLUE PEARL    '], // 19
            ['name' => 'ATOMIC BLUE M       '], // 20
            ['name' => 'BALI BLUE PEARL     '], // 21
            ['name' => 'DEEP LAPIS BLUE M.  '], // 22
            ['name' => 'DYNO BLUE P         '], // 23
            ['name' => 'TWILIGHT BLUE       '], // 24
            ['name' => 'STILL NIGHT P.      '], // 25
            ['name' => 'FATHOM BLUE P       '], // 26
            ['name' => 'OBSIDIAN BLUE P     '], // 27
            ['name' => 'FATHOM BLUE P       '], // 28
            ['name' => 'OBSIDIAN BLUE P     '], // 29
            ['name' => 'AEGEAN BLUE M       '], // 30
            ['name' => 'DEEP OCEAN          '], // 31
            ['name' => 'STEEL SAPPHIRE M    '], // 32
            ['name' => 'NOUVELLE BLUE P     '], // 33
            ['name' => 'COSMIC BLUE M       '], // 34
            ['name' => 'CATALINA BLUE P     '], // 35
            ['name' => 'APEX BLUE PEARL     '], // 36
            ['name' => 'NOCTURNE NIGHT M.   '], // 37
            ['name' => 'CANYON RIVER BLUE   '], // 38
            ['name' => 'MORNING MIST BLUE   '], // 39
            ['name' => 'PACIFIC BLUE PEARL  '], // 40
            ['name' => 'POCTURN BLUE P.     '], // 41
            ['name' => 'CYCLONE BLUE M.     '], // 42
            ['name' => 'ADRIATIC BLUE PEARL '], // 43
            ['name' => 'CRESCENT SILVER META'], // 44
            ['name' => 'MYSTIC BLUE PEARL   '], // 45
            ['name' => 'ICEBERG SILVER M.   '], // 46
            ['name' => 'SUPER MARINE BLUE P.'], // 47
            ['name' => 'BLUE PEARL          '], // 48
            ['name' => 'SUPER SONIC BLUE    '], // 49
            ['name' => 'CRYSTAL SILVER METAL'], // 50
            ['name' => 'NIGHTHAWK BLACK P.  '], // 51
            ['name' => 'MONTEREY BLUE PEARL '], // 52
            ['name' => 'ETERNAL BLUE M.     '], // 53
            ['name' => 'BEIGE               '], // 54
            ['name' => 'HAVAS BLUE METALLIC '], // 55
            ['name' => 'TAHITIAN GREEN PEARL'], // 56
            ['name' => 'PARADISE BLUE GREEN '], // 57
            ['name' => 'AZURE BLUE GREEN P. '], // 58
            ['name' => 'SAPPHIRE SILVER META'], // 59
            ['name' => 'ICED TEAL           '], // 60
            ['name' => 'ICE TEAL P.         '], // 61
            ['name' => 'AQUA MINT OPAL METAC'], // 62
            ['name' => 'TROPIC JADE P.      '], // 63
            ['name' => 'LAKESHORE BLUE GREEN'], // 64
            ['name' => 'BLACK               '], // 65
            ['name' => 'BLACK PEAR          '], // 66
            ['name' => 'BLANCO              '], // 67
            ['name' => 'BLUE                '], // 68
            ['name' => 'BROWN               '], // 69
            ['name' => 'CAMUFLAJE           '], // 70
            ['name' => 'CANDY GLORY RED-U   '], // 71
            ['name' => 'CRAPHITE BLACK      '], // 72
            ['name' => 'CREAM               '], // 73
            ['name' => 'CRYSTAL SILVER M    '], // 74
            ['name' => 'EXTREME RED         '], // 75
            ['name' => 'EXTREME RED         '], // 76
            ['name' => 'MINT OPAL GREEN M   '], // 77
            ['name' => 'NOBLE GREEN PEARL   '], // 78
            ['name' => 'EVERGREEN PEARL     '], // 79
            ['name' => 'DEEP GREEN PEARL    '], // 80
            ['name' => 'GREEN TEA METALIC   '], // 81
            ['name' => 'MYSTIC GREEN M.     '], // 82
            ['name' => 'RANGER GREEN R      '], // 83
            ['name' => 'NEW FERN METALLIC   '], // 84
            ['name' => 'AMAZON GREEN P.     '], // 85
            ['name' => 'ISLANDER GREEN M.   '], // 86
            ['name' => 'AMAZON GREEN M.     '], // 87
            ['name' => 'OPAL SAGE M.        '], // 88
            ['name' => 'FOREST MIST M       '], // 89
            ['name' => 'FOREST MIST M.      '], // 90
            ['name' => 'MISTY GREEN PEARL   '], // 91
            ['name' => 'BLACK FOREST P      '], // 92
            ['name' => 'DARK OLIVE M.       '], // 93
            ['name' => 'SAGE GREEN METALIC  '], // 94
            ['name' => 'SHERWOOD GREEN PEARL'], // 95
            ['name' => 'BAYERN GREEN PEARL  '], // 96
            ['name' => 'CYPRESS GREEN PEARL '], // 97
            ['name' => 'EUCALYPTUS GREEN P. '], // 98
            ['name' => 'DARK EMERALD P      '], // 99
            ['name' => 'LAGUNA METALLIC     '], // 100
            ['name' => 'SPRUSE GRAY PEARL   '], // 101
            ['name' => 'CLOVER GREEN PEARL  '], // 102
            ['name' => 'VERMONT GREEN PEARL '], // 103
            ['name' => 'FICUS GREEN PEARL   '], // 104
            ['name' => 'CYPRESS GREEN P.    '], // 105
            ['name' => 'DORADO              '], // 106
            ['name' => 'GOLD                '], // 107
            ['name' => 'GRAPHITE BLACK      '], // 108
            ['name' => 'GRAPHITE BLACK      '], // 109
            ['name' => 'GRAY                '], // 110
            ['name' => 'GREEN               '], // 111
            ['name' => 'GREEN PEARL         '], // 112
            ['name' => 'GREY                '], // 113
            ['name' => 'GRIS                '], // 114
            ['name' => 'GREEN PEAR          '], // 115
            ['name' => 'HOPPER GREEN R      '], // 116
            ['name' => 'MIDORI GREEN        '], // 117
            ['name' => 'ENERGY GREEN P      '], // 118
            ['name' => 'BLAZE GOLD P        '], // 119
            ['name' => 'LIGHT BLUE          '], // 120
            ['name' => 'LIGHT GREY          '], // 121
            ['name' => 'NEGRO               '], // 122
            ['name' => 'NARANJA             '], // 123
            ['name' => 'NEGRO               '], // 124
            ['name' => 'GALAPAGOS GREEN     '], // 125
            ['name' => 'TAFFETA WHITE       '], // 126
            ['name' => 'WHITE DIAMOND P     '], // 127
            ['name' => 'ANTHRACITE METALLIC '], // 128
            ['name' => 'GRAPHITE P.         '], // 129
            ['name' => 'SAGE BRUSH P        '], // 130
            ['name' => 'COSMIC GRAY PEARL   '], // 131
            ['name' => 'MAGNESIUM METALLIC  '], // 132
            ['name' => 'SILVER PEARL M.     '], // 133
            ['name' => 'SLATE GREEN METALLIC'], // 134
            ['name' => 'BILLET SILVER M.    '], // 135
            ['name' => 'SILVER MOON         '], // 136
            ['name' => 'GALAXY GRAY M       '], // 137
            ['name' => 'NIMBUS GRAY M       '], // 138
            ['name' => 'FORMAL BLACK        '], // 139
            ['name' => 'NEW MEDIUM SILVER M '], // 140
            ['name' => 'POLISHED METAL M.   '], // 141
            ['name' => 'STERLING GRAY M     '], // 142
            ['name' => 'SMOKY TOPAZ M       '], // 143
            ['name' => 'WHITE ORCHID P      '], // 144
            ['name' => 'CHAMPIONSHIP WHITE  '], // 145
            ['name' => 'BLACK               '], // 146
            ['name' => 'SHASTA WHITE        '], // 147
            ['name' => 'WHITE TRI           '], // 148
            ['name' => 'BLACK               '], // 149
            ['name' => 'WHITE               '], // 150
            ['name' => 'GRANADA BLACK PEARL '], // 151
            ['name' => 'FROST WHITE         '], // 152
            ['name' => 'KAISER SILVER METALI'], // 153
            ['name' => 'BERLINA BLACK       '], // 154
            ['name' => 'VOGUE SILVER M.     '], // 155
            ['name' => 'SEBRING SILVER METAL'], // 156
            ['name' => 'NIGHTSHADE GRAY PEAR'], // 157
            ['name' => 'TAFFETA WHITE       '], // 158
            ['name' => 'NEW VOGUE SILVER M  '], // 159
            ['name' => 'CAYMAN WHITE PEARL  '], // 160
            ['name' => 'TRAFAGAL GRAY METAL.'], // 161
            ['name' => 'STARLIGTH BLACK P   '], // 162
            ['name' => 'WHITE DIAMOND P     '], // 163
            ['name' => 'ATHLETE GRAY METALIC'], // 164
            ['name' => 'REGENT SILVER M.    '], // 165
            ['name' => 'CANYON STONE SIL.M. '], // 166
            ['name' => 'LIGHTNING SIL. M.   '], // 167
            ['name' => 'SATIN SILVER M.     '], // 168
            ['name' => 'PREMIUM WHITE PEARL '], // 169
            ['name' => 'QUANTUM GRAY M.     '], // 170
            ['name' => 'QUANTUM GRAY M.     '], // 171
            ['name' => 'BRILLIANT WHITE PEAR'], // 172
            ['name' => 'STARLIGHT SILVER M  '], // 173
            ['name' => 'LAKESHORE SILVER M. '], // 174
            ['name' => 'GLOBAL SILVER M     '], // 175
            ['name' => 'ALABASTER SILVER M  '], // 176
            ['name' => 'ALABASTER SILVER M  '], // 177
            ['name' => 'WHISTLER SILVER     '], // 178
            ['name' => 'SUPER PLATINUM II M.'], // 179
            ['name' => 'CRYSTAL BLACK P     '], // 180
            ['name' => 'CRYSTAL BLACK P.    '], // 181
            ['name' => 'CRYSTAL BLACK P     '], // 182
            ['name' => 'POLISHED METAL M.   '], // 183
            ['name' => 'PALLADIUM M.        '], // 184
            ['name' => 'GRAPHITE LUSTER M.  '], // 185
            ['name' => 'GRAPHITE LUSTER M   '], // 186
            ['name' => 'BELLANOVA WHITE P.  '], // 187
            ['name' => 'BELLANOVA WHITE P   '], // 188
            ['name' => 'FORGED SILVER M     '], // 189
            ['name' => 'MODERN STEEL M.     '], // 190
            ['name' => 'MODERN STEEL M      '], // 191
            ['name' => 'SLATE SILVER M.     '], // 192
            ['name' => 'LUNAR SILVER M      '], // 193
            ['name' => 'SOURCE SILVER M     '], // 194
            ['name' => '130R WHITE          '], // 195
            ['name' => 'PACIFIC PEWTER M    '], // 196
            ['name' => 'SONIC GRAY P.       '], // 197
            ['name' => 'PLATINUM WHITE P    '], // 198
            ['name' => 'LIQUID CARBON M     '], // 199
            ['name' => 'MAJESTIC BLACK P    '], // 200
            ['name' => 'OPAL WHITE SILVER   '], // 201
            ['name' => 'METEORITE GRAY M    '], // 202
            ['name' => 'URBAN GRAY P        '], // 203
            ['name' => 'GOTHAM GRAY MATTE   '], // 204
            ['name' => 'WHITE               '], // 205
            ['name' => 'BLACK PEAR          '], // 206
            ['name' => 'SILVER              '], // 207
            ['name' => 'BLACK               '], // 208
            ['name' => 'ORANGE              '], // 209
            ['name' => 'REPSOL              '], // 210
            ['name' => 'PEARL DARK          '], // 211
            ['name' => 'MORROCAN BLUE R     '], // 212
            ['name' => 'DARK AMETHYST PEARL '], // 213
            ['name' => 'OPAL LAVENDER M.    '], // 214
            ['name' => 'GUNMETAL M          '], // 215
            ['name' => 'PHANTOM VIOLET P    '], // 216
            ['name' => 'GRAY                '], // 217
            ['name' => 'PEARL SUNBEAM WHITE '], // 218
            ['name' => 'PEARL BLUE          '], // 219
            ['name' => 'PLATA               '], // 220
            ['name' => 'PLATEADO            '], // 221
            ['name' => 'ROJO                '], // 222
            ['name' => 'REDROCK P           '], // 223
            ['name' => 'ROYAL RUBY RED PEARL'], // 224
            ['name' => 'REDONDO RED P.      '], // 225
            ['name' => 'TANGO RED PEARL     '], // 226
            ['name' => 'DARK CHERRY P       '], // 227
            ['name' => 'DARK CHERRY P       '], // 228
            ['name' => 'ROSS WHITE          '], // 229
            ['name' => 'PATRIOT RED         '], // 230
            ['name' => 'RED                 '], // 231
            ['name' => 'RED PEARL           '], // 232
            ['name' => 'RUBY RED PEARL      '], // 233
            ['name' => 'BURNING RED PEARL   '], // 234
            ['name' => 'FIREPEPPER PEARL    '], // 235
            ['name' => 'RALLYE RED          '], // 236
            ['name' => 'CHIANTI RED PEARL   '], // 237
            ['name' => 'NEW RED PEARL       '], // 238
            ['name' => 'DARK CHERRY P       '], // 239
            ['name' => 'MOLTEN LAVA P       '], // 240
            ['name' => 'CRIMSON GARNET      '], // 241
            ['name' => 'CRIMSON PEARL       '], // 242
            ['name' => 'BASQUE RED P. II    '], // 243
            ['name' => 'DARK CHERRY P.II    '], // 244
            ['name' => 'CURVA RED           '], // 245
            ['name' => 'BURGUNDY NIGHT P    '], // 246
            ['name' => 'DEEP SCARLET P      '], // 247
            ['name' => 'PERFORMANCE RED     '], // 248
            ['name' => 'RADIANT RED M       '], // 249
            ['name' => 'COFFEE CHERRY RED   '], // 250
            ['name' => 'BORDEAUX RED PEARL  '], // 251
            ['name' => 'MILANO RED          '], // 252
            ['name' => 'SUPER MARINE BLUE P.'], // 253
            ['name' => 'MATADOR RED PEARL   '], // 254
            ['name' => 'SAN MARINO RED      '], // 255
            ['name' => 'PASSION ORANGE M.   '], // 256
            ['name' => 'ISLAND CORAL        '], // 257
            ['name' => 'INZA RED P.         '], // 258
            ['name' => 'ROMA RED            '], // 259
            ['name' => 'REDLINE ORANGE P.   '], // 260
            ['name' => 'RED                 '], // 261
            ['name' => 'RED PEARL           '], // 262
            ['name' => 'ROJO                '], // 263
            ['name' => 'PEPPY MAGENTA R     '], // 264
            ['name' => 'NEON PINK           '], // 265
            ['name' => 'HORIZON GRAY METALLI'], // 266
            ['name' => 'AUBERGINE P/BLACK CP'], // 267
            ['name' => 'SIGNET SILVER M.    '], // 268
            ['name' => 'SIGNET SILVER M.    '], // 269
            ['name' => 'VINTAGE PLUM P.     '], // 270
            ['name' => 'SHASTA WHITE        '], // 271
            ['name' => 'SILVER              '], // 272
            ['name' => 'SILVER MET          '], // 273
            ['name' => 'KONA COFFE M        '], // 274
            ['name' => 'RED                 '], // 275
            ['name' => 'HEATHER MIST        '], // 276
            ['name' => 'VERDE               '], // 277
            ['name' => 'WHITE/BLACK         '], // 278
            ['name' => 'WHITE               '], // 279
            ['name' => 'WHITE PEARL         '], // 280
            ['name' => 'WHITE PEARL         '], // 281
            ['name' => 'CITRIC YELLOW R     '], // 282
            ['name' => 'INDY YELLOW PEARL   '], // 283
            ['name' => 'RACING SUNLIGHT YELO'], // 284
            ['name' => 'SUNBURST YELLOW M.  '], // 285
            ['name' => 'SPARKLE YELLOW M    '], // 286
            ['name' => 'INCA PEARL          '], // 287
            ['name' => 'MYSTIC YELLOW P     '], // 288
            ['name' => 'YELLOW              '], // 289
            ['name' => 'MOJAVE MIST METALLIC'], // 290
            ['name' => 'DESERT MIST M.      '], // 291
            ['name' => 'SANDSTONE M.        '], // 292
            ['name' => 'DESERT ROCK M.      '], // 293
            ['name' => 'OPAL BEIGE METALLIC '], // 294
            ['name' => 'HABANERO RED P.     '], // 295
            ['name' => 'BORREGO BEIGE       '], // 296
            ['name' => 'BORREGO BEIGE M.    '], // 297
            ['name' => 'MOCHA M.            '], // 298
            ['name' => 'BOLD BEIGE M.       '], // 299
            ['name' => 'DARK AMBER M.       '], // 300
            ['name' => 'SPARKLING BROWN M   '], // 301
            ['name' => 'SPARKY ORANGE R     '], // 302
            ['name' => 'LADAKH BROWN        '], // 303
            ['name' => 'HETHER MIST M.      '], // 304
            ['name' => 'GRANITE SILVER PEARL'], // 305
            ['name' => 'ROMANESQUE BRONZE P.'], // 306
            ['name' => 'PASSION ORNAGE METAL'], // 307
            ['name' => 'MESA BEIGE METALLIC '], // 308
            ['name' => 'TOPAZ SILVER M.     '], // 309
            ['name' => 'CHAMPAGNE BEIGE META'], // 310
            ['name' => 'NAPLES GOLD METALLIC'], // 311
            ['name' => 'TITANIUM METALLIC   '], // 312
            ['name' => 'SHORELINE MIST M.   '], // 313
            ['name' => 'FRESH COPPER M.     '], // 314
            ['name' => 'BORREGO BEIGE       '], // 315
            ['name' => 'BORREGO BEIGE M     '], // 316
            ['name' => 'CARBON BRONZE P     '], // 317
            ['name' => 'CARBON BRONZE P     '], // 318
            ['name' => 'BORREGO BEIGE       '], // 319
            ['name' => 'BORREGO BEIGE       '], // 320
            ['name' => 'URBAN TITANIUM M.   '], // 321
            ['name' => 'AMBER BROWNSTONE    '], // 322
            ['name' => 'CHAMPAGNE FROST P.  '], // 323
            ['name' => 'SPARPLING BROWN M   '], // 324
            ['name' => 'KONA COFFEE M       '], // 325
            ['name' => 'BLACK COPPER PEARL  '], // 326
            ['name' => 'BLACK COPPER PEARL  '], // 327
            ['name' => 'GOLDEN BROWN M      '], // 328
            ['name' => 'COPPER SUNSET       '], // 329
            ['name' => 'COPPER SUNSET P     '], // 330
            ['name' => 'Sandstorm M         '], // 331
            ['name' => 'CANYON BRONZE M     '], // 332
            ['name' => 'MIDNIGHT AMETHYST   '], // 333
        ];

        // eliminar espacios en blanco
        $data = array_map(function ($item) {
            $item['name'] = trim($item['name']);
            return $item;
        }, $data);

        // listado de todos los colores
        Color::insert($data);
    }
}
