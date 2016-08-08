<?php

require_once __DIR__ . '/../source/Trader.php';
require_once __DIR__ . '/../source/TraderTrait.php';

class TraderTest extends PHPUnit_Framework_TestCase
{

    protected $History =
        [
            'Open'   =>
                [
                    '37.560001', '36.889999', '36.25', '35.580002', '35.869999', '36.400002', '37.639999', '37.369999',
                    '37.369999', '37.27', '37.43', '37.389999', '37.43', '36.630001', '36.700001', '36.970001', '36.82',
                    '36.84', '36.900002', '36.669998', '37.110001', '36.66', '37.25', '37.73', '36.880001', '36.130001',
                    '36.630001', '36.849998', '36.459999', '36.049999', '36.939999', '37.09', '37.439999', '37.029999',
                    '36.91', '37.389999', '37.279999', '37.169998', '36.970001', '36.549999', '37.060001', '35.810001',
                    '36.25', '36.650002', '36.509998', '36.84', '37.52', '37.32', '37.470001', '37.50', '37.919998',
                    '37.099998', '36.459999', '36.240002', '37.130001', '37.470001', '36.939999', '36.650002',
                    '36.380001', '36.849998', '35.860001', '36.400002', '36.700001', '36.549999', '36.540001',
                    '36.509998', '36.610001', '35.049999', '35.389999', '34.450001', '35.43', '34.68', '35.00',
                    '34.540001', '33.880001', '33.029999', '33.32', '33.75', '33.290001', '33.59', '33.09', '33.66',
                    '33.68', '32.91', '32.709999', '32.810001', '32.040001', '31.309999', '31.68', '30.74', '30.41',
                    '31.200001', '30.65', '30.190001', '29.559999', '29.469999', '27.98', '27.120001', '26.459999',
                    '27.110001', '26.639999', '27.610001', '29.059999', '27.91', '28.450001', '29.32', '29.27', '29.10',
                    '30.59', '29.90', '29.76', '29.959999', '29.969999', '28.75', '28.98', '29.84', '29.280001',
                    '29.690001', '30.889999', '30.58', '30.65', '30.51', '30.969999', '31.67', '31.549999', '32.119999',
                    '33.220001', '33.849998', '33.630001', '33.900002', '34.189999', '34.240002', '32.990002',
                    '33.119999', '33.099998', '33.810001', '33.150002', '32.529999', '32.939999', '34.009998',
                    '34.490002', '35.799999', '34.240002', '34.759998', '34.34', '35.59', '35.00', '33.869999',
                    '33.029999', '32.790001', '32.77', '33.09', '33.00', '32.860001', '33.209999', '32.889999',
                    '33.009998', '32.23', '32.779999', '33.200001', '34.209999', '33.450001', '34.07', '34.939999',
                    '35.02', '34.889999', '35.150002', '35.459999', '35.139999', '34.869999', '34.299999', '34.970001',
                    '33.130001', '32.650002', '31.26', '32.060001', '33.490002', '33.259998', '33.639999', '32.419998',
                    '32.279999', '32.560001', '32.709999', '32.349998', '31.790001', '31.309999', '30.790001',
                    '30.799999', '28.620001', '28.950001', '28.65', '28.58', '29.030001', '29.66', '29.469999',
                    '30.559999', '30.780001', '31.200001', '30.51', '31.309999', '31.139999', '29.719999', '30.68',
                    '31.09', '31.35', '30.40', '32.200001', '32.00', '31.860001', '32.009998', '31.49', '32.91',
                    '33.32', '33.360001', '32.459999', '32.98', '29.02', '33.580002', '34.77', '35.669998', '35.779999',
                    '36.240002', '35.82', '35.080002', '34.290001', '36.740002', '36.869999', '36.52', '37.34', '37.32',
                    '36.610001', '36.669998', '37.560001', '37.50', '37.919998', '37.639999', '38.310001', '39.580002',
                    '39.299999', '38.57', '39.610001', '39.98', '39.189999', '38.700001', '38.509998', '38.650002',
                    '38.25', '38.349998', '38.23', '37.200001', '38.240002', '38.759998', '39.259998', '39.459999',
                ],
            'High'   =>
                [
                    '38.080002', '37.580002', '37.080002', '36.139999', '36.009998', '36.950001', '37.779999', '37.52',
                    '37.549999', '37.68', '37.439999', '37.450001', '37.599998', '37.439999', '36.91', '37.139999',
                    '37.73', '37.299999', '36.990002', '37.200001', '37.110001', '37.220001', '37.740002', '38.080002',
                    '37.880001', '36.849998', '36.959999', '37.630001', '36.950001', '36.720001', '37.23', '37.50',
                    '37.700001', '37.790001', '37.07', '37.509998', '37.630001', '37.580002', '37.349998', '37.310001',
                    '37.450001', '36.09', '36.41', '36.740002', '36.98', '37.439999', '37.59', '37.540001', '37.540001',
                    '38.09', '38.119999', '38.189999', '36.73', '37.00', '37.150002', '37.50', '37.349998', '36.830002',
                    '36.849998', '36.919998', '37.25', '37.00', '36.919998', '37.50', '36.880001', '37.02', '37.279999',
                    '36.43', '35.450001', '34.869999', '35.700001', '35.610001', '36.099998', '35.209999', '34.549999',
                    '34.080002', '33.459999', '34.09', '33.860001', '33.599998', '33.52', '33.82', '34.380001', '33.93',
                    '33.209999', '33.240002', '32.849998', '32.459999', '31.90', '31.360001', '31.120001', '31.379999',
                    '31.209999', '30.23', '30.139999', '29.66', '29.440001', '27.32', '26.969999', '27.809999',
                    '27.690001', '27.969999', '29.139999', '29.23', '28.610001', '30.23', '29.790001', '29.51',
                    '30.629999', '30.530001', '30.190001', '30.389999', '30.52', '29.799999', '29.110001', '30.00',
                    '29.77', '30.57', '31.17', '30.969999', '30.75', '31.540001', '31.190001', '32.459999', '32.330002',
                    '32.349998', '33.689999', '34.040001', '34.169998', '33.91', '34.740002', '34.580002', '34.209999',
                    '33.299999', '33.630001', '34.080002', '33.880001', '33.389999', '33.27', '34.150002', '34.73',
                    '35.84', '34.98', '34.919998', '35.200001', '35.720001', '36.389999', '33.889999', '33.830002',
                    '33.09', '33.52', '33.189999', '33.869999', '33.299999', '33.50', '33.02', '33.119999', '32.990002',
                    '33.040001', '33.849998', '34.23', '34.130001', '34.080002', '35.200001', '35.299999', '35.240002',
                    '35.34', '35.48', '35.700001', '35.150002', '35.27', '35.470001', '33.490002', '33.360001', '31.90',
                    '32.43', '33.59', '33.630001', '33.860001', '33.490002', '32.490002', '32.830002', '33.02', '32.689999',
                    '32.50', '31.99', '31.190001', '31.200001', '30.709999', '29.00', '29.110001', '29.23', '29.219999',
                    '29.709999', '29.57', '30.57', '30.92', '31.74', '30.799999', '31.33', '31.77', '31.23', '30.92',
                    '31.43', '31.59', '31.799999', '32.830002', '32.290001', '32.740002', '32.029999', '32.099998',
                    '32.990002', '33.57', '33.77', '32.619999', '33.029999', '32.279999', '34.02', '34.950001',
                    '35.669998', '36.189999', '36.240002', '36.349998', '36.610001', '34.77', '36.77', '37.689999',
                    '36.759998', '37.52', '37.709999', '37.209999', '36.98', '37.57', '37.689999', '37.919998',
                    '37.919998', '38.310001', '39.580002', '39.779999', '39.630001', '39.849998', '39.98', '39.790001',
                    '38.959999', '38.799999', '39.029999', '38.799999', '38.419998', '38.68', '37.490002', '38.380001',
                    '39.119999', '39.639999', '39.779999',
                ],
            'Low'    =>
                [
                    '37.43', '36.889999', '36.25', '35.50', '35.049999', '36.09', '37.41', '37.169998', '37.200001',
                    '37.240002', '36.810001', '36.540001', '37.099998', '36.630001', '36.419998', '36.59', '36.709999',
                    '36.84', '36.630001', '36.52', '36.50', '36.580002', '36.560001', '37.50', '36.84', '36.07',
                    '35.470001', '36.77', '36.43', '35.880001', '36.669998', '36.889999', '37.25', '36.880001',
                    '36.380001', '36.790001', '37.200001', '37.139999', '36.919998', '36.490002', '36.860001',
                    '35.740002', '35.91', '36.32', '36.150002', '36.509998', '36.630001', '36.91', '37.18', '37.16',
                    '37.349998', '37.00', '36.110001', '35.880001', '36.419998', '36.849998', '36.900002', '36.279999',
                    '36.32', '35.619999', '35.720001', '36.310001', '36.220001', '36.540001', '36.310001', '36.50',
                    '36.439999', '35.009998', '34.619999', '33.93', '34.709999', '34.68', '35.00', '34.380001',
                    '33.869999', '33.00', '33.110001', '33.509998', '32.84', '32.09', '32.779999', '32.84', '33.59',
                    '32.759998', '32.419998', '32.77', '32.040001', '31.309999', '31.219999', '30.24', '29.799999',
                    '30.51', '30.389999', '29.700001', '29.389999', '29.059999', '27.940001', '26.719999', '26.15',
                    '26.84', '26.51', '26.48', '27.73', '27.709999', '26.57', '28.129999', '28.790001', '28.51',
                    '28.60', '29.450001', '29.620001', '29.66', '29.309999', '28.190001', '27.440001', '29.309999',
                    '28.59', '28.709999', '29.33', '30.209999', '29.74', '30.00', '30.02', '31.60', '31.530001',
                    '31.139999', '33.18', '33.349998', '33.599998', '33.349998', '34.099998', '33.990002', '32.970001',
                    '32.689999', '32.869999', '33.110001', '32.91', '32.50', '32.209999', '32.82', '33.91', '33.150002',
                    '34.029999', '34.470001', '34.18', '34.099998', '34.77', '33.470001', '32.849998', '32.439999',
                    '32.75', '32.610001', '32.869999', '32.689999', '32.580002', '32.32', '32.619999', '32.119999',
                    '32.169998', '33.130001', '33.029999', '33.259998', '33.080002', '33.459999', '34.16', '34.75',
                    '34.650002', '35.07', '35.049999', '34.700001', '34.299999', '33.880001', '33.00', '32.240002',
                    '31.209999', '31.01', '32.77', '33.18', '33.16', '32.400002', '31.77', '32.32', '32.549999',
                    '31.99', '31.73', '31.209999', '30.66', '30.35', '28.43', '28.440001', '28.49', '27.85',
                    '27.200001', '28.91', '28.85', '29.629999', '30.17', '30.879999', '30.41', '30.809999', '30.99',
                    '29.41', '30.00', '30.629999', '31.030001', '30.35', '30.860001', '31.440001', '31.799999',
                    '31.379999', '31.23', '32.23', '32.93', '32.950001', '31.110001', '31.540001', '29.00', '32.91',
                    '33.869999', '35.029999', '35.599998', '35.77', '35.720001', '34.82', '33.849998', '35.73',
                    '36.869999', '36.150002', '36.299999', '37.23', '36.599998', '36.369999', '36.619999', '37.299999',
                    '37.380001', '37.27', '37.650002', '38.669998', '39.060001', '38.259998', '39.349998', '39.259998',
                    '38.93', '38.599998', '38.150002', '38.439999', '38.099998', '37.779999', '37.52', '36.939999',
                    '36.580002', '38.459999', '39.189999', '39.150002',
                ],
            'Close'  =>
                [
                    '37.990002', '37.560001', '36.860001', '36.040001', '35.220001', '36.240002', '37.779999',
                    '37.360001', '37.400002', '37.290001', '36.939999', '37.389999', '37.32', '37.400002', '36.470001',
                    '36.830002', '37.349998', '36.970001', '36.73', '37.07', '36.599998', '37.150002', '36.650002',
                    '37.939999', '37.82', '36.759998', '35.59', '37.529999', '36.66', '36.50', '37.02', '37.240002',
                    '37.27', '37.48', '36.48', '37.029999', '37.369999', '37.439999', '37.18', '37.23', '36.939999',
                    '36.00', '36.009998', '36.529999', '36.599998', '36.59', '36.950001', '37.110001', '37.23', '37.48',
                    '37.669998', '37.84', '36.330002', '36.52', '36.509998', '37.169998', '37.310001', '36.66', '36.48',
                    '36.07', '36.169998', '36.66', '36.41', '37.02', '36.48', '36.810001', '36.560001', '36.32',
                    '35.23', '34.860001', '34.799999', '35.41', '35.470001', '35.169998', '34.279999', '34.009998',
                    '33.259998', '33.580002', '33.810001', '32.82', '33.509998', '32.93', '33.959999', '33.860001',
                    '32.880001', '32.91', '32.799999', '31.790001', '31.370001', '31.360001', '30.950001', '30.67',
                    '31.17', '30.040001', '29.42', '29.370001', '29.280001', '27.040001', '26.76', '27.10', '26.82',
                    '27.049999', '27.969999', '29.15', '27.68', '29.059999', '29.57', '29.51', '28.75', '29.690001',
                    '29.98', '29.780001', '29.75', '29.309999', '28.780001', '29.74', '29.139999', '30.32', '29.440001',
                    '30.690001', '30.17', '30.629999', '30.16', '32.16', '32.200001', '31.40', '33.259998', '33.369999',
                    '34.040001', '33.599998', '34.110001', '34.450001', '34.189999', '32.970001', '32.950001', '33.23',
                    '33.779999', '33.029999', '32.59', '32.91', '34.630001', '34.400002', '34.849998', '34.68', '34.91',
                    '34.34', '35.650002', '33.709999', '33.810001', '32.939999', '33.16', '32.959999', '33.360001',
                    '33.110001', '32.630001', '32.98', '32.860001', '32.950001', '32.189999', '33.23', '33.380001',
                    '33.990002', '33.68', '34.200001', '35.119999', '35.07', '34.720001', '35.27', '35.619999',
                    '35.049999', '35.189999', '34.299999', '33.400002', '33.169998', '31.67', '31.120001', '32.830002',
                    '33.50', '33.369999', '33.48', '32.09', '32.34', '32.860001', '32.52', '32.369999', '31.870001',
                    '30.959999', '30.85', '30.709999', '28.91', '28.91', '28.26', '27.60', '29.129999', '29.34',
                    '29.74', '30.40', '31.17', '30.74', '30.93', '31.40', '31.040001', '30.32', '31.43', '31.15',
                    '31.52', '30.90', '31.58', '32.540001', '31.77', '31.60', '32.240002', '33.139999', '33.689999',
                    '32.52', '31.74', '31.309999', '32.93', '34.099998', '35.189999', '35.689999', '36.099998',
                    '36.240002', '35.93', '34.490002', '36.029999', '37.150002', '36.669998', '36.459999', '37.25',
                    '37.119999', '36.689999', '36.669998', '37.419998', '37.669998', '37.720001', '37.84', '38.849998',
                    '39.209999', '39.240002', '39.73', '39.540001', '39.68', '38.91', '38.380001', '38.630001',
                    '38.759998', '37.919998', '37.610001', '37.23', '38.23', '38.610001', '39.380001', '39.330002',
                ],
            'Volume' =>
                [
                    '10602800', '15209900', '10808200', '10990700', '14108600', '19657800', '7710900', '6279200',
                    '5574600', '8957300', '12593900', '10634000', '10213200', '13023100', '6519800', '11216500',
                    '14759100', '9181900', '14757100', '8426100', '12059100', '12179300', '22177600', '12873600',
                    '14645900', '16285700', '33984900', '10623800', '7785800', '34330700', '7127500', '8497900',
                    '11340300', '16995100', '11073200', '11170900', '10010800', '7178500', '6157400', '9218200',
                    '13718900', '9668700', '9088800', '6585500', '12006800', '13175900', '16401800', '10083100',
                    '9832100', '9106700', '11658700', '30761900', '20460600', '17738300', '19046900', '16620000',
                    '17166400', '10447800', '13750800', '20273400', '38789100', '19445000', '12443000', '20227300',
                    '13656200', '18679000', '19849800', '23603400', '12981000', '14118600', '12217700', '11613900',
                    '13551300', '20552600', '9335700', '11002500', '10672300', '8252700', '12380800', '19452000',
                    '12653200', '21043800', '22924000', '22946600', '11361400', '10462200', '14850900', '21168500',
                    '16683500', '19907400', '12613500', '17072300', '21465100', '20735000', '15319400', '12949700',
                    '20187900', '13011900', '11188200', '9098800', '14324800', '24498200', '16379600', '28548200',
                    '55707000', '36544700', '12905700', '18979500', '15589300', '13534600', '11426200', '23176900',
                    '16298100', '16282500', '20458900', '20053000', '17572600', '15031400', '16692400', '13198500',
                    '17140100', '26322800', '21209100', '16047800', '14301100', '25194400', '7423300', '5933500',
                    '12621900', '11020800', '3470700', '13469200', '15531300', '9106700', '16921800', '13243500',
                    '12689400', '16140900', '15949600', '14936200', '16174200', '45101900', '19852600', '12047900',
                    '16109600', '17080500', '56708100', '11020400', '17534700', '5316100', '13257200', '13364700',
                    '11899700', '12498500', '14222100', '11105600', '10270400', '11087800', '11063300', '14273100',
                    '11804100', '11511000', '13645500', '16608600', '15679100', '17501800', '12394300', '15206700',
                    '17418900', '10796200', '15174300', '26380900', '15810300', '24308600', '18501200', '30390400',
                    '19349200', '10856500', '12209300', '19403800', '11282800', '15873800', '12580300', '11830400',
                    '14245400', '12224800', '10963900', '12883300', '29250500', '14467600', '18317900', '41895400',
                    '49541300', '12817500', '19109900', '12755400', '15614900', '18745000', '20538300', '17094200',
                    '22179700', '25661600', '22186900', '14365400', '14330900', '47058500', '26873900', '13854100',
                    '13748900', '15688100', '19903500', '13609000', '9366100', '19105100', '25414500', '15752300',
                    '23163400', '18373600', '15604400', '8976700', '11445300', '7933600', '12241100', '28987700',
                    '31405700', '13833200', '11351400', '11845500', '12299700', '6844000', '9051900', '9887300',
                    '15446100', '9542700', '10290600', '10333100', '12942700', '8590700', '9267400', '17714800',
                    '14861600', '14752100', '14864300', '8462400', '9147300', '9506500', '8713200', '10057600',
                    '16909400', '20529200', '19432500', '11803400', '7713000', '6398400',
                ],
        ];

//<editor-fold defaultstate="collapsed" desc="Constant Member Tests">
    public function testConstants_TRADER_MA_TYPE_SMA()
    {
        $this->assertEquals(TRADER_MA_TYPE_SMA, \LupeCode\phpTraderInterface\Trader::$TRADER_MA_TYPE_SMA);
    }

    public function testConstants_TRADER_MA_TYPE_EMA()
    {
        $this->assertEquals(TRADER_MA_TYPE_EMA, \LupeCode\phpTraderInterface\Trader::$TRADER_MA_TYPE_EMA);
    }

    public function testConstants_TRADER_MA_TYPE_WMA()
    {
        $this->assertEquals(TRADER_MA_TYPE_WMA, \LupeCode\phpTraderInterface\Trader::$TRADER_MA_TYPE_WMA);
    }

    public function testConstants_TRADER_MA_TYPE_DEMA()
    {
        $this->assertEquals(TRADER_MA_TYPE_DEMA, \LupeCode\phpTraderInterface\Trader::$TRADER_MA_TYPE_DEMA);
    }

    public function testConstants_TRADER_MA_TYPE_TEMA()
    {
        $this->assertEquals(TRADER_MA_TYPE_TEMA, \LupeCode\phpTraderInterface\Trader::$TRADER_MA_TYPE_TEMA);
    }

    public function testConstants_TRADER_MA_TYPE_TRIMA()
    {
        $this->assertEquals(TRADER_MA_TYPE_TRIMA, \LupeCode\phpTraderInterface\Trader::$TRADER_MA_TYPE_TRIMA);
    }

    public function testConstants_TRADER_MA_TYPE_KAMA()
    {
        $this->assertEquals(TRADER_MA_TYPE_KAMA, \LupeCode\phpTraderInterface\Trader::$TRADER_MA_TYPE_KAMA);
    }

    public function testConstants_TRADER_MA_TYPE_MAMA()
    {
        $this->assertEquals(TRADER_MA_TYPE_MAMA, \LupeCode\phpTraderInterface\Trader::$TRADER_MA_TYPE_MAMA);
    }

    public function testConstants_TRADER_MA_TYPE_T3()
    {
        $this->assertEquals(TRADER_MA_TYPE_T3, \LupeCode\phpTraderInterface\Trader::$TRADER_MA_TYPE_T3);
    }

    public function testConstants_TRADER_REAL_MIN()
    {
        $this->assertEquals(TRADER_REAL_MIN, \LupeCode\phpTraderInterface\Trader::$TRADER_REAL_MIN);
    }

    public function testConstants_TRADER_REAL_MAX()
    {
        $this->assertEquals(TRADER_REAL_MAX, \LupeCode\phpTraderInterface\Trader::$TRADER_REAL_MAX);
    }

    public function testConstants_TRADER_FUNC_UNST_ADX()
    {
        $this->assertEquals(TRADER_FUNC_UNST_ADX, \LupeCode\phpTraderInterface\Trader::$TRADER_FUNC_UNST_ADX);
    }

    public function testConstants_TRADER_FUNC_UNST_ADXR()
    {
        $this->assertEquals(TRADER_FUNC_UNST_ADXR, \LupeCode\phpTraderInterface\Trader::$TRADER_FUNC_UNST_ADXR);
    }

    public function testConstants_TRADER_FUNC_UNST_ATR()
    {
        $this->assertEquals(TRADER_FUNC_UNST_ATR, \LupeCode\phpTraderInterface\Trader::$TRADER_FUNC_UNST_ATR);
    }

    public function testConstants_TRADER_FUNC_UNST_CMO()
    {
        $this->assertEquals(TRADER_FUNC_UNST_CMO, \LupeCode\phpTraderInterface\Trader::$TRADER_FUNC_UNST_CMO);
    }

    public function testConstants_TRADER_FUNC_UNST_DX()
    {
        $this->assertEquals(TRADER_FUNC_UNST_DX, \LupeCode\phpTraderInterface\Trader::$TRADER_FUNC_UNST_DX);
    }

    public function testConstants_TRADER_FUNC_UNST_EMA()
    {
        $this->assertEquals(TRADER_FUNC_UNST_EMA, \LupeCode\phpTraderInterface\Trader::$TRADER_FUNC_UNST_EMA);
    }

    public function testConstants_TRADER_FUNC_UNST_HT_DCPERIOD()
    {
        $this->assertEquals(TRADER_FUNC_UNST_HT_DCPERIOD, \LupeCode\phpTraderInterface\Trader::$TRADER_FUNC_UNST_HT_DCPERIOD);
    }

    public function testConstants_TRADER_FUNC_UNST_HT_DCPHASE()
    {
        $this->assertEquals(TRADER_FUNC_UNST_HT_DCPHASE, \LupeCode\phpTraderInterface\Trader::$TRADER_FUNC_UNST_HT_DCPHASE);
    }

    public function testConstants_TRADER_FUNC_UNST_HT_PHASOR()
    {
        $this->assertEquals(TRADER_FUNC_UNST_HT_PHASOR, \LupeCode\phpTraderInterface\Trader::$TRADER_FUNC_UNST_HT_PHASOR);
    }

    public function testConstants_TRADER_FUNC_UNST_HT_TRENDLINE()
    {
        $this->assertEquals(TRADER_FUNC_UNST_HT_TRENDLINE, \LupeCode\phpTraderInterface\Trader::$TRADER_FUNC_UNST_HT_TRENDLINE);
    }

    public function testConstants_TRADER_FUNC_UNST_HT_TRENDMODE()
    {
        $this->assertEquals(TRADER_FUNC_UNST_HT_TRENDMODE, \LupeCode\phpTraderInterface\Trader::$TRADER_FUNC_UNST_HT_TRENDMODE);
    }

    public function testConstants_TRADER_FUNC_UNST_KAMA()
    {
        $this->assertEquals(TRADER_FUNC_UNST_KAMA, \LupeCode\phpTraderInterface\Trader::$TRADER_FUNC_UNST_KAMA);
    }

    public function testConstants_TRADER_FUNC_UNST_MAMA()
    {
        $this->assertEquals(TRADER_FUNC_UNST_MAMA, \LupeCode\phpTraderInterface\Trader::$TRADER_FUNC_UNST_MAMA);
    }

    public function testConstants_TRADER_FUNC_UNST_MFI()
    {
        $this->assertEquals(TRADER_FUNC_UNST_MFI, \LupeCode\phpTraderInterface\Trader::$TRADER_FUNC_UNST_MFI);
    }

    public function testConstants_TRADER_FUNC_UNST_MINUS_DI()
    {
        $this->assertEquals(TRADER_FUNC_UNST_MINUS_DI, \LupeCode\phpTraderInterface\Trader::$TRADER_FUNC_UNST_MINUS_DI);
    }

    public function testConstants_TRADER_FUNC_UNST_MINUS_DM()
    {
        $this->assertEquals(TRADER_FUNC_UNST_MINUS_DM, \LupeCode\phpTraderInterface\Trader::$TRADER_FUNC_UNST_MINUS_DM);
    }

    public function testConstants_TRADER_FUNC_UNST_NATR()
    {
        $this->assertEquals(TRADER_FUNC_UNST_NATR, \LupeCode\phpTraderInterface\Trader::$TRADER_FUNC_UNST_NATR);
    }

    public function testConstants_TRADER_FUNC_UNST_PLUS_DI()
    {
        $this->assertEquals(TRADER_FUNC_UNST_PLUS_DI, \LupeCode\phpTraderInterface\Trader::$TRADER_FUNC_UNST_PLUS_DI);
    }

    public function testConstants_TRADER_FUNC_UNST_PLUS_DM()
    {
        $this->assertEquals(TRADER_FUNC_UNST_PLUS_DM, \LupeCode\phpTraderInterface\Trader::$TRADER_FUNC_UNST_PLUS_DM);
    }

    public function testConstants_TRADER_FUNC_UNST_RSI()
    {
        $this->assertEquals(TRADER_FUNC_UNST_RSI, \LupeCode\phpTraderInterface\Trader::$TRADER_FUNC_UNST_RSI);
    }

    public function testConstants_TRADER_FUNC_UNST_STOCHRSI()
    {
        $this->assertEquals(TRADER_FUNC_UNST_STOCHRSI, \LupeCode\phpTraderInterface\Trader::$TRADER_FUNC_UNST_STOCHRSI);
    }

    public function testConstants_TRADER_FUNC_UNST_T3()
    {
        $this->assertEquals(TRADER_FUNC_UNST_T3, \LupeCode\phpTraderInterface\Trader::$TRADER_FUNC_UNST_T3);
    }

    public function testConstants_TRADER_FUNC_UNST_ALL()
    {
        $this->assertEquals(TRADER_FUNC_UNST_ALL, \LupeCode\phpTraderInterface\Trader::$TRADER_FUNC_UNST_ALL);
    }

    public function testConstants_TRADER_FUNC_UNST_NONE()
    {
        $this->assertEquals(TRADER_FUNC_UNST_NONE, \LupeCode\phpTraderInterface\Trader::$TRADER_FUNC_UNST_NONE);
    }

    public function testConstants_TRADER_COMPATIBILITY_DEFAULT()
    {
        $this->assertEquals(TRADER_COMPATIBILITY_DEFAULT, \LupeCode\phpTraderInterface\Trader::$TRADER_COMPATIBILITY_DEFAULT);
    }

    public function testConstants_TRADER_COMPATIBILITY_METASTOCK()
    {
        $this->assertEquals(TRADER_COMPATIBILITY_METASTOCK, \LupeCode\phpTraderInterface\Trader::$TRADER_COMPATIBILITY_METASTOCK);
    }

    public function testConstants_TRADER_ERR_SUCCESS()
    {
        $this->assertEquals(TRADER_ERR_SUCCESS, \LupeCode\phpTraderInterface\Trader::$TRADER_ERR_SUCCESS);
    }

    public function testConstants_TRADER_ERR_LIB_NOT_INITIALIZE()
    {
        $this->assertEquals(TRADER_ERR_LIB_NOT_INITIALIZE, \LupeCode\phpTraderInterface\Trader::$TRADER_ERR_LIB_NOT_INITIALIZE);
    }

    public function testConstants_TRADER_ERR_BAD_PARAM()
    {
        $this->assertEquals(TRADER_ERR_BAD_PARAM, \LupeCode\phpTraderInterface\Trader::$TRADER_ERR_BAD_PARAM);
    }

    public function testConstants_TRADER_ERR_ALLOC_ERR()
    {
        $this->assertEquals(TRADER_ERR_ALLOC_ERR, \LupeCode\phpTraderInterface\Trader::$TRADER_ERR_ALLOC_ERR);
    }

    public function testConstants_TRADER_ERR_GROUP_NOT_FOUND()
    {
        $this->assertEquals(TRADER_ERR_GROUP_NOT_FOUND, \LupeCode\phpTraderInterface\Trader::$TRADER_ERR_GROUP_NOT_FOUND);
    }

    public function testConstants_TRADER_ERR_FUNC_NOT_FOUND()
    {
        $this->assertEquals(TRADER_ERR_FUNC_NOT_FOUND, \LupeCode\phpTraderInterface\Trader::$TRADER_ERR_FUNC_NOT_FOUND);
    }

    public function testConstants_TRADER_ERR_INVALID_HANDLE()
    {
        $this->assertEquals(TRADER_ERR_INVALID_HANDLE, \LupeCode\phpTraderInterface\Trader::$TRADER_ERR_INVALID_HANDLE);
    }

    public function testConstants_TRADER_ERR_INVALID_PARAM_HOLDER()
    {
        $this->assertEquals(TRADER_ERR_INVALID_PARAM_HOLDER, \LupeCode\phpTraderInterface\Trader::$TRADER_ERR_INVALID_PARAM_HOLDER);
    }

    public function testConstants_TRADER_ERR_INVALID_PARAM_HOLDER_TYPE()
    {
        $this->assertEquals(TRADER_ERR_INVALID_PARAM_HOLDER_TYPE, \LupeCode\phpTraderInterface\Trader::$TRADER_ERR_INVALID_PARAM_HOLDER_TYPE);
    }

    public function testConstants_TRADER_ERR_INVALID_PARAM_FUNCTION()
    {
        $this->assertEquals(TRADER_ERR_INVALID_PARAM_FUNCTION, \LupeCode\phpTraderInterface\Trader::$TRADER_ERR_INVALID_PARAM_FUNCTION);
    }

    public function testConstants_TRADER_ERR_INPUT_NOT_ALL_INITIALIZE()
    {
        $this->assertEquals(TRADER_ERR_INPUT_NOT_ALL_INITIALIZE, \LupeCode\phpTraderInterface\Trader::$TRADER_ERR_INPUT_NOT_ALL_INITIALIZE);
    }

    public function testConstants_TRADER_ERR_OUTPUT_NOT_ALL_INITIALIZE()
    {
        $this->assertEquals(TRADER_ERR_OUTPUT_NOT_ALL_INITIALIZE, \LupeCode\phpTraderInterface\Trader::$TRADER_ERR_OUTPUT_NOT_ALL_INITIALIZE);
    }

    public function testConstants_TRADER_ERR_OUT_OF_RANGE_START_INDEX()
    {
        $this->assertEquals(TRADER_ERR_OUT_OF_RANGE_START_INDEX, \LupeCode\phpTraderInterface\Trader::$TRADER_ERR_OUT_OF_RANGE_START_INDEX);
    }

    public function testConstants_TRADER_ERR_OUT_OF_RANGE_END_INDEX()
    {
        $this->assertEquals(TRADER_ERR_OUT_OF_RANGE_END_INDEX, \LupeCode\phpTraderInterface\Trader::$TRADER_ERR_OUT_OF_RANGE_END_INDEX);
    }

    public function testConstants_TRADER_ERR_INVALID_LIST_TYPE()
    {
        $this->assertEquals(TRADER_ERR_INVALID_LIST_TYPE, \LupeCode\phpTraderInterface\Trader::$TRADER_ERR_INVALID_LIST_TYPE);
    }

    public function testConstants_TRADER_ERR_BAD_OBJECT()
    {
        $this->assertEquals(TRADER_ERR_BAD_OBJECT, \LupeCode\phpTraderInterface\Trader::$TRADER_ERR_BAD_OBJECT);
    }

    public function testConstants_TRADER_ERR_NOT_SUPPORTED()
    {
        $this->assertEquals(TRADER_ERR_NOT_SUPPORTED, \LupeCode\phpTraderInterface\Trader::$TRADER_ERR_NOT_SUPPORTED);
    }

    public function testConstants_TRADER_ERR_INTERNAL_ERROR()
    {
        $this->assertEquals(TRADER_ERR_INTERNAL_ERROR, \LupeCode\phpTraderInterface\Trader::$TRADER_ERR_INTERNAL_ERROR);
    }

    public function testConstants_TRADER_ERR_UNKNOWN_ERROR()
    {
        $this->assertEquals(TRADER_ERR_UNKNOWN_ERROR, \LupeCode\phpTraderInterface\Trader::$TRADER_ERR_UNKNOWN_ERROR);
    }
//</editor-fold>

//<editor-fold defaultstate="collapsed" desc="Interface Function Tests">
    public function testInterfaceFunctions_acos()
    {
        $Close = $this->History['Close'];
        $Close = array_map('cos', $Close);

        $this->assertEquals(trader_acos($Close), \LupeCode\phpTraderInterface\Trader::acos($Close));
    }

    public function testInterfaceFunctions_ad()
    {
        $High   = $this->History['High'];
        $Low    = $this->History['Low'];
        $Close  = $this->History['Close'];
        $Volume = $this->History['Volume'];

        $this->assertEquals(trader_ad($High, $Low, $Close, $Volume), \LupeCode\phpTraderInterface\Trader::ad($High, $Low, $Close, $Volume));
    }

    public function testInterfaceFunctions_add()
    {
        $High   = $this->History['High'];
        $Low    = $this->History['Low'];

        $this->assertEquals(trader_add($High, $Low), \LupeCode\phpTraderInterface\Trader::add($High, $Low));
    }

    public function testInterfaceFunctions_adosc()
    {
        $High   = $this->History['High'];
        $Low    = $this->History['Low'];
        $Close  = $this->History['Close'];
        $Volume = $this->History['Volume'];

        $this->assertEquals(trader_adosc($High, $Low, $Close, $Volume), \LupeCode\phpTraderInterface\Trader::adosc($High, $Low, $Close, $Volume));
    }

    public function testInterfaceFunctions_adx()
    {
        $High   = $this->History['High'];
        $Low    = $this->History['Low'];
        $Close  = $this->History['Close'];

        $this->assertEquals(trader_adx($High, $Low, $Close), \LupeCode\phpTraderInterface\Trader::adx($High, $Low, $Close));
    }

    public function testInterfaceFunctions_adxr()
    {
        $Open   = $this->History['Open'];
        $High   = $this->History['High'];
        $Low    = $this->History['Low'];
        $Close  = $this->History['Close'];
        $Volume = $this->History['Volume'];

        $this->assertEquals(trader_adxr($High, $Low, $Close), \LupeCode\phpTraderInterface\Trader::adxr($High, $Low, $Close));
    }
//</editor-fold>

//<editor-fold defaultstate="collapsed" desc="Friendly Function Tests">

//</editor-fold>

}
