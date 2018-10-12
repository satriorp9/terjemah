<?php
$kode_bahasa = '';

switch ($tujuan) {
  case 'inggris':
  case 'english':
  case 'uk':
  case 'england':
    $kode_bahasa = 'en';
    break;

  case 'belanda':
  case 'netherland':
    $kode_bahasa = 'nl';
    break;

    case 'italia':
    case 'itali':
      $kode_bahasa = 'it';
      break;

      case 'cina':
      case 'china':
      case 'chinese':
      case 'mandarin':
        $kode_bahasa = 'zh';
        break;

        case 'korea':
        case 'hangul':
        case 'hanggul':
        case 'korsel':
          $kode_bahasa = 'ko';
          break;

          case 'jepang':
          case 'japan':
          case 'japanese':
          $kode_bahasa ='ja';
          break;

          case 'jerman':
          case 'germany':
          $kode_bahasa = 'de';
          break;

          case 'perancis':
          case 'france':
          case 'prancis':
          case 'french':
          $kode_bahasa = 'fr';
          break;

          case 'thailand':
          case 'thai':
          $kode_bahasa ='th';
          break;

          case 'hindi':
          case 'india':
          case 'hindia':
          $kode_bahasa = 'hi';
          break;

          case 'spanyol':
          case 'spain':
          case 'spanish':
          $kode_bahasa = 'es';
          break;

          case 'rusia':
          case 'russia':
          case 'russian':
          $kode_bahasa = 'ru';
          break;

          case 'arab':
          case 'arabic':
          case 'arabian':
          $kode_bahasa='ar';
          break;

case 'indonesia':
  $kode_bahasa = 'id';
  break;

    default:
    $kode_bahasa = 'null';
    break;
}

 ?>
