

import java.sql.Connection;
import java.sql.SQLException;
import java.sql.DriverManager;
import java.sql.PreparedStatement;
import java.sql.Statement;
import java.sql.ResultSet;
import java.util.*;


/**
 *
 * @author mateosokac
 */
public class DatabaseHandler extends Constants
{
	Connection connection;

	public DatabaseHandler() 
        {
            try{
                 Class.forName("org.apache.derby.jdbc.ClientDriver");
                 connection = (Connection) DriverManager.getConnection("jdbc:derby://localhost:1527/sample", "app", "app");
            }
            catch (SQLException e){
                e.printStackTrace();
                System.out.println("--------------------------nije se connection napravio");
            }
            catch(Exception e){e.printStackTrace();System.out.println("--------------------------nije se connection napravio");};
	}

	public boolean close() 
        {
		try {connection.close();}catch(SQLException e){e.printStackTrace(); return false;};
		return true;
	}

	public ArrayList<ArrayList<String>> getData(String sql) throws SQLException 
        {
		Statement stmt = connection.createStatement();
		stmt.setEscapeProcessing(true);
		ResultSet rs = stmt.executeQuery(sql);
		ArrayList<ArrayList<String>> rv = new ArrayList<ArrayList<String>>();
		int colCount = rs.getMetaData().getColumnCount();

		while (rs.next())
                {
			ArrayList<String> row = new ArrayList<String>();
			for (int i = 1; i <= colCount; i++)
				row.add(rs.getString(i));
			rv.add(row);
		}

		rs.close();
		stmt.close();
		return rv;
	}
        
	public ArrayList<HashMap<String, String>> getDataWithColNames(String sql)
			throws SQLException {
		Statement stmt = connection.createStatement();
		stmt.setEscapeProcessing(true);
		ResultSet rs = stmt.executeQuery(sql);
		ArrayList<HashMap<String, String>> rv = new ArrayList<HashMap<String, String>>();

		int colCount = rs.getMetaData().getColumnCount();

		while (rs.next()) 
                {
			HashMap<String, String> row = new HashMap<String, String>();
			for (int i = 1; i <= colCount; i++)
				row.put(rs.getMetaData().getColumnName(i), rs.getString(i));
			rv.add(row);
		}

		rs.close();
		stmt.close();
		return rv;
	}

	public boolean setData(String sql) throws SQLException {
		Statement stmt = connection.createStatement();
		stmt.setEscapeProcessing(true);
		stmt.executeUpdate(sql);
		stmt.close();
		return true;
	}

	protected void end() throws SQLException {
		close();
	}

	
	private PreparedStatement parseSql(String sql, ArrayList<String> params) throws SQLException {
		PreparedStatement pstmt = connection.prepareStatement(sql);
		for (int i = 0; i < params.size(); i++) {
			String val = params.get(i);
			pstmt.setString(i + 1, val);
		}
		return pstmt;
	}

        public int updateDb(String sql, ArrayList<String> params) throws SQLException
        {
            PreparedStatement pstmt = parseSql(sql, params);
            int success = pstmt.executeUpdate();
            return success;
        }

	public ArrayList<ArrayList<String>> getData(String sql, ArrayList<String> params) throws SQLException {
		PreparedStatement pstmt = parseSql(sql, params);
		ResultSet rs = pstmt.executeQuery();
		ArrayList<ArrayList<String>> results = new ArrayList<ArrayList<String>>();

		int colCount = rs.getMetaData().getColumnCount();

		while (rs.next()) {
			ArrayList<String> row = new ArrayList<String>();
			for (int i = 1; i <= colCount; i++)
				row.add(rs.getString(i));
			results.add(row);
		}

		rs.close();
		pstmt.close();
		if (results.size() > 0) {
			return results;
		} else {
			return null;
		}
	}

	
}
